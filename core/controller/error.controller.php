<?php

if (!defined("HICKS_HOME")) {
    exit;
} // Sicherheitscheck

class hicks_error {

    private static $instance = null;
    private $errorinformation = "";

    /**
     * Verhindert, dass die Klasse in mehreren Instanzen existiert
     * @return databaseInstance
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
            self::$instance->intinalize(); // Wenn die Instanz zum ersten mal abgerufen wird, werden die Abhängigkeiten eingelesen
        }
        return self::$instance; // Gibt die Instanz der Klasse zurück
    }

    /**
     * 
     * @param string $code
     * @param string $info
     * @param boolean $offline
     */
    public static function trigger($code = null, $info = null, $offline = false) {
        $instance = self::$instance;
        if ($offline == false) {
            $database = hicks_database::getInstance();  // Hole die Instanz der Datenbank
            //$stmt = $database->insert();
        }
    }

}

?>