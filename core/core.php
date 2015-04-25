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

$module = $_GET['modul'];
$param = $_GET['param'];


$sql = "SELECT * FROM `module` WHERE `name` LIKE 'start';";
$db = new hicks_database();
$result = $db->select('module','*',array(array("name" => "name", "value" => $module)));

if($result['name'] == $module){
	
	require_once HICKS_HOME.'/modules/'.$module.'/index.php';
}else{
	// ERROR
}

$output = hicks_output::getInstance();
$output->printOut();  // Gibt den Outputbuffer aus und schließt somit den Prozess ab
?>
