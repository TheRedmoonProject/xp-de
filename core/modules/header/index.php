<?php
if (!defined("HICKS_HOME")) {
	exit;
} // Sicherheitscheck


$out = hicks_output::getInstance();
$out->push('<!DOCTYPE html>
		<html lang="de">
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		');
$out->push('<title>Pony Express - German Tail</title>');  // Titel
$out->push('<link href="http://cdn.livespawn.de/static/bootstrap/3_3_4/bootstrap.css" rel="stylesheet">
		<link href="static/style.css" rel="stylesheet">
		<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		</head>
		<body>');


?>