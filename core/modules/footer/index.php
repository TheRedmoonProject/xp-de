<?php
if (!defined("HICKS_HOME")) {
	exit;
} // Sicherheitscheck

$out = hicks_output::getInstance();
$out->push('
	<script	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script	src="http://cdn.livespawn.de/static/bootstrap/3_3_4/bootstrap.js"></script>
	<script	src="static/jquery.easing.min.js"></script>
	<script	src="static/paralax.js"></script>
</body>
</html>
');