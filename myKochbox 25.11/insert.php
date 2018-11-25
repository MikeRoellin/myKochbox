<?php
 include 'dbh.php';
 mysqli_select_db($db_link,"rezepte");

 $sql = "INSERT INTO rezept (titel, zutaten, beschreibung)
 VALUES ('$_POST[titel]','$_POST[zutaten]','$_POST[beschreibung]')";
 if ($db_link->query($sql) === TRUE) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $db_link->error;
 }
mysqli_close($db_link)
?>
