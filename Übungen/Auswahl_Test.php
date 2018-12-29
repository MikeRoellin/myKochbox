<?php
$auswahl = $_POST["zutatenAuswahl"];
$debug = 1;
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
?>
<?php
include 'dbh.php';

$abfrage = "SELECT * FROM rezept  WHERE zutaten LIKE '%$auswahlString%'";
$resultat = mysqli_query($db_link, $abfrage)
  or die ("Konnte die Abfrage nicht ausführen");
if (mysqli_num_rows($resultat) > 0) {
  // Resultate in Reihen ausgeben
  echo "<table border=1>";
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
    echo "<table border=1>";
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
?>
