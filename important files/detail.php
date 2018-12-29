<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="icon" href="../../../../favicon.ico">

  <title>myKochbox</title>

  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">
  <style>
  header{
    height: 80px;
  }
  .navbar {
min-height: 50px;
}

.navbar-brand {
padding: 0 15px;
height: 50px;
line-height: 50px;
}

.navbar-toggle {
/* (80px - button height 34px) / 2 = 23px */
margin-top: 8px;
padding: 9px 10px !important;
}

@media (min-width: 768px) {
.navbar-nav > li > a {
 /* (80px - line-height of 27px) / 2 = 26.5px */
 padding-top: 11.5px;
 padding-bottom: 11.5px;
 line-height: 27px;
}
}
.RezeptBild{
  width:30%;
  height: auto;
  border: 2px solid black;
}
b {
  color: red;
}
main {
  margin: 30px;
}

</style>

</head>

<body>
  <header>
  <div class="header">
    <!-- Header --><!-- Header --><!-- Header --><!-- Header --><!-- Header -->
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="http://localhost:8080/myKochbox/Home.html">myKochbox</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/myKochbox/Home.html">Startseite</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="http://localhost:8080/myKochbox/Input.php">Zutaten</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Detail</a>
            </li>
          </ul>
        </div>
      </nav>
  </div>
</header>
<main>
<?php
include 'dbh.php';
$abfrage = "SELECT id, titel,bild, zutaten, beschreibung FROM rezept WHERE id=".$_GET['id'];
$e = mysqli_query($db_link, $abfrage);
$r = mysqli_fetch_assoc($e);
echo "<table>";
echo "<tr> <td>";
echo "<img class='RezeptBild' src=".$r['bild']; echo "></td>";
echo "<td><h1 class='Titel'>".$r["titel"]; echo "</h1></td></tr></table>";

$Zutatenabfrage = "SELECT zutaten FROM zutaten WHERE rezept_id=".$_GET['id'];
$e = mysqli_query($db_link,$Zutatenabfrage);


echo "<table id='my-table-id' class='table table-bordered table-responsive-sm' border=1>";
echo "<thead class='thead-light'><tr> <th> Zutaten: </th> <th> Beschreibung </th></tr></thead>";


$ersteabfrage = "SELECT zutaten FROM zutaten WHERE rezept_id=".$_GET['id'];
$x = mysqli_query($db_link,$ersteabfrage);
$r = mysqli_fetch_assoc($x);
echo "<tr> <td>"; echo $r['zutaten']; echo"</td>";

$Beschreibungabfrage = "SELECT beschreibung FROM rezept WHERE id=".$_GET['id'];
$x = mysqli_query($db_link,$Beschreibungabfrage);
$r = mysqli_fetch_assoc($x);


echo "<td rowspan='0'>"; echo $r['beschreibung']; echo"</td></tr>";
while($r = mysqli_fetch_assoc($e)) {
  echo "<tr>";
  echo "<td>"; echo $r['zutaten'];
  echo "</td>";

  echo "</tr>";
    }
echo "</table>";
?>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>
