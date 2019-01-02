<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Webseite für Rezepte">
  <meta name="author" content="MikeRoellin">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Link für Bootstrap Verwendung -->
  <!-- https://getbootstrap.com/docs/4.1/getting-started/download/ -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">

  <title>myKochbox</title>

  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
  <link href="cover.css" rel="stylesheet">
  <style>
    header{
      height: 80px;
    }
    /* Navbar CSS https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp */
    .navbar {
      min-height: 50px;
    }

    .navbar-brand {
      padding: 0 15px;
      height: 50px;
      line-height: 50px;
    }

    .navbar-toggle {
      /* Berechnung für Höhenanpassung des Headers */
      /* https://bootstrapious.com/p/how-to-change-bootstrap-navbar-height */
      /* (Höhe in px - button height 34px) / 2 */
      margin-top: 8px;
      padding: 9px 10px !important;
    }

    @media (min-width: 768px) {
      .navbar-nav > li > a {
        /* Berechnung für Höhenanpassung des Headers */
        /* https://bootstrapious.com/p/how-to-change-bootstrap-navbar-height */
        /* (Höhe in px - line-height of 27px) / 2 */
        padding-top: 11.5px;
        padding-bottom: 11.5px;
        line-height: 27px;
      }
    }
    @media (max-width: 767px) {
      .hidden-xs {
        display: none
      }
    }
    .RezeptBild{
      margin-left: 20px;
      margin-bottom: 20px;
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
    <!-- Code für Collapsible Navbar: https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_navbar_collapse -->
    <!-- Navbarcode https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="https://kochbox.localtunnel.me/myKochbox/Home.html">myKochbox</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="https://kochbox.localtunnel.me/myKochbox/Home.html">Startseite</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="https://kochbox.localtunnel.me/myKochbox/Input.php">Zutaten</a>
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

      $BeschreibungLinkabfrage = "SELECT beschreibung,link FROM rezept WHERE id=".$_GET['id'];
      $x = mysqli_query($db_link,$BeschreibungLinkabfrage);
      $b = mysqli_fetch_assoc($x);

      // Tabelle für Darstellung des Titels und Bild
      echo "<table>";
      echo "<tr> <td>";
      echo "<h1 class='Titel'>".$r["titel"]; echo "</h1></td>";
      echo "<td><img class='RezeptBild hidden-xs' src=".$r['bild']; echo "></td></tr></table>";

      $Zutatenabfrage = "SELECT zutaten FROM zutaten WHERE rezept_id=".$_GET['id'];
      $e = mysqli_query($db_link,$Zutatenabfrage);

      //Erstellen Tabelle für Zutaten und Beschreibung
      echo "<table id='Übertabelle' class='table table-bordered table-responsive-sm' border=1>";
      echo "<thead class='thead-light'><tr> <th> Zutaten: </th> <th> Beschreibung </th></tr></thead>";
      echo "<tr><td>";

      //Tabelle innerhalb für Zutaten
      echo "<table id='my-table-id' class='table table-bordered table-responsive-sm' border=1>";
      while($r = mysqli_fetch_assoc($e)) {
        echo "<tr>";
        echo "<td>"; echo $r['zutaten'];
        echo "</td>";
        echo "</tr>";
      }
      echo "</table><br>";
      echo "</td><td>";
      echo $b['beschreibung'];
      echo "</td></tr></table>";

      echo "Alle Rezepte stammen von <a href='https://www.chefkoch.de'> Chefkoch.de </a><br>";
      echo "<a href='";echo $b['link']; echo "'>Link zum Rezept</a>";

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
