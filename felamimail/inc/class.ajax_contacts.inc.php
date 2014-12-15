<?php
/***************************************************************************\
* eGroupWare - FeLaMiMail                                                   *
* http://www.linux-at-work.de                                               *
* http://www.phpgw.de                                                       *
* http://www.egroupware.org                                                 *
* Written by : Lars Kneschke [lkneschke@linux-at-work.de]                   *
* -------------------------------------------------                         *
* This program is free software; you can redistribute it and/or modify it   *
* under the terms of the GNU General Public License as published by the     *
* Free Software Foundation; either version 2 of the License, or (at your    *
* option) any later version.                                                *
\***************************************************************************/

/* $Id$ */

class ajax_contacts {
	function ajax_contacts() {
		$GLOBALS['egw']->session->commit_session();
		$this->charset	= $GLOBALS['egw']->translation->charset();
	}

	function decodeFolderName($_folderName) {
		$folderName = translation::convert(html_entity_decode($_folderName, ENT_QUOTES, $this->charset),'UTF7-IMAP', $this->charset);
		$response = new xajaxResponse();
		$response->addScript("decodedFolder ='".$folderName."'");
		return $response->getXML();
	}

	function searchAddress($_searchString) {
		if ($GLOBALS['egw_info']['user']['apps']['addressbook']) {
			if (method_exists($GLOBALS['egw']->contacts,'search')) {
				// 1.3+
				$showAccounts = empty($GLOBALS['egw_info']['user']['preferences']['addressbook']['hide_accounts']);
				//error_log(__METHOD__.__LINE__.$_searchString);
				$seStAr = explode(' ',$_searchString);
				foreach ($seStAr as $k => $v) if (strlen($v)<3) unset($seStAr[$k]);
				$_searchString = trim(implode(' AND ',$seStAr));
				//error_log(__METHOD__.__LINE__.$_searchString);
				$filter = ($showAccounts?array():array('account_id' => null));
				$filter['cols_to_search']=array('n_prefix','n_given','n_family','org_name','email','email_home');
				$contacts = $GLOBALS['egw']->contacts->search(implode(' +',$seStAr),array('n_fn','n_prefix','n_given','n_family','org_name','email','email_home'),'n_fn','','%',false,'OR',array(0,100),$filter);
				// additionally search the accounts, if the contact storage is not the account storage
				if ($showAccounts && $GLOBALS['egw']->contacts->so_accounts)
				{
					$accounts = $GLOBALS['egw']->contacts->search(array(
						'n_prefix'       => $_searchString,
						'n_given'       => $_searchString,
						'n_family'       => $_searchString,
						'org_name'       => $_searchString,
						'email'      => $_searchString,
						'email_home' => $_searchString,
					),array('n_fn','n_prefix','n_given','n_family','org_name','email','email_home'),'n_fn','','%',false,'OR',array(0,100),array('owner' => 0));

					if ($contacts && $accounts)
					{
						$contacts = array_merge($contacts,$accounts);
						usort($contacts,create_function('$a,$b','return strcasecmp($a["n_fn"],$b["n_fn"]);'));
					}
					elseif($accounts)
					{
						$contacts =& $accounts;
					}
					unset($accounts);
				}
			} else {
				// < 1.3
				$contacts = $GLOBALS['egw']->contacts->read(0,20,array(
					'fn' => 1,
					'email' => 1,
					'email_home' => 1,
				), $_searchString, 'tid=n', '', 'fn');
			}
		}
		$response = new xajaxResponse();

		if(is_array($contacts)) {
			$innerHTML	= '';
			$jsArray	= array();
			$i		= 0;

			foreach($contacts as $contact) {
				foreach(array($contact['email'],$contact['email_home']) as $email) {
					// avoid wrong addresses, if an rfc822 encoded address is in addressbook
					$email = preg_replace("/(^.*<)([a-zA-Z0-9_\-]+@[a-zA-Z0-9_\-\.]+)(.*)/",'$2',$email);
					if (method_exists($GLOBALS['egw']->contacts,'search'))
					{
						$contact['n_fn']='';
						if (!empty($contact['n_prefix'])) $contact['n_fn'] = $contact['n_prefix'];
						if (!empty($contact['n_given'])) $contact['n_fn'] .= ($contact['n_fn']?' ':'').$contact['n_given'];
						if (!empty($contact['n_family'])) $contact['n_fn'] .= ($contact['n_fn']?' ':'').$contact['n_family'];
						if (!empty($contact['org_name'])) $contact['n_fn'] .= ($contact['n_fn']?' ':'').'('.$contact['org_name'].')';
						$contact['n_fn'] = str_replace(array(',','@'),' ',$contact['n_fn']);
					}
					else
					{
						$contact['n_fn'] = str_replace(array(',','@'),' ',$contact['n_fn']);
					}
					$completeMailString = addslashes(trim($contact['n_fn'] ? $contact['n_fn'] : $contact['fn']) .' <'. trim($email) .'>');
					if(!empty($email) && in_array($completeMailString ,$jsArray) === false) {
						$i++;
						$str = $GLOBALS['egw']->translation->convert(trim($contact['n_fn'] ? $contact['n_fn'] : $contact['fn']) .' <'. trim($email) .'>', $this->charset, 'utf-8');
						#$innerHTML .= '<div class="inactiveResultRow" onclick="selectSuggestion('. $i .')">'.
						$innerHTML .= '<div class="inactiveResultRow" onmousedown="keypressed(13,1)" onmouseover="selectSuggestion('.($i-1).')">'.
							htmlentities($str, ENT_QUOTES, 'utf-8') .'</div>';
						$jsArray[$i] = $completeMailString;
					}
					if ($i > 10) break;	// we check for # of results here, as we might have empty email addresses
				}
			}

			if($jsArray) {
				$response->addAssign('resultBox', 'innerHTML', $innerHTML);
				$response->addScript('results = new Array("'.implode('","',$jsArray).'");');
				$response->addScript('displayResultBox();');
			}
			//$response->addScript("getResults();");
			//$response->addScript("selectSuggestion(-1);");
		} else {
			$response->addAssign('resultBox', 'className', 'resultBoxHidden');
		}

		return $response->getXML();
	}
}