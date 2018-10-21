<?php
$auswahl = $_POST["zutatenAuswahl"];
echo "<pre>";
 print_r($auswahl);
echo "/<pre>";
$auswahlString = implode("%", $auswahl);
$AuswahlAnzahl = count($auswahl);
$Auswahl1 = current($auswahl);
$Auswahl2 = next($auswahl);
echo "$Auswahl1";
echo "<p></p>";
echo "$Auswahl2";
echo "<p></p>";
echo "$AuswahlAnzahl";
echo "<p></p>";
echo "$auswahlString";
echo "<p></p>";
?>
<?php
include 'dbh.php';

$abfrage = "SELECT * FROM rezept  WHERE zutaten LIKE '%$Auswahl1%' AND zutaten LIKE '%$Auswahl2%'";
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

$abfrage = "SELECT * FROM rezept  WHERE zutaten LIKE '%$Auswahl1%' AND zutaten NOT LIKE '%$Auswahl2%'";
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
