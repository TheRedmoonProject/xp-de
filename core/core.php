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





?>