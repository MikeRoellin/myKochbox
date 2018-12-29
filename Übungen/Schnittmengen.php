<?php
//Verbindung herstellen
$db_link = mysqli_connect("localhost","root","","schnittmengen")
or die("Keine Verbindung zum Server");
$abfrage = "SELECT DISTINCT id FROM t1  INNER JOIN t2 USING(id)";
$resultat = mysqli_query($db_link, $abfrage)
  or die ("Konnte die Abfrage nicht ausführen");
if (mysqli_num_rows($resultat) > 0) {
  // Resultate in Reihen ausgeben
  echo "<table id='my-table-id' class='table table-hover table-dark' border=1>";
    while($row1 = mysqli_fetch_assoc($resultat)) {
      echo "<tr>";
      echo "<td>"; echo "id: " . $row1["id"]; echo "</td>";
      echo "</tr>";
       }
  echo "</table>";
  }
else {
    echo "0 RESULTATE";
      }

$abfrage = "SELECT DISTINCT id FROM t1  WHERE id IN(SELECT id FROM t2)";
$resultat = mysqli_query($db_link, $abfrage)
  or die ("Konnte die Abfrage nicht ausführen");
if (mysqli_num_rows($resultat) > 0) {
// Resultate in Reihen ausgeben
  echo "<table id='my-table-id' class='table table-hover table-dark' border=1>";
    while($row1 = mysqli_fetch_assoc($resultat)) {
        echo "<tr>";
        echo "<td>"; echo "id: " . $row1["id"]; echo "</td>";
        echo "</tr>";
          }
  echo "</table>";
  }
else {
    echo "0 RESULTATE";
      }


      $abfrage = "SELECT id FROM t1 LEFT JOIN t2 USING (id) WHERE t2.id IS NULL";
      $resultat = mysqli_query($db_link, $abfrage)
        or die ("Konnte die Abfrage nicht ausführen");
      if (mysqli_num_rows($resultat) > 0) {
      // Resultate in Reihen ausgeben
        echo "<table id='my-table-id' class='table table-hover table-dark' border=1>";
          while($row1 = mysqli_fetch_assoc($resultat)) {
              echo "<tr>";
              echo "<td>"; echo "id: " . $row1["id"]; echo "</td>";
              echo "</tr>";
                }
        echo "</table>";
        }
      else {
          echo "0 RESULTATE";
            }
            $abfrage = "SELECT id FROM t1 LEFT JOIN t2 USING (id)";
            $resultat = mysqli_query($db_link, $abfrage)
              or die ("Konnte die Abfrage nicht ausführen");
            if (mysqli_num_rows($resultat) > 0) {
            // Resultate in Reihen ausgeben
              echo "<table id='my-table-id' class='table table-hover table-dark' border=1>";
                while($row1 = mysqli_fetch_assoc($resultat)) {
                    echo "<tr>";
                    echo "<td>"; echo "id: " . $row1["id"]; echo "</td>";
                    echo "</tr>";
                      }
              echo "</table>";
              }
            else {
                echo "0 RESULTATE";
                  }


?>
