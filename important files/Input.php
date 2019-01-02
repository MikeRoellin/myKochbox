<?php
	header("Content-Type: text/html; charset=utf-8");

  include 'dbh.php';

?>
<!doctype html>
<html>
<html lang="en">
<head>
<style>

	body {
		margin: 0;
		font-family: Arial, Helvetica, sans-serif;

		}

		body, html {
			height: 100%;
			margin: 0;
		}
		header{
			height: 50px;
		}
		/* Navbar CSS https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp */
		.navbar {
			min-height: 50px;
		}

		.navbar-brand {
			padding: 0 15px;
			height: 50px;
			line-height: 50px;
		}

		.navbar-toggle {
			/* Berechnung für Höhenanpassung des Headers */
			/* https://bootstrapious.com/p/how-to-change-bootstrap-navbar-height */
			/* (Höhe in px - button height 34px) / 2  */
			margin-top: 8px;
			padding: 9px 10px !important;
		}

		@media (min-width: 768px) {

			.navbar-nav > li > a {
				/* Berechnung für Höhenanpassung des Headers */
				/* https://bootstrapious.com/p/how-to-change-bootstrap-navbar-height */
				/* (Höhe in px - line-height of 27px) / 2 */
				padding-top: 11.5px;
				padding-bottom: 11.5px;
				line-height: 27px;
				}
			}
			/* Accordion CSS
			https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_accordion_symbol */
		.accordion {
			background-color: #eee;
			color: #444;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;

		}

		.active, .accordion:hover {
			background-color: #ccc;
			}

		.panel {
			margin-top: 5px;
			padding: 0 18px;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
			}
		.accordion:after {
			content: '\02795'; /* Unicode character für "plus" zeichen (+) */
			font-size: 13px;
			color: #777;
			float: right;
			margin-left: 5px;
			}

		.accordion.active:after {
			content: "\2796"; /* Unicode character für "minus" zeichen (-) */
		}
		#titel {
			margin-top: 30px;
			}
		main {
			margin:30px;
			}
		.green-background {
			background-color: green;
			}
		.RezeptBild {
		 	margin-right: 0px;
		 	width: 30%;
		 	height: auto ;
		  border: 2px solid black;
			}
</style>
<meta name="description" content="Webseite für Rezepte">
<meta name="author" content="MikeRoellin">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Link für Bootstrap Verwendung -->
<!-- https://getbootstrap.com/docs/4.1/getting-started/download/ -->
<link rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
			crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
</head>


<body>

	<?php
	// $_POST aus selbe Seite ausführen
	// https://stackoverflow.com/questions/17333901/php-form-on-submit-stay-on-same-page
	if(isset($_POST['SubmitButton'])){ //check if form was submitted
		$input = $_POST["zutatenAuswahl"];}; //get input text
		?>


	<!-- Header --><!-- Header --><!-- Header --><!-- Header --><!-- Header -->
	<!-- Code für Collapsible Navbar: https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_navbar_collapse -->
	<!-- Navbarcode https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
	<header>
		<div class="header">
			<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
				<a class="navbar-brand" href="https://kochbox.localtunnel.me/myKochbox/Home.html">myKochbox</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav nav-pills">
					<li class="nav-item">
						<a class="nav-link" href="https://kochbox.localtunnel.me/myKochbox/Home.html">Startseite</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active " href="https://kochbox.localtunnel.me/myKochbox/Input.php">Zutaten</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Detail</a>
					</li>
				</ul>
			</div>
		</nav>
		</div>
	</header>


	<main>
		<div>
			<p></p>
			<h2 id="titel"> Wähle deine Zutaten </h2>
			</div>


<!-- Zutatenauswahl --><!-- Zutatenauswahl --><!-- Zutatenauswahl --><!-- Zutatenauswahl -->

		<div id="accordion">
			<form action="" method="post">
				<fieldset id="FleischFd">
					<button class="accordion" type="button">Fleisch</button>
					<div class="panel">
						<div class="zutatenAuswahl">
							<input type="checkbox" name="zutatenAuswahl[]" value="schwein">
							<label>Schwein</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="lachs">
							<label>Lachs</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="poulet">
							<label>Poulet</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="speck">
							<label>Speck</label>
						</div>
					</div>
				</fieldset>
			<p></p>
				<fieldset id="GemueseFd">
					<button class="accordion" type="button">Gemüse</button>
					<div class="panel">
						<div class="zutatenAuswahl">
							<input type="checkbox" name="zutatenAuswahl[]" value="tomate">
							<label>Tomate</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="zwiebel">
							<label>Zwiebel</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="kartoffel">
							<label>Kartoffel</label>
						</div>
					</div>
				</fieldset>
				<p></p>
				<fieldset id="MilchFd">
					<button class="accordion" type="button">Milchprodukte</button>
					<div class="panel">
						<div class="zutatenAuswahl">
							<input type="checkbox" name="zutatenAuswahl[]" value="Ei">
							<label>Ei</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="kaese">
							<label>Käse</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="milch">
							<label>Milch</label>
						</div>
					</div>
				</fieldset>
				<p></p>
				<fieldset id="FrüchteFd">
					<button class="accordion" type="button">Früchte</button>
					<div class="panel">
						<div class="zutatenAuswahl">
							<input type="checkbox" name="zutatenAuswahl[]" value="apfel">
							<label>Apfel</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="banane">
							<label>Banane</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="orange">
							<label>Orange</label>
						</div>
					</div>
				</fieldset>
				<p></p>
				<fieldset>
					<button class="accordion" type="button">Brot/Korn</button>
					<div class="panel">
						<div class="zutatenAuswahl">
							<input type="checkbox" name="zutatenAuswahl[]" value="reis">
							<label>Reis</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="Pasta">
							<label>Pasta</label>

							<input type="checkbox" name="zutatenAuswahl[]" value="Brot">
							<label>Brot</label>
						</div>
					</div>
				</fieldset>
				<p></p>
				<input class="btn btn-primary green-background" type="Submit"
								name="SubmitButton" value="Finde Rezept"/>
				<p></p>
			</form>

		</div>

<!-- JavaScript für Bewegung des Auswahl-Accordions  -->
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_accordion_symbol -->
	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
  		acc[i].addEventListener("click", function() {
    	this.classList.toggle("active");
    	var panel = this.nextElementSibling;
    	if (panel.style.maxHeight){
      	panel.style.maxHeight = null;
    		}
			else {
      	panel.style.maxHeight = panel.scrollHeight + "px";
    		}
  		});
		}
	</script>


<!-- *******************************************************-->
<!-- Zutenausgabe --><!-- Zutenausgabe --><!-- Zutenausgabe -->

<?php if(isset($input)){ //Ausgabe nach Drücken des Buttons
	$auswahl = $_POST["zutatenAuswahl"];
	$auswahlString = implode("','", $auswahl);
	$auswahltext = "'$auswahlString'";
	$debug = 0;

	//ERSTELLEN DER TEMPORÄREN AUSWAHL LISTE IN LOCALHOST
	include 'dbh.php';
	mysqli_query($db_link, "Set names 'utf8'");
	foreach($auswahl as $value){
		$input = "INSERT INTO auswahl (zutat) VALUES ('$value')";

		mysqli_query($db_link,$input);
	};

	$AnzahlResultate ="SELECT COUNT(id) AS AnzahlResultate FROM rezept WHERE id IN(
		SELECT id FROM normalform WHERE zutat IN(
			SELECT zutat FROM auswahl)
		GROUP BY id HAVING COUNT(DISTINCT zutat) = (SELECT COUNT(zutat) FROM auswahl)
		UNION SELECT id FROM normalform WHERE zutat IN (
			select zutat from auswahl)
		GROUP BY id HAVING COUNT(DISTINCT zutat)>=3)";
	$x = mysqli_query($db_link,$AnzahlResultate);
	$r = mysqli_fetch_assoc($x);

	//Abfrage von Menge A(INPUT) in Menge B(Rezept) vereint mit
	//Abfrage nach Schnittmenge A und B als auch B in Menge A
	$abfrage = "SELECT id, titel,bild, zutaten, beschreibung FROM rezept WHERE id IN(
		SELECT id FROM normalform WHERE zutat IN(
			SELECT zutat FROM auswahl)
		GROUP BY id HAVING COUNT(DISTINCT zutat) = (SELECT COUNT(zutat) FROM auswahl)
		UNION SELECT id FROM normalform WHERE zutat IN (
			select zutat from auswahl)
		GROUP BY id HAVING COUNT(DISTINCT zutat)>=3)";

	$resultat1 = mysqli_query($db_link, $abfrage)
	  or die ("Konnte die Abfrage nicht ausführen");


	if (mysqli_num_rows($resultat1) > 0) {
	// Resultate in Reihen ausgeben
		if ($r['AnzahlResultate'] >1){
			echo "Es wurden ";echo $r['AnzahlResultate']; echo " geeignete Rezepte gefunden";
		};
		if ($r['AnzahlResultate'] == 1){
			echo "Es wurde 1 geeignetes Rezept gefunden";};
	echo "<div>";

	// Erstellen einer Tabelle für Zutatenausgabe
	  echo "<table width='100%' id='my-table-id' class='table table-bordered table-responsive-sm' border=1>";
		echo "<thead class='thead-light'><tr><th> Name: </th> <th>Zutaten: </th><th></th></tr></thead>";
	    while($row = mysqli_fetch_assoc($resultat1)) {
	        echo "<tr>";
	        echo "<td>"; echo $row["titel"]; echo "</td>";
	        echo "<td>"; echo $row['zutaten'];
					echo "<td><a href='Detail.php?id=". $row['id']."'>Details</a></td>";
	        echo "</td>";

	        echo "</tr>";
	          }
	  echo "</table>";
		echo "</div>";

	};



//FALLS KEINE EXAKTEN ERGEBNISSE GEFUNDEN WERDEN
	if (mysqli_num_rows($resultat1) == 0) {
	  echo "Keine exakten Treffer<br>";
	};

		$abfrage2 = "SELECT id, titel,bild, zutaten, beschreibung FROM rezept WHERE id IN(
			SELECT id FROM normalform WHERE zutat IN
				(SELECT zutat FROM auswahl)
				GROUP BY id HAVING COUNT(DISTINCT zutat) = (SELECT COUNT(zutat) FROM auswahl)
				UNION SELECT id FROM normalform WHERE zutat IN
					(select zutat from auswahl)GROUP BY id HAVING COUNT(DISTINCT zutat)>=2)
				AND id not in(
					-- SELECT aus Abfrage1, um erneutes Anzeigen des Rezepts zu verhindern
					SELECT id FROM normalform WHERE zutat IN(SELECT zutat FROM auswahl)
					GROUP BY id HAVING COUNT(DISTINCT zutat) = (SELECT COUNT(zutat) FROM auswahl)
					UNION SELECT id FROM normalform WHERE zutat IN
						(select zutat from auswahl)
					GROUP BY id HAVING COUNT(DISTINCT zutat)>=3
		)";

		$resultat2 = mysqli_query($db_link, $abfrage2)
			or die ("Konnte die Abfrage nicht ausführen");

		if (mysqli_num_rows($resultat1) == 0 && mysqli_num_rows($resultat2) == 0) {
			echo "Leider gibt es keine Rezepte";}

		if (mysqli_num_rows($resultat2) > 0) {
			echo "<br> Vielleicht magst du zusätzlich eines dieser Rezepte:";
		// Resultate in Tabelle ausgeben
		echo "<div>";
			echo "<table width='100%' id='my-table-id' class='table table-bordered table-responsive-sm' border=1>";
			echo "<thead class='thead-light'><tr><th> Name: </th> <th>Zutaten: </th><th></th></tr></thead>";
				while($row = mysqli_fetch_assoc($resultat2)) {
						echo "<tr>";
						echo "<td>"; echo $row["titel"]; echo "</td>";
						echo "<td>"; echo $row['zutaten'];
						echo "<td><a href='Detail.php?id=". $row['id']."'>Details</a></td>";
						echo "</td>";
						echo "</tr>";
							}
			echo "</table>";
			echo "</div>";
		};



//LÖSCHEN DER TEMPORÄREN AUSWAHL TABELLE IN LOCALHOST
	$delete = "DELETE FROM auswahl";
	$db_link->query($delete);
};
?>
</main>


	<!-- Code für Bootstrapverwendung -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
					integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
					crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
					integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
					crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
					integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
					crossorigin="anonymous"></script>
</body>
</html>
