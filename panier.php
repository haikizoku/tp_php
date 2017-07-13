<?php
// Start the session
session_start();

if (isset($_GET["vider"]))
{
  session_unset();
}
?>

<!DOCTYPE html>
<html>
<body>

<h3>Mon panier</h3>

<a href="panier.php?vider=1">Vider le panier</a>

<hr>

<?php

//afficher le contenu de la session
if (isset($_SESSION["list"]))
{
  foreach ($_SESSION["list"] as $value){
    print $value . "<br>";
  }
}


?>

<hr>

<a href="#">Continue shopping</a>

</body>
</html>
