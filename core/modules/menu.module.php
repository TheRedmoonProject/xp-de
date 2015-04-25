<?php
if (!defined("HICKS_HOME")) {
	exit;
} // Sicherheitscheck

$out = hicks_output::getInstance();
$out->push('
		<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid container">
		
			<!-- Brand and toggle get grouped for better mobile display -->
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar-colapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"> <img alt="Brand" src="#"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="navbar-colapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Start <span class="sr-only"></span></a></li>
					<li><a href="#">Aktuelles</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-expanded="false">Infos <span class="caret"></span>
					</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Was ist der Pony Express?</a></li>
							<li><a href="#">Geschichte</a></li>
							<li><a href="#">Chronik</a></li>
						</ul></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-expanded="false">Tradition <span class="caret"></span>
					</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Eid</a></li>
							<li><a href="#">Postkarten</a></li>
							<li><a href="#">Hymne</a></li>
						</ul></li>
					<li><a href="#">Gallerie</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-expanded="false">Teilnahme <span class="caret"></span>
					</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Wie kann ich teilnehmen?</a></li>
							<li><a href="#">Teilnahmebedingungen</a></li>
							<li class="divider"></li>
							<li><a href="#">Anmeldeformular</a></li>
						</ul></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-expanded="false"><img src="blank.gif" class="flag flag-de active-flag" /> Sprache
							&auml;ndern <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" style="min-width: 163px;">
							<li><a href="#"><img src="blank.gif"
									class="flag flag-de" /> (Deutsch)</a></li>
							<li><a href="#"><img src="blank.gif"
									class="flag flag-gb" /> (English)</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>		
		');

?>