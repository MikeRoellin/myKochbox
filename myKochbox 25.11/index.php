<?php
  include 'dbh.php';
?>

<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
<script>
  $(document).ready(function(){
    var rezeptCount = 2;
    $("button").click(function(){
      rezeptCount = rezeptCount + 2;
      $("#rezepte").load("load-comments.php", {
        rezeptNewCount: rezeptCount
      });
    });
  });
</script>
</head>

<body>

  <div id="rezepte">
    <?php
    $abfrage = "SELECT * FROM rezept LIMIT 2";
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

  <button>Mehr Rezepte</button>
</body>
</html>
