<?php
if (!defined("HICKS_HOME")) {
	exit;
} // Sicherheitscheck

$out = hicks_output::getInstance();
$out->push('
		<div class="container content">
	<div class="row">
	<div class="col-md-12">
	<h2>Aktuelles</h2>
	<div class="news"><div class="background" style="background-image:url(static/destiny.png);"></div>
	<div class="title"><h2>Testnachicht</h2></div>
	<article>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</article>
	</div>
	</div>
	</div>
	</div>
		');

?>