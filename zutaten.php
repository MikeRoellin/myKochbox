<?php
header("Content-Type: text/html; charset=utf-8");
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style>
	body {
		margin: 0;
		font-family: Arial, Helvetica, sans-serif;
		}
		
	.header {
		overflow: hidden;
		background-color: #f1f1f1;
		padding: 20px 10px;
		}
	
	.header a {
		float: left;
		color: black;
		text-align: center;
		padding: 12px;
		font-size: 18px;
		line-height: 25px;
		border-radius: 4px;
		}
	.header a.logo {
		font-size: 25px;
		font-weight: bold;
		}
	.header a:hover {
		background-color: #ddd;
		color: white;
		}
	.header a.active {
		background-color: dodgerblue;
		color: white;
		}
	.header-right {
		 float:right; 
		}
	
	@media screen and (max-width: 500px) {
		.header a {
			float: none;
			display: block;
			text-align: left;
			}
		.header-right {
			float: none;
			}
		}
</style>
</head>
<body>

	<div class="header">
		<a href="http://localhost:8080/Test_Seite.html" class="logo"> myKochbox </a>
		<div class="header-right">
			<a href="http://localhost:8080/Test_Seite.html">Home</a>
			<a class="active" href="http://localhost:8080/zutaten.html">Zutaten</a>
			<a href="#about">About</a>
		</div>
	</div>
	
	<div>
		<h1> Wähle deine Zutaten </h1>
		<p> Zutaten</p>
	</div>
	
	<div> 
		
		<!--  Verbindung mit der Datenbank/einfaches Auslesen -->
		<p>
		<?php
			//Verbindung herstellen
			$db_link = mysqli_connect("localhost","root","","rezepte") 
			or die("Keine Verbindung zum Server");
			$abfrage = "SELECT * FROM rezept";
			$resultat = mysqli_query($db_link, $abfrage)
				or die ("Konnte die Abfrage nicht ausführen");
			if (mysqli_num_rows($resultat) > 0) {
    		// Resultate in Reihen ausgeben
    		echo "<table border=1>";
    			while($row = mysqli_fetch_assoc($resultat)) {
    				echo "<tr>";
    				echo "<td>"; echo "id: " . $row["id"]; echo "</td>";
    				echo "<td>"; echo $row["bild"]; echo "</td>";
    				echo "<td>"; echo "Zutaten: " . $row["zutaten"]; echo "</td>";
    				echo "<td>"; echo "Beschreibung: " . $row["beschreibung"]; echo "</td>";
       		 		echo "</tr>";
   					 }
   			echo "</table>";
				}
			else {
   				echo "0 results";
						}

			mysqli_close($db_link);
			?>
		</p>
			
	</div>
</body>
</html>