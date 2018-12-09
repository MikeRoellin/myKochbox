<?php
$db_link = mysqli_connect("localhost","root","","rezepte")
or die("Keine Verbindung zum Server");
// Abfrage nach Menge B2 sprich A Element von B2
$abfrage = "SELECT DISTINCT titel FROM normalform WHERE id IN (SELECT id FROM normalform WHERE zutat IN(SELECT zutat FROM auswahl)
GROUP BY titel HAVING COUNT(DISTINCT zutat) = (SELECT COUNT(zutat) FROM auswahl)) ORDER BY titel ";

$resultat = mysqli_query($db_link, $abfrage)
  or die ("Konnte die Abfrage nicht ausführen");

if (mysqli_num_rows($resultat) > 0) {
// Resultate in Reihen ausgeben
  echo "<table id='my-table-id' class='table table-hover table-dark' border=1>";
    while($row = mysqli_fetch_assoc($resultat)) {
        echo "<tr>";
        echo "<td>"; echo "id: " . $row["titel"]; echo "</td>";
        echo "<td>"; echo "zutaten:";
        //if (mysqli_num_rows(mysqli_query($db_link, "SELECT zutat from normalform
        //where titel = $row['titel']")) > 0) {
          while($row1 = mysqli_fetch_assoc(mysqli_query($db_link, "SELECT zutat from normalform
            where titel = $row['titel']"))) {
              echo $row1['zutat'];
            }

        echo "</tr>";
          }
  echo "</table>";
  }
else {
    echo "0 RESULTATE";
      }


      $abfrage = "SELECT titel,zutat FROM normalform WHERE zutat IN(SELECT zutat FROM auswahl) ORDER BY titel";

      $resultat = mysqli_query($db_link, $abfrage)
        or die ("Konnte die Abfrage nicht ausführen");

      if (mysqli_num_rows($resultat) > 0) {
      // Resultate in Reihen ausgeben
        echo "<table id='my-table-id' class='table table-hover table-dark' border=1>";
          while($row = mysqli_fetch_assoc($resultat)) {
              echo "<tr>";
              echo "<td>"; echo "id: " . $row["titel"]; echo "</td>";
              echo "<td>"; echo "zutat: " . $row["zutat"]; echo "</td>";
              echo "</tr>";
                }
        echo "</table>";
        }
      else {
          echo "0 RESULTATE";
            }
?>
