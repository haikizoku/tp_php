<?php
include "fakerUser.php";

session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['password'])) {

  if (isset($_GET["ajouter"]))
  {
    if (!isset($_SESSION["list"]))
    {
      $_SESSION["list"] = array();
    }
    array_push($_SESSION["list"], $_GET["ajouter"]);


  }
  //compter elements dans panier
  $panier_count = 0;
  if (isset($_SESSION["list"]))
  {
    $panier_count = sizeof($_SESSION["list"]);

  }
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Mon Ecommerce </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">E-commerce </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Profil</a></li>
              <li><a href="logout.php">Deconnexion</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">shopping list</div>
              <a href="panier.php">Voir le panier</a> (<?php print $panier_count; ?> produits)<br><br><br>
              <a href="profile.php?ajouter=basket:12 euros">Ajouter basket</a><br>
              <a href="profile.php?ajouter=chaussure:30 euros">Ajouter chaussure </a><br>
              <a href="profile.php?ajouter=bracelet:15 euros ">Ajouter bracelet</a><br>

    </div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
