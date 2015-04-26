<?php

if (!defined("HICKS_HOME")) {
    exit;
} // Sicherheitscheck

class hicks_session {
    /* ToDo:
     * - neue SESSION-Instanz erkennen + anlegen... done
     * - Ein- und Ausgabe von SESSION var in / aus DB
     * - Cookies definieren - dauerhaft
     */

    private static $instance = null;
    private $phpSessionId;

    public function __construct() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance; // Gibt die Instanz der Klasse zurück
    }

}

?>