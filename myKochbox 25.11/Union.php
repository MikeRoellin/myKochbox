<html>
<body>
<?php
include 'dbh.php';

$auswahl = $_POST["zutatenAuswahl"];
$auswahlString = implode("%'AND zutaten LIKE'%", $auswahl); //String erstellen mit allen gewählten Zutaten für geeignete Abfrage in Form von LIKE '%Auswahl1%' AND zutaten LIKE '%Auswahl2%' usw.
foreach ($auswahl as $value) {                    //Auswahl nach allen einzelnen Zutaten
  $abfrage = "SELECT * FROM rezept  WHERE zutaten LIKE '%$value%' UNION SELECT * FROM rezept  WHERE zutaten LIKE '%$auswahlString%' ";
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
    };
  };

?>
</body>
</html>
