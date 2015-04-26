<?php

if (!defined("HICKS_HOME")) {
    exit;
} // Sicherheitscheck

class hicks_config {

    /**
     * Gibt den Datenbanktyp zurück
     * @return string
     */
    public static function database_type() {
        return "mysql_pdo";
    }

    /**
     * Gibt den Datenbankhost zurück
     * @return string
     */
    public static function database_host() {
        return "localhost";
    }

    /**
     * Gibt den Datenbankuser zurück
     * @return string
     */
    public static function database_user() {
        return "";
    }

    /**
     * Gibt das Datenbankpasswort zurück
     * @return string
     */
    public static function database_pass() {
        return "";
    }

    /**
     * Gibt den Datenbanknamen zurück
     * @return string
     */
    public static function database_name() {
        return "";
    }

    /**
     * Gibt den Tabellenprefix für die Datenbank zurück
     * @return string
     */
    public static function database_prefix() {
        return "";
    }
    /**
     * Gibt die Hauptdomain zurück
     * @return string
     */
    public static function domain() {
    	return "livespawn.de";
    }
    /**
     * Gibt den Domainprefix zurück
     * @return string
     */
    public static function subdomain_prefix() {
    	return "app.";
    }

}

?>