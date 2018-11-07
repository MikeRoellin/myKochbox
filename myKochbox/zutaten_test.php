<?php
	header("Content-Type: text/html; charset=utf-8");

  include 'dbh.php';
?>
<!doctype html>
<html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
			crossorigin="anonymous">

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
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
	  <a class="navbar-brand" href="http://localhost:8080/myKochbox/Test_Seite.html">myKochbox</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav nav-pills">
	      <li class="nav-item">
	        <a class="nav-link" href="http://localhost:8080/myKochbox/Test_Seite.html">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link active" href="http://localhost:8080/myKochbox/zutaten.php">Zutaten</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">About</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<div>
		<h1> Wähle deine Zutaten </h1>
		<h2> Zutaten</h2>
	</div>
<form action="Auswahl_Test.php" method="post">
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
					<input type="checkbox" name="zutatenAuswahl[]" value="tomate">
					<label>Tomate</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="zwiebel">
					<label>Zwiebel</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="kartoffel">
					<label>Kartoffel</label>
			</div>
	</fieldset>
	<p></p>
	<fieldset id="MilchFd">
			<legend>Milchprodukte</legend>

			<div class="zutatenAuswahl">
					<input type="checkbox" name="zutatenAuswahl[]" value="Ei">
					<label>Ei</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="hartkaese">
					<label>Hartkäse</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="milch">
					<label>Milch</label>
			</div>
	</fieldset>
	<p></p>
	<fieldset id="FrüchteFd">
			<legend>Früchte</legend>

			<div class="zutatenAuswahl">
					<input type="checkbox" name="zutatenAuswahl[]" value="apfel">
					<label>Apfel</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="banane">
					<label>Banane</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="orange">
					<label>Orange</label>
			</div>
	</fieldset>
	<p></p>
	<fieldset>
			<legend>Brot/Korn</legend>

			<div class="zutatenAuswahl">
					<input type="checkbox" name="zutatenAuswahl[]" value="reis">
					<label>Reis</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="Pasta">
					<label>Pasta</label>

					<input type="checkbox" name="zutatenAuswahl[]" value="Brot">
					<label>Brot</label>
			</div>
	</fieldset>
	<p></p>
	<input type="Submit" value="Absenden" />
	<p></p>
</form>
	<div id="rezepteDB">
		<?php
		include 'dbh.php';

		$abfrage = "SELECT * FROM rezept LIMIT 0 ";
		$resultat = mysqli_query($db_link, $abfrage)
		  or die ("Konnte die Abfrage nicht ausführen");
		if (mysqli_num_rows($resultat) > 0) {
		  // Resultate in Reihen ausgeben
		  echo "<table class='table'>";
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

	<button type="button" class="btn btn-success">Finde Rezepte</button>


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
