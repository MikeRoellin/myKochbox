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
</head>


<body>
<script>
	function onRowClick(tableId, callback) { //Versuch für Onclick Funktion bei einer Zeile
    var table = document.getElementById(tableId),
        rows = table.getElementsByTagName("tr"),
        i;
    for (i = 0; i < rows.length; i++) {
        table.rows[i].onclick = function (row) {
            return function () {
                callback(row);
            };
        }(table.rows[i]);
    }
};

onRowClick("my-table-id", function (row){
    var value = row.getElementsByTagName("td")[0].innerHTML;
    document.getElementById('click-response').innerHTML = value + " clicked!";
    console.log("value>>", value);
}); </script>

	<?php
	if(isset($_POST['SubmitButton'])){ //check if form was submitted
		$input = $_POST["zutatenAuswahl"];}; //get input text
		?>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"> <!-- Header -->
	  <a class="navbar-brand" href="http://localhost:8080/myKochbox/Test_Seite.html">myKochbox</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav nav-pills">
	      <li class="nav-item">
	        <a class="nav-link" href="http://localhost:8080/myKochbox/Test_Seite.html">Startseite</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link active" href="http://localhost:8080/myKochbox/zutaten.php">Zutaten</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Über</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<div>
		<h1> Wähle deine Zutaten </h1>
		<h2> Zutaten</h2>
	</div>

<form action="" method="post"> <!-- Zutatenauswahl -->
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
	<input type="Submit" name="SubmitButton" value="Finde Rezept" />
	<p></p>
</form>

<!-- Zutenausgabe -->
<?php if(isset($input)){ //Ausgabe nach Drücken des Buttons
	$auswahl = $_POST["zutatenAuswahl"];
	$debug = 0;
	$kleinereAuswahl = array();
	$i = 0;                             //Zähler für Erstellen reduzierter Listen
	$AuswahlAnzahl = count($auswahl);
	echo "<pre>";
	 print_r($auswahl);
	echo "/<pre>";
	foreach($auswahl as $value){        //Liste erstellen mit einer Zutat weniger
	  array_push($kleinereAuswahl, "$value");
	  if(++$i == $AuswahlAnzahl - 1) break;
	};

	$auswahlString = implode("%'AND zutaten LIKE'%", $auswahl); //String erstellen mit allen gewählten Zutaten für geeignete Abfrage in Form von LIKE '%Auswahl1%' AND zutaten LIKE '%Auswahl2%' usw.
	//$Auswahl1 = $auswahl[0];
	//for ($i = 0; $i <= $AuswahlAnzahl; $i++){
	//  $Auswahl.$i = $auswahl[$i];
	//};
	$Auswahl1 = current($auswahl);
	$Auswahl2 = next($auswahl);
	if ($debug == 1){
	  print_r($kleinereAuswahl);
	  echo "<p></p>";
	  echo "$Auswahl1";
	  echo "<p></p>";
	  echo "$Auswahl2";
	  echo "<p></p>";
	  echo "$Auswahl1"."$Auswahl2";
	  echo "<p></p>";
	  echo "$AuswahlAnzahl";
	  echo "<p></p>";
	  echo "$auswahlString";
	  echo "<p></p>";
	  foreach ($auswahl as $value){
	    echo "$value <br>";
	  }
	}

	include 'dbh.php';
	//Abfrage nach allen Zutaten
	$abfrage = "SELECT * FROM rezept  WHERE zutaten LIKE '%$auswahlString%'";
	$resultat = mysqli_query($db_link, $abfrage)
	  or die ("Konnte die Abfrage nicht ausführen");
	if (mysqli_num_rows($resultat) > 0) {
	  // Resultate in Reihen ausgeben
	  echo "<table id='my-table-id' class='table table-hover table-dark' border=1>";
	    while($row1 = mysqli_fetch_assoc($resultat)) {
	      echo "<tr>";
	      echo "<td>"; echo "id: " . $row1["id"]; echo "</td>";
	      echo "<td>"; echo $row1["bild"]; echo "</td>";
	      echo "<td>"; echo "Zutaten: " . $row1["zutaten"]; echo "</td>";
	      echo "<td>"; echo "Beschreibung: " . $row1["beschreibung"]; echo "</td>";
	        echo "</tr>";
	       }
	  echo "</table>";
	  }
	else {
	    echo "0 RESULTATE";
	      }

	foreach ($auswahl as $value) {                    //Auswahl nach allen einzelnen Zutaten
	  $abfrage = "SELECT * FROM rezept  WHERE zutaten LIKE '%$value%'";
	  $resultat = mysqli_query($db_link, $abfrage)
	      or die ("Konnte die Abfrage nicht ausführen");
	  if (mysqli_num_rows($resultat) > 0) {
	    // Resultate in Reihen ausgeben
	    echo "<table class='table table-hover table-dark' border=1>";
	    while($row2 = mysqli_fetch_array($resultat)) {
	      echo "<tr>";
	      echo "<td>"; echo "id: " . $row2["id"]; echo "</td>";
	      echo "<td>"; echo $row2["bild"]; echo "</td>";
	      echo "<td>"; echo "Zutaten: " . $row2["zutaten"]; echo "</td>";
	      echo "<td>"; echo "Beschreibung: " . $row2["beschreibung"]; echo "</td>";
	      echo "</tr>";

	  }
	      echo "</table>";
	      if ($debug == 1){
	        if ($row2["id"] == 4) {
	          echo "<p></p>id ist gleich 4";
	        }
	      }
	    }
	}
};
?>

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
