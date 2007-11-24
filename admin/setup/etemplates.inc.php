<?php
	/**
	 * eGroupWare - eTemplates for Application admin
	 * http://www.egroupware.org 
	 * generated by soetemplate::dump4setup() 2007-11-24 20:46
	 *
	 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
	 * @package admin
	 * @subpackage setup
	 * @version $Id$
	 */

$templ_version=1;

$templ_data[] = array('name' => 'admin.accesslog','template' => '','lang' => '','group' => '0','version' => '1.3.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:3:{s:4:"type";s:9:"nextmatch";s:4:"size";s:24:"admin.accesslog.get_rows";s:4:"name";s:2:"nm";}}}s:4:"rows";i:1;s:4:"cols";i:1;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1164479537',);

$templ_data[] = array('name' => 'admin.accesslog.get_rows','template' => '','lang' => '','group' => '0','version' => '1.3.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:2:{s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";}i:1;a:4:{s:1:"A";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:7:"LoginID";s:4:"name";s:7:"loginid";}s:1:"B";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:2:"IP";s:4:"name";s:2:"ip";}s:1:"C";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:9:"Logintime";s:4:"name";s:2:"li";}s:1:"D";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:9:"Logoutime";s:4:"name";s:2:"lo";}}i:2;a:4:{s:1:"A";a:3:{s:4:"type";s:14:"select-account";s:4:"name";s:15:"${row}[loginid]";s:8:"readonly";s:1:"1";}s:1:"B";a:3:{s:4:"type";s:5:"label";s:4:"name";s:10:"${row}[ip]";s:7:"no_lang";s:1:"1";}s:1:"C";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:10:"${row}[li]";s:8:"readonly";s:1:"1";}s:1:"D";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:10:"${row}[lo]";s:8:"readonly";s:1:"1";}}}s:4:"rows";i:2;s:4:"cols";i:4;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1164479930',);

$templ_data[] = array('name' => 'admin.cmds','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:3:{s:4:"type";s:9:"nextmatch";s:4:"size";s:15:"admin.cmds.rows";s:4:"name";s:2:"nm";}}}s:4:"rows";i:1;s:4:"cols";i:1;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1195518120',);

$templ_data[] = array('name' => 'admin.cmds.rows','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:3:{s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";s:2:"h2";s:4:",!@1";}i:1;a:10:{s:1:"A";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:5:"Title";s:4:"name";s:5:"title";}s:1:"B";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:9:"Requested";s:4:"name";s:9:"requested";}s:1:"C";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:9:"Scheduled";s:4:"name";s:13:"cmd_scheduled";}s:1:"D";a:3:{s:4:"type";s:22:"nextmatch-filterheader";s:4:"size";s:6:"Remote";s:4:"name";s:9:"remote_id";}s:1:"E";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:7:"Created";s:4:"name";s:11:"cmd_created";}s:1:"F";a:3:{s:4:"type";s:23:"nextmatch-accountfilter";s:4:"name";s:7:"creator";s:4:"size";s:7:"Creator";}s:1:"G";a:3:{s:4:"type";s:22:"nextmatch-filterheader";s:4:"name";s:6:"status";s:4:"size";s:6:"Status";}s:1:"H";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:8:"Modified";s:4:"name";s:12:"cmd_modified";}s:1:"I";a:3:{s:4:"type";s:23:"nextmatch-accountfilter";s:4:"size";s:8:"Modifier";s:4:"name";s:8:"modifier";}s:1:"J";a:1:{s:4:"type";s:5:"label";}}i:2;a:10:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:4:"name";s:13:"${row}[title]";}s:1:"B";a:3:{s:4:"type";s:13:"email-address";s:4:"name";s:17:"${row}[requested]";s:4:"size";s:26:"$row_cont[requested_email]";}s:1:"C";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:17:"${row}[scheduled]";s:8:"readonly";s:1:"1";}s:1:"D";a:3:{s:4:"type";s:6:"select";s:4:"name";s:17:"${row}[remote_id]";s:8:"readonly";s:1:"1";}s:1:"E";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:15:"${row}[created]";s:8:"readonly";s:1:"1";}s:1:"F";a:3:{s:4:"type";s:13:"email-address";s:4:"name";s:15:"${row}[creator]";s:4:"size";s:24:"$row_cont[creator_email]";}s:1:"G";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:6:"2,,0,0";i:1;a:3:{s:4:"type";s:6:"select";s:4:"name";s:14:"${row}[status]";s:8:"readonly";s:1:"1";}i:2;a:3:{s:4:"type";s:5:"label";s:4:"name";s:13:"${row}[error]";s:4:"span";s:10:",redItalic";}}s:1:"H";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:16:"${row}[modified]";s:8:"readonly";s:1:"1";}s:1:"I";a:4:{s:4:"type";s:13:"email-address";s:4:"name";s:16:"${row}[modifier]";s:8:"readonly";s:1:"1";s:4:"size";s:25:"$row_cont[modifier_email]";}s:1:"J";a:6:{s:4:"type";s:6:"button";s:4:"size";s:6:"delete";s:5:"label";s:6:"Cancel";s:4:"name";s:21:"delete[$row_cont[id]]";s:4:"help";s:29:"Cancel this scheduled command";s:7:"onclick";s:48:"return confirm(\'Cancel this scheduled command\');";}}}s:4:"rows";i:2;s:4:"cols";i:10;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1195518170',);

$templ_data[] = array('name' => 'admin.customfields','template' => '','lang' => '','group' => '0','version' => '','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:5:{i:0;a:2:{s:1:"F";s:3:"80%";s:2:"c2";s:6:"header";}i:1;a:6:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:4:"name";s:9:"error_msg";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:2:{s:4:"type";s:5:"label";s:7:"no_lang";s:1:"1";}}i:2;a:6:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:3:"all";s:5:"label";s:13:"Custom fields";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}}i:3;a:6:{s:1:"A";a:4:{s:4:"type";s:8:"template";s:4:"size";s:6:"fields";s:4:"span";s:3:"all";s:4:"name";s:25:"admin.customfields.fields";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}}i:4;a:6:{s:1:"A";a:6:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"3";s:4:"span";s:3:"all";i:1;a:4:{s:4:"type";s:6:"button";s:5:"label";s:4:"Save";s:4:"name";s:12:"button[save]";s:4:"help";s:33:"saves the changes made and leaves";}i:2;a:4:{s:4:"type";s:6:"button";s:5:"label";s:5:"Apply";s:4:"name";s:13:"button[apply]";s:4:"help";s:19:"applies the changes";}i:3;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Cancel";s:4:"name";s:14:"button[cancel]";s:4:"help";s:22:"leaves without saveing";}}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:4;s:4:"cols";i:6;}}','size' => '','style' => '.header { font-weight: bold; font-size: 120%; }
.error_msg { color: red; font-style: italics; }','modified' => '1130271259',);

$templ_data[] = array('name' => 'admin.customfields','template' => '','lang' => '','group' => '0','version' => '1.2','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:6:{i:0;a:1:{s:1:"G";s:3:"80%";}i:1;a:7:{s:1:"A";a:5:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:4:"name";s:9:"error_msg";s:5:"align";s:6:"center";s:7:"no_lang";s:1:"1";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:2:{s:4:"type";s:5:"label";s:7:"no_lang";s:1:"1";}}i:2;a:7:{s:1:"A";a:4:{s:4:"type";s:8:"template";s:4:"size";s:13:"content_types";s:4:"span";s:3:"all";s:4:"name";s:24:"admin.customfields.types";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:1:{s:4:"type";s:5:"label";}}i:3;a:7:{s:1:"A";a:2:{s:4:"type";s:8:"template";s:4:"span";s:3:"all";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:1:{s:4:"type";s:5:"label";}}i:4;a:7:{s:1:"A";a:4:{s:4:"type";s:8:"template";s:4:"size";s:6:"fields";s:4:"span";s:3:"all";s:4:"name";s:25:"admin.customfields.fields";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:1:{s:4:"type";s:5:"label";}}i:5;a:7:{s:1:"A";a:6:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"3";s:4:"span";s:3:"all";i:1;a:4:{s:4:"type";s:6:"button";s:5:"label";s:4:"Save";s:4:"name";s:12:"button[save]";s:4:"help";s:33:"saves the changes made and leaves";}i:2;a:4:{s:4:"type";s:6:"button";s:5:"label";s:5:"Apply";s:4:"name";s:13:"button[apply]";s:4:"help";s:19:"applies the changes";}i:3;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Cancel";s:4:"name";s:14:"button[cancel]";s:4:"help";s:22:"leaves without saveing";}}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:5;s:4:"cols";i:7;}}','size' => '','style' => '.redItalic { color: red; font-style: italics; }','modified' => '1131453292',);

$templ_data[] = array('name' => 'admin.customfields.fields','template' => '','lang' => '','group' => '0','version' => '','data' => 'a:1:{i:0;a:5:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:3:{s:2:"c1";s:2:"th";s:2:"c2";s:7:"row,top";s:1:"C";s:8:",!@type2";}i:1;a:8:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:5:"label";s:4:"Name";s:4:"help";s:83:"the name used internaly (<= 20 chars), changeing it makes existing data unavailible";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Label";}s:1:"C";a:2:{s:4:"type";s:5:"label";s:5:"label";s:3:"Typ";}s:1:"D";a:3:{s:4:"type";s:5:"label";s:5:"label";s:4:"Type";s:4:"help";s:19:"Type of customfield";}s:1:"E";a:3:{s:4:"type";s:5:"label";s:5:"label";s:7:"Options";s:4:"help";s:40:"each value is a line like <id>[=<label>]";}s:1:"F";a:2:{s:4:"type";s:5:"label";s:5:"label";s:14:"Length<br>Rows";}s:1:"G";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Order";}s:1:"H";a:4:{s:4:"type";s:5:"label";s:5:"label";s:6:"Action";s:5:"align";s:6:"center";s:4:"help";s:18:"deletes this field";}}i:2;a:8:{s:1:"A";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"20,32";s:4:"name";s:12:"${row}[name]";s:4:"help";s:83:"the name used internaly (<= 20 chars), changeing it makes existing data unavailible";}s:1:"B";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:4:"text";s:4:"size";s:4:",255";s:4:"name";s:13:"${row}[label]";s:4:"help";s:30:"the text displayed to the user";}i:2;a:2:{s:4:"type";s:5:"label";s:4:"name";s:13:"${row}[label]";}}s:1:"C";a:3:{s:4:"type";s:6:"select";s:4:"size";s:3:"All";s:4:"name";s:13:"${row}[type2]";}s:1:"D";a:3:{s:4:"type";s:6:"select";s:4:"name";s:12:"{$row}[type]";s:7:"no_lang";s:1:"1";}s:1:"E";a:4:{s:4:"type";s:8:"textarea";s:4:"size";s:4:"2,30";s:4:"name";s:14:"${row}[values]";s:4:"help";s:40:"each value is a line like <id>[=<label>]";}s:1:"F";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:4:"text";s:4:"size";s:1:"5";s:4:"name";s:11:"${row}[len]";s:4:"help";s:63:"max length of the input [, length of the inputfield (optional)]";}i:2;a:5:{s:4:"type";s:3:"int";s:4:"size";s:6:"0,10,2";s:4:"name";s:12:"${row}[rows]";s:4:"help";s:70:"number of row for a multiline inputfield or line of a multi-select-box";s:4:"blur";s:1:"1";}}s:1:"G";a:4:{s:4:"type";s:3:"int";s:4:"size";s:4:"1,,3";s:4:"name";s:13:"${row}[order]";s:4:"help";s:45:"determines the order the fields are displayed";}s:1:"H";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Delete";s:4:"name";s:23:"delete[$row_cont[name]]";s:4:"help";s:18:"deletes this field";}i:2;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Create";s:4:"name";s:21:"create$row_cont[name]";s:4:"help";s:19:"creates a new field";}}}}s:4:"rows";i:2;s:4:"cols";i:8;s:7:"options";a:0:{}}}','size' => '','style' => '','modified' => '1130250309',);

$templ_data[] = array('name' => 'admin.customfields.fields','template' => '','lang' => '','group' => '0','version' => '1.2','data' => 'a:1:{i:0;a:5:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:3:{s:2:"c1";s:2:"th";s:2:"c2";s:7:"row,top";s:1:"C";s:8:",!@type2";}i:1;a:8:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:5:"label";s:4:"Name";s:4:"help";s:83:"the name used internaly (<= 20 chars), changeing it makes existing data unavailible";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Label";}s:1:"C";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Subtype";}s:1:"D";a:2:{s:4:"type";s:5:"label";s:5:"label";s:4:"Type";}s:1:"E";a:3:{s:4:"type";s:5:"label";s:5:"label";s:7:"Options";s:4:"help";s:40:"each value is a line like <id>[=<label>]";}s:1:"F";a:2:{s:4:"type";s:5:"label";s:5:"label";s:14:"Length<br>Rows";}s:1:"G";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Order";}s:1:"H";a:4:{s:4:"type";s:5:"label";s:5:"label";s:6:"Action";s:5:"align";s:6:"center";s:4:"help";s:18:"deletes this field";}}i:2;a:8:{s:1:"A";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"20,32";s:4:"name";s:12:"${row}[name]";s:4:"help";s:83:"the name used internaly (<= 20 chars), changeing it makes existing data unavailible";}s:1:"B";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:4:"text";s:4:"size";s:4:",255";s:4:"name";s:13:"${row}[label]";s:4:"help";s:30:"the text displayed to the user";}i:2;a:2:{s:4:"type";s:5:"label";s:4:"name";s:13:"${row}[label]";}}s:1:"C";a:4:{s:4:"type";s:6:"select";s:4:"size";s:3:"All";s:4:"name";s:13:"${row}[type2]";s:7:"no_lang";s:1:"1";}s:1:"D";a:4:{s:4:"type";s:6:"select";s:4:"name";s:12:"{$row}[type]";s:4:"help";s:19:"Type of customfield";s:7:"no_lang";s:1:"1";}s:1:"E";a:4:{s:4:"type";s:8:"textarea";s:4:"size";s:4:"2,30";s:4:"name";s:14:"${row}[values]";s:4:"help";s:36:"each value is a line like id[=label]";}s:1:"F";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:4:"text";s:4:"size";s:1:"5";s:4:"name";s:11:"${row}[len]";s:4:"help";s:63:"max length of the input [, length of the inputfield (optional)]";}i:2;a:5:{s:4:"type";s:3:"int";s:4:"size";s:6:"0,10,2";s:4:"name";s:12:"${row}[rows]";s:4:"help";s:70:"number of row for a multiline inputfield or line of a multi-select-box";s:4:"blur";s:1:"1";}}s:1:"G";a:4:{s:4:"type";s:3:"int";s:4:"size";s:4:"1,,3";s:4:"name";s:13:"${row}[order]";s:4:"help";s:45:"determines the order the fields are displayed";}s:1:"H";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Delete";s:4:"name";s:23:"delete[$row_cont[name]]";s:4:"help";s:18:"deletes this field";}i:2;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Create";s:4:"name";s:21:"create$row_cont[name]";s:4:"help";s:19:"creates a new field";}}}}s:4:"rows";i:2;s:4:"cols";i:8;s:7:"options";a:0:{}}}','size' => '','style' => '','modified' => '1131454776',);

$templ_data[] = array('name' => 'admin.customfields.fields','template' => '','lang' => '','group' => '0','version' => '1.4.001','data' => 'a:1:{i:0;a:5:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:3:{s:2:"c1";s:2:"th";s:2:"c2";s:7:"row,top";s:1:"C";s:8:",!@type2";}i:1;a:8:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:5:"label";s:4:"Name";s:4:"help";s:83:"the name used internaly (<= 20 chars), changeing it makes existing data unavailible";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Label";}s:1:"C";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Subtype";}s:1:"D";a:2:{s:4:"type";s:5:"label";s:5:"label";s:4:"Type";}s:1:"E";a:3:{s:4:"type";s:5:"label";s:5:"label";s:7:"Options";s:4:"help";s:40:"each value is a line like <id>[=<label>]";}s:1:"F";a:2:{s:4:"type";s:5:"label";s:5:"label";s:14:"Length<br>Rows";}s:1:"G";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Order";}s:1:"H";a:4:{s:4:"type";s:5:"label";s:5:"label";s:6:"Action";s:5:"align";s:6:"center";s:4:"help";s:18:"deletes this field";}}i:2;a:8:{s:1:"A";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"20,32";s:4:"name";s:12:"${row}[name]";s:4:"help";s:83:"the name used internaly (<= 20 chars), changeing it makes existing data unavailible";}s:1:"B";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:4:"text";s:4:"size";s:4:",255";s:4:"name";s:13:"${row}[label]";s:4:"help";s:30:"the text displayed to the user";}i:2;a:2:{s:4:"type";s:5:"label";s:4:"name";s:13:"${row}[label]";}}s:1:"C";a:4:{s:4:"type";s:6:"select";s:4:"size";s:3:"All";s:4:"name";s:13:"${row}[type2]";s:7:"no_lang";s:1:"1";}s:1:"D";a:3:{s:4:"type";s:18:"customfields-types";s:4:"name";s:12:"{$row}[type]";s:4:"help";s:19:"Type of customfield";}s:1:"E";a:4:{s:4:"type";s:8:"textarea";s:4:"size";s:4:"2,30";s:4:"name";s:14:"${row}[values]";s:4:"help";s:36:"each value is a line like id[=label]";}s:1:"F";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:4:"text";s:4:"size";s:1:"5";s:4:"name";s:11:"${row}[len]";s:4:"help";s:63:"max length of the input [, length of the inputfield (optional)]";}i:2;a:5:{s:4:"type";s:3:"int";s:4:"size";s:6:"0,10,2";s:4:"name";s:12:"${row}[rows]";s:4:"help";s:70:"number of row for a multiline inputfield or line of a multi-select-box";s:4:"blur";s:1:"1";}}s:1:"G";a:4:{s:4:"type";s:3:"int";s:4:"size";s:4:"1,,3";s:4:"name";s:13:"${row}[order]";s:4:"help";s:45:"determines the order the fields are displayed";}s:1:"H";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Delete";s:4:"name";s:23:"delete[$row_cont[name]]";s:4:"help";s:18:"deletes this field";}i:2;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Create";s:4:"name";s:21:"create$row_cont[name]";s:4:"help";s:19:"creates a new field";}}}}s:4:"rows";i:2;s:4:"cols";i:8;s:7:"options";a:0:{}}}','size' => '','style' => '','modified' => '1131454776',);

$templ_data[] = array('name' => 'admin.customfields.types','template' => '','lang' => '','group' => '0','version' => '1.2','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:1:{s:1:"D";s:15:",@non_deletable";}i:1;a:6:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:4:"name";s:8:"app-name";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"-  type";}s:1:"C";a:4:{s:4:"type";s:6:"select";s:4:"name";s:5:"types";s:8:"onchange";s:1:"1";s:7:"no_lang";s:1:"1";}s:1:"D";a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Delete";s:4:"name";s:6:"delete";s:7:"onclick";s:110:"return confirm(\'WARNING: You are about to delete this type. Entries of this type won\\\'t be accessable then.\');";}s:1:"E";a:3:{s:4:"type";s:4:"text";s:4:"name";s:4:"name";s:4:"blur";s:8:"new name";}s:1:"F";a:3:{s:4:"type";s:6:"button";s:5:"label";s:6:"Create";s:4:"name";s:6:"create";}}}s:4:"rows";i:1;s:4:"cols";i:6;}}','size' => '','style' => '','modified' => '1139823458',);

$templ_data[] = array('name' => 'admin.remotes','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:5:{i:0;a:3:{s:2:"h2";s:9:",!@remote";s:2:"h1";s:6:",!@msg";s:2:"h3";s:2:",1";}i:1;a:1:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:4:"name";s:3:"msg";}}i:2;a:1:{s:1:"A";a:4:{s:4:"type";s:8:"template";s:4:"size";s:6:"remote";s:4:"span";s:10:"all,border";s:4:"name";s:18:"admin.remotes.edit";}}i:3;a:1:{s:1:"A";a:3:{s:4:"type";s:8:"template";s:5:"align";s:5:"right";s:4:"name";s:26:"admin.remotes.header_right";}}i:4;a:1:{s:1:"A";a:3:{s:4:"type";s:9:"nextmatch";s:4:"name";s:2:"nm";s:4:"size";s:18:"admin.remotes.rows";}}}s:4:"rows";i:4;s:4:"cols";i:1;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '.border { border: black solid 2px; }','modified' => '1195926693',);

$templ_data[] = array('name' => 'admin.remotes.edit','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:9:{i:0;a:8:{s:2:"c2";s:2:"th";s:2:"c3";s:3:"row";s:2:"c5";s:3:"row";s:2:"c6";s:3:"row";s:2:"c4";s:3:"row";s:2:"c7";s:3:"row";s:2:"h5";s:14:",!@remote_hash";s:2:"h1";s:11:",@remote_id";}i:1;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:5:"label";s:97:"Remote administration need to be enabled in the remote instance under Admin > Site configuration!";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:4:{s:4:"type";s:5:"label";s:4:"size";s:14:",,,remote_name";s:5:"label";s:4:"Name";s:6:"needed";s:1:"1";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"64,64";s:4:"name";s:11:"remote_name";s:6:"needed";s:1:"1";}}i:3;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:13:",,,install_id";s:5:"label";s:10:"Install ID";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"size";s:24:"40,32,/^[a-f0-9]{0,32}$/";s:4:"name";s:10:"install_id";s:4:"help";s:75:"The install ID of an instance can be found under Admin > Site configuration";}}i:4;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:16:",,,config_passwd";s:5:"label";s:8:"Password";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"40,32";s:4:"name";s:13:"config_passwd";s:4:"help";s:51:"Config password or md5 hash from the header.inc.php";}}i:5;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:4:"Hash";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:4:"name";s:11:"remote_hash";}}i:6;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:13:",,,remote_url";s:5:"label";s:3:"URL";}s:1:"B";a:5:{s:4:"type";s:4:"text";s:4:"size";s:62:"64,128,/^https?:\\/\\/[a-z0-9._-]+(\\:[0-9]+)?(\\/[a-z0-9._-]+)*$/";s:4:"name";s:10:"remote_url";s:6:"needed";s:1:"1";s:4:"help";s:68:"URL of the eGroupWare installation, eg. http://domain.com/egroupware";}}i:7;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:16:",,,remote_domain";s:5:"label";s:8:"Instance";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"64,64";s:4:"name";s:13:"remote_domain";s:4:"help";s:44:"Name of the eGroupWare instance, eg. default";}}i:8;a:2:{s:1:"A";a:6:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"3";i:1;a:4:{s:4:"type";s:6:"button";s:5:"label";s:4:"Save";s:4:"name";s:12:"button[save]";s:4:"help";s:16:"Saves this entry";}s:4:"span";s:3:"all";i:2;a:4:{s:4:"type";s:6:"button";s:4:"name";s:13:"button[apply]";s:5:"label";s:5:"Apply";s:4:"help";s:17:"Apply the changes";}i:3;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Cancel";s:4:"name";s:14:"button[cancel]";s:4:"help";s:31:"leave without saveing the entry";}}s:1:"B";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:8;s:4:"cols";i:2;}}','size' => '','style' => '','modified' => '1195927476',);

$templ_data[] = array('name' => 'admin.remotes.header_right','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:7:{s:4:"type";s:6:"button";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:1;s:4:"cols";i:1;s:4:"name";s:3:"add";s:5:"label";s:3:"Add";s:4:"help";s:25:"Add a new remote instance";}}','size' => '','style' => '','modified' => '1195931282',);

$templ_data[] = array('name' => 'admin.remotes.rows','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:2:{s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";}i:1;a:4:{s:1:"A";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:4:"Name";s:4:"name";s:11:"remote_name";}s:1:"B";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:3:"URL";s:4:"name";s:10:"remote_url";}s:1:"C";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:8:"Instance";s:4:"name";s:13:"remote_domain";}s:1:"D";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Actions";}}i:2;a:4:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:4:"name";s:19:"${row}[remote_name]";}s:1:"B";a:3:{s:4:"type";s:5:"label";s:4:"size";s:64:",$row_cont[remote_url]/?domain=$row_cont[remote_domain],,,_blank";s:4:"name";s:18:"${row}[remote_url]";}s:1:"C";a:3:{s:4:"type";s:5:"label";s:4:"name";s:21:"${row}[remote_domain]";s:7:"no_lang";s:1:"1";}s:1:"D";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"1";i:1;a:5:{s:4:"type";s:6:"button";s:4:"size";s:4:"edit";s:5:"label";s:4:"Edit";s:4:"name";s:26:"edit[$row_cont[remote_id]]";i:1;a:1:{s:4:"type";s:4:"hbox";}}s:5:"align";s:6:"center";}}}s:4:"rows";i:2;s:4:"cols";i:4;}}','size' => '','style' => '','modified' => '1195925625',);

