<?php

if (!defined("HICKS_HOME")) {
    exit;
} // Sicherheitscheck

/* $controller_list = array(
  array("name" => "Database Controller","file" => HICKS_HOME."/core/controller/database.controller.php"),
  array("name" => "Session Manager","file" => HICKS_HOME."/core/controller/session.controller.php")
  );
 */

// Alle Controller einlesen
require_once 'controller/error.controller.php';
require_once 'controller/database.controller.php';
require_once 'controller/output.controller.php';

$db = hicks_database::getInstance(); // Initialisiert die Datenbank

$page_name = $_GET['page_name'];
$param = $_GET['param'];

$lang = 'de-DE';




$db = new hicks_database();
$result = $db->select('page','`name`,`content`,`page_type`',array(array("name" => "name", "value" => $page_name),array("name" => "lang", "value" => $lang)));

if($page_name == ''){
	$page_name = 'start';
}

if($result['name'] == $page_name || $result['name'] == 'start'){
	
	$page_type_stmt = $db->select('page_type','`id`,`name`',array(array("name" => "id", "value" => $result['type'])));
	if($page_type_stmt['id'] == $result['id']){
		require_once HICKS_HOME.'/modules/'.$module.'/index.php';
	}else{
		// Error Page Type nicht gefunden
	}
		
		
	
}else{
	// ERROR  (Seite existiert nicht)
}

$output = hicks_output::getInstance();
$output->printOut();  // Gibt den Outputbuffer aus und schließt somit den Prozess ab
?>
