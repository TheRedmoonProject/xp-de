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

}
?>