<?php

if (!defined("HICKS_HOME")) {
    exit;
} // Sicherheitscheck

class hicks {

    public function __construct() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance; // Gibt die Instanz der Klasse zurück
    }

}
