<?php
$db_link = mysqli_connect("localhost","root","","schnittmengen")
or die("Keine Verbindung zum Server");

$abfrage = "SELECT u.userid, r.role
            from users u join
            roles r
            on u.access = r.access
            group by u.userid, r.role
            having count(*) = (select count(*) from roles r2 where r2.role = r.role);";

            $resultat = mysqli_query($db_link, $abfrage)
              or die ("Konnte die Abfrage nicht ausführen");

            if (mysqli_num_rows($resultat) > 0) {
            // Resultate in Reihen ausgeben
              echo "<table id='my-table-id' class='table table-hover table-dark' border=1>";
                while($row = mysqli_fetch_assoc($resultat)) {
                    echo "<tr>";
                    echo "<td>"; echo "User: " . $row["userid"]; echo "</td>";
                    echo "<td>"; echo "Access: " . $row["role"]; echo "</td>";
                    echo "</tr>";
                      }
              echo "</table>";
              }
?>
