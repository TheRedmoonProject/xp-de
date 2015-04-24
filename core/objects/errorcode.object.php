<?php
if(!defined("HICKS_HOME")){exit;} // Sicherheitscheck

class hicks_errorcode{
	
// 4xx Errors
public $400 = array(
		"code" => 400,
		"msg" => array("shortmsg" => "Bad Request", "longmsg" => "Error 400: Ein Fehler ist aufgetreten"),
		"offline" => false,
		"info" => "Die Anfrage-Nachricht war fehlerhaft aufgebaut.",
		"file" => null,
		"line" => null
);
public $401 = array(
		"code" => 401,
		"msg" => array("shortmsg" => "Unauthorized", "longmsg" => "Error 401: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Die Anfrage kann nicht ohne gültige Authentifizierung durchgeführt werden. Wie die Authentifizierung durchgeführt werden soll, wird im „WWW-Authenticate“-Header-Feld der Antwort übermittelt.",
		"file" => null,
		"line" => null
);
public $402 = array(
		"code" => 402,
		"msg" => array("shortmsg" => "Payment Required", "longmsg" => "Error 402: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Blub?",
		"file" => null,
		"line" => null
);
public $403 = array(
		"code" => 403,
		"msg" => array("shortmsg" => "Forbidden", "longmsg" => "Error 403: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Die Anfrage wurde mangels Berechtigung des Clients nicht durchgeführt. Diese Entscheidung wurde – anders als im Fall des Statuscodes 401 – unabhängig von Authentifizierungsinformationen getroffen, auch etwa wenn eine als HTTPS konfigurierte URL nur mit HTTP aufgerufen wurde.",
		"file" => null,
		"line" => null
);
public $404 = array(
		"code" => 404,
		"msg" => array("shortmsg" => "Not Found", "longmsg" => "Error 404: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Die angeforderte Ressource wurde nicht gefunden. Dieser Statuscode kann ebenfalls verwendet werden, um eine Anfrage ohne näheren Grund abzuweisen. Links, welche auf solche Fehlerseiten verweisen, werden auch als Tote Links bezeichnet.",
		"file" => null,
		"line" => null
);
public $408 = array(
		"code" => 408,
		"msg" => array("shortmsg" => "Request Time-out", "longmsg" => "Error 408: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Innerhalb der vom Server erlaubten Zeitspanne wurde keine vollständige Anfrage des Clients empfangen.",
		"file" => null,
		"line" => null
);
public $410 = array(
		"code" => 410,
		"msg" => array("shortmsg" => "Gone", "longmsg" => "Error 410: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Die angeforderte Ressource wird nicht länger bereitgestellt und wurde dauerhaft entfernt.",
		"file" => null,
		"line" => null
);
public $414 = array(
		"code" => 414,
		"msg" => array("shortmsg" => "Request-URL Too Long", "longmsg" => "Error 414: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Die URL der Anfrage war zu lang. Ursache ist oft eine Endlosschleife aus Redirects.",
		"file" => null,
		"line" => null
);
public $415 = array(
		"code" => 415,
		"msg" => array("shortmsg" => "Unsupported Media Type", "longmsg" => "Error 415: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Der Inhalt der Anfrage wurde mit ungültigem oder nicht erlaubtem Medientyp übermittelt.",
		"file" => null,
		"line" => null
);
public $429 = array(
		"code" => 429,
		"msg" => array("shortmsg" => "Too Many Requests", "longmsg" => "Error 429: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Der Client hat zu viele Anfragen in einem bestimmten Zeitraum gesendet.",
		"file" => null,
		"line" => null
);
// 5xx Errors
public $500 = array(
		"code" => 500,
		"msg" => array("shortmsg" => "Internal Server Error", "longmsg" => "Error 500: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Dies ist ein „Sammel-Statuscode“ für unerwartete Serverfehler.",
		"file" => null,
		"line" => null
);
public $501 = array(
		"code" => 501,
		"msg" => array("shortmsg" => "Not Implemented", "longmsg" => "Error 501: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Die Funktionalität, um die Anfrage zu bearbeiten, wird von diesem Server nicht bereitgestellt. Ursache ist zum Beispiel eine unbekannte oder nicht unterstützte HTTP-Methode.",
		"file" => null,
		"line" => null
);
public $502 = array(
		"code" => 502,
		"msg" => array("shortmsg" => "Bad Gateway", "longmsg" => "Error 502: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Der Server konnte seine Funktion als Gateway oder Proxy nicht erfüllen, weil er seinerseits eine ungültige Antwort erhalten hat.",
		"file" => null,
		"line" => null
);
public $503 = array(
		"code" => 503,
		"msg" => array("shortmsg" => "Service Unavailable", "longmsg" => "Error 503: Brücke nicht gefunden"),
		"offline" => false,
		"info" => "Der Server steht temporär nicht zur Verfügung, zum Beispiel wegen Überlastung oder Wartungsarbeiten. Ein „Retry-After“-Header-Feld in der Antwort kann den Client auf einen Zeitpunkt hinweisen, zu dem die Anfrage eventuell bearbeitet werden könnte.",
		"file" => null,
		"line" => null
);
public $500 = array(
		"code" => 500,
		"msg" => array("shortmsg" => "Internal Server Error", "longmsg" => "Error 500: Brücke nicht gefunden"),
		"offline" => false,
		"info" => ".",
		"file" => null,
		"line" => null
);
public $500 = array(
		"code" => 500,
		"msg" => array("shortmsg" => "Internal Server Error", "longmsg" => "Error 500: Brücke nicht gefunden"),
		"offline" => false,
		"info" => ".",
		"file" => null,
		"line" => null
);

// 1xxx Errors

// 2xxx Errors

// 3xxx Errors

// 4xxx Errors

// 5xxx Errors

// 6xxx Errors

// 7xxx Errors

// 8xxx Errors

// 9xxx Errors
	
	
}
?>