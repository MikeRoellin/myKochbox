<?php
//Verbindung herstellen
$db_link = mysqli_connect("localhost","root","","rezepte")
or die("Keine Verbindung zum Server");
mysqli_query($db_link, "set names 'utf8'");

?>
