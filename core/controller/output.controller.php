<?php
if (!defined("HICKS_HOME")) {
	exit;
} // Sicherheitscheck

class hicks_output{

private static $instance = null;

public $output = "";

public static function getInstance() {
	if (self::$instance === null) {
		self::$instance = new self();
	}
	return self::$instance; // Gibt die Instanz der Klasse zurück
	
}


public function push ($content){
	
	$this->$output .= $content;
	
}

public function printOut (){
	
	$out = $this->output;
	
}



}
?>