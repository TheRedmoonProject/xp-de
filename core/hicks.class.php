<?php

if (!defined("HICKS_HOME")) {
    exit;
} // Sicherheitscheck

class hicks {

    private static $instance = null;

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance; // Gibt die Instanz der Klasse zurück
    }

}
