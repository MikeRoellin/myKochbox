<?php
include 'dbh.php';

$rezeptNewCount = $_POST['rezeptNewCount'];

$abfrage = "SELECT * FROM rezept LIMIT $rezeptNewCount ";
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
