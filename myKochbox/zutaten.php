<?php
	header("Content-Type: text/html; charset=utf-8");

  include 'dbh.php';
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
	.zutatenAuswahl{
		margin-bottom: 2px;
		}
</style>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
<script>
  $(document).ready(function(){
    var rezeptCount = 0;
    $("button").click(function(){
      rezeptCount = rezeptCount + 2;
      $("#rezepteDB").load("load-comments.php", {
        rezeptNewCount: rezeptCount
      });
    });
  });
</script>
</head>
<body>

	<div class="header">
		<a href="http://localhost:8080/myKochbox/Test_Seite.html" class="logo"> myKochbox </a>
		<div class="header-right">
			<a href="http://localhost:8080/myKochbox/Test_Seite.html">Home</a>
			<a class="active" href="http://localhost:8080/myKochbox/zutaten.php">Zutaten</a>
			<a href="#about">About</a>
		</div>
	</div>

	<div>
		<h1> Wähle deine Zutaten </h1>
		<h2> Zutaten</h2>
	</div>
	<fieldset id="FleischFd">
			<legend>Fleisch</legend>

			<div class="zutatenAuswahl">
					<input type="checkbox" name="zutatenAuswahl[]" value="schwein">
					<label>Schwein</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="lachs">
					<label>Lachs</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="poulet">
					<label>Poulet</label>
			</div>
	</fieldset>
	<p></p>
	<fieldset id="GemueseFd">
			<legend>Gemüse</legend>

			<div class="zutatenAuswahl">
					<input type="checkbox" name="zutatenAuswahl[]" value="schwein">
					<label>Schwein</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="lachs">
					<label>Lachs</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="poulet">
					<label>Poulet</label>
			</div>
	</fieldset>
	<p></p>
	<fieldset id="MilchFd">
			<legend>Milchprodukte</legend>

			<div class="zutatenAuswahl">
					<input type="checkbox" name="zutatenAuswahl[]" value="schwein">
					<label>Schwein</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="lachs">
					<label>Lachs</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="poulet">
					<label>Poulet</label>
			</div>
	</fieldset>
	<p></p>
	<fieldset id="FrüchteFd">
			<legend>Früchte</legend>

			<div class="zutatenAuswahl">
					<input type="checkbox" name="zutatenAuswahl[]" value="schwein">
					<label>Schwein</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="lachs">
					<label>Lachs</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="poulet">
					<label>Poulet</label>
			</div>
	</fieldset>
	<p></p>
	<fieldset>
			<legend>Fleisch</legend>

			<div class="zutatenAuswahl">
					<input type="checkbox" name="zutatenAuswahl[]" value="schwein">
					<label>Schwein</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="lachs">
					<label>Lachs</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="poulet">
					<label>Poulet</label>
			</div>
	</fieldset>
	<p></p>
	<div id="rezepteDB">
		<?php
		$abfrage = "SELECT * FROM rezept LIMIT 0";
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
				echo "0 RESULTATE";
					}
		?>
	</div>

	<button>Finde Rezepte</button>



</body>
</html>
