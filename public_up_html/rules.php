<?php
/*
 *	ScTBDev - A bittorrent tracker source based on SceneTorrents.org
 *	Copyright (C) 2005-2010 ScTBDev.ca
 *
 *	This file is part of ScTBDev.
 *
 *	ScTBDev is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	ScTBDev is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *
 *	You should have received a copy of the GNU General Public License
 *	along with ScTBDev.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(__DIR__.DIRECTORY_SEPARATOR.'include'.DIRECTORY_SEPARATOR.'bittorrent.php');

dbconn();
bt_theme::head('Rules');

$upload_rules = bt_user::required_class(UC_UPLOADER) ? bt_theme_engine::load_tpl('rules_upload') : '';
$staff_rules = bt_user::required_class(UC_STAFF) ? bt_theme_engine::load_tpl('rules_staff') : '';

$rulevars = array(
	'UPLOAD_RULES'	=> $upload_rules,
	'STAFF_RULES'	=> $staff_rules,
);
echo bt_theme_engine::load_tpl('rules', $rulevars);
bt_theme::foot();
?>
