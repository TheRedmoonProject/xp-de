<?php
if (!defined("HICKS_HOME")) {
	exit;
} // Sicherheitscheck

class hicks_output{


private static $output = "";


public static function push($content){
	self::$output .= $content;
}

public static function get(){
	return self::$output;
}




}
?>