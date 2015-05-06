<?php

if (!defined("HICKS_HOME")) {
    exit;
} // Sicherheitscheck

class hicks_session extends hicks {
    /* ToDo:
     * - neue SESSION-Instanz erkennen + anlegen... done
     * - Ein- und Ausgabe von SESSION var in / aus DB
     * - Cookies definieren - dauerhaft
     */

    private static $instance = null;
    private $phpSessionId;


    public function __construct() {
        parent::__construct();
        
        //-- Überprüfe ob phpSessionID noch die gleiche ist, ansonsten lade Infos aus DB und schreibe in Session
    }

    private $database;
	
    public static function getInstance() {
    	if (self::$instance === null) {
    		self::$instance = new self();
    		self::$instance->intinalize(); // Wenn die Instanz zum ersten mal abgerufen wird, werden die Abhängigkeiten eingelesen
    	}
    	return self::$instance; // Gibt die Instanz der Klasse zurück
    }
    /**
     * Intinalisiert die Instanz
     */
    private function intinalize(){
    	$this->phpSessionId = session_id();
    }
    
    /**
     * Gibt die SessionId zurück
     * @return string
     */
    public function getSessionId (){
    	
    	return $this->phpSessionId;
    }
    /**
     * Überprüft, ob die aktuelle Instanz die angegebene Berechtigung besitzt
     * @param string $permission
     * @return boolean
     */
    public function hasPermission($permission){
    	return true;
    }
    /**
     * Setzt bzw. überschreibt eine Berechtigung
     * @param string $permission
     * @param boolean $value
     * @return boolean
     */
    public function setPermission($permission,$value = true){
    	
    	
    	return true;
    }
    /**
     * Gibt die zuletzt besuchte Seite zurück
     * @return string
     */
    public function getLastPage(){
    	return "null";
    	
    }
    /**
     * Gibt die Benutzerid zurück. Wenn keine ID vorhanden ist, wird false zurückgegeben
     * @return number
     */
    public function getUserId(){
    	
    	return 0;
    }
    /**
     * Gibt an, ob der Nutzer eingeloggt ist
     * @return boolean
     */
    public function isLoggedIn(){
    	
    	return false;
    }
    /**
     * Ruft eine Variable aus der Session heraus ab
     * @param string $var
     */
    public function getVar($var){
    	
    }
    /**
     * Setzt eine neue Variable in der Session
     * @param string $var
     * @param string $value
     */
    public function setVar($var, $value = null){
    	
    }
    /**
     * Setzt einen Cookie, der mit der Session verknüpft ist
     * @param number $lifetime
     * @return boolean
     */
    public function setCookie($lifetime = 86400){
    	
    	
    	return true;
>>>>>>> origin/master
    }
    /**
     * Entfernt den mit der Session verbundenen Cookie
     * @return boolean
     */
    public function removeCookie(){
    	return true;
    }
    


}
?>