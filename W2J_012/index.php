<!-- 
	-- Versie 12
		- nu met links naar alle pagina's
		- buttons met alert

	-- Versie 11
		- nu met link naar andere pagina

	-- Versie 10
		- kolommen in xs-, in sm- en in md-formaat om met name buttons responsive te houden in landscape

	-- Versie 9
		- eerste pagina kompleet & responsive
		- enkel nog kolommen in xs-formaat
		- hamburger menu in place middels Font Awesome, dus geen glyphicon, glyphicons worden nl niet meer ondersteund in Bootstrap 4, maw voorbereid op de toekomst!! 
	
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<!-- Bootstrap 3.3.6 CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- Font Awesome icons CSS -->		
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">		

		<!-- W2J specific homepage CSS -->
		<link rel="stylesheet" type="text/css" href="css/style_w2jhome.css" />
		
		<!-- W2J versie number in titel -->
		<!--<title>W2J_V3.3.6  v10</title>-->
	</head>
	
	<body class="full">
		
		<div class="container-fluid">
    <!-- Navigation -->
			<nav>
				<ul class="nav">
					<li class="dropdown pull-right">
						<div class="dropdown-toggle" data-toggle="dropdown">
							<span class="fa fa-bars fa-2x"></span>
						</div>
						<ul class="dropdown-menu">
								<li><a href="#">Home versie 12</a></li>
								<li><a href="w2jpage001.html">Wat WerkWel doet</a></li>
								<li><a href="w2jpage002.html">Wat de vrijwilligers doen</a></li> 
								<li><a href="w2jpage003.html">Wat is WerkWel</a></li> 
								<li><a href="w2jpage004.html">Contact</a></li> 
						</ul>
					</li>
				</ul>
			</nav>
	
<!-- 3xTussenrij met vaste hoogte (4vh) -->
			<div class="row">
				<div class="row content">
					<div class="col-xs-12"></div>
				</div>
			</div>
			<div class="row">
				<div class="row content">
					<div class="col-xs-12"></div>
				</div>
			</div>
			<div class="row">
				<div class="row content">
					<div class="col-xs-12"></div>
				</div>
			</div>
	
			<!-- SBBI & Contact buttons --> 
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8"></div>
				<div class="col-xs-1 col-sm-1 col-md-1">
						<button type="button" class="btn btn-default btn-lg" onclick="alert('SBBI pagina nog niet klaar helaas!')">SBBI</button>	
				</div>		
				<div class="col-xs-1 col-sm-1 col-md-1">				
						<button type="button" class="btn btn-info btn-lg" onclick="alert('Contactpagina nog niet klaar helaas!')">Contact</button>
				</div> 
				<div class="col-xs-2 col-sm-2 col-md-2"></div>
			</div>            

<!-- 1xTussenrij met vaste hoogte (4vh) -->
			<div class="row">
				<div class="row content">
					<div class="col-xs-12"></div>
				</div>
			</div>
	

<!-- Eerste tekstbox -->
			<div class="row">
				<div class="col-xs-3 col-md-3"></div>
				<div class="col-xs-7 col-md-6">
					<div id="tekstbox1"> Werken aan een ideëel doel</div>
				</div>
				<div class="col-xs-2 col-md-3"></div>
			</div>
			
<!-- 3xTussenrij met vaste hoogte (4vh) -->
			<div class="row">
				<div class="row content">
					<div class="col-xs-12"></div>
				</div>
			</div>
			<div class="row">
				<div class="row content">
					<div class="col-xs-12"></div>
				</div>
			</div>
			<div class="row">
				<div class="row content">
					<div class="col-xs-12"></div>
				</div>
			</div>

<!-- Tweede tekstbox -->
			<div class="row">
				<div class="col-xs-4 col-md-4"></div>
				<div class="col-xs-6 col-md-6">
					<div id="tekstbox2"> WerkWel
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-square"></i>zet zich in om werkzoekenden te activeren, ontzorgen en belonen</li>
								<li><i class="fa-li fa fa-square"></i>activeert de kennis van werkzoekenden</li>
								<li><i class="fa-li fa fa-square"></i>brengt werkzoekenden en werkgevers dichter bij elkaar</li>
								<li><i class="fa-li fa fa-square"></i>biedt structureel een oplossing aan de gemeenschap</li>
							</ul>		
					</div>
				</div>
				<div class="col-xs-2 col-md-2"></div>
			</div>
		
	</body>
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</html>