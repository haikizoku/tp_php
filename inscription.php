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

      <form method="post" action="">

          <legend>S'inscrire sur le site</legend>

          <div class="form-group">
            <label class="col-lg-2 control-label">Login</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="login" placeholder="Login">
            </div>
          </div><br/><br/><br/>

          <div class="form-group">
            <label class="col-lg-2 control-label">Mot de passe</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" name="password" placeholder="Mot de passe">
            </div>
          </div>

      <br/><br/><center><button type="submit" name="submit" class="btn btn-primary">S'Inscrire</button></center>
      </form>
    </div>
  </body>
  <?php
  //Connexion à la BDD
    try
    {

     $bdd = new PDO ('mysql:host=localhost;dbname=tp', 'root');

    }

    catch(Exception $e)
    {
     die('Erreur :'.$e->getMessage());
    }

      if(ISSET($_POST['submit']))
  {

  $login =   $_POST['login'];
  $password = $_POST['password'];

  $req = $bdd->prepare('INSERT INTO users(login, password) VALUES (:login, :password)');
  $req->execute(array("login" => $login, "password" => $password));

  if(!empty($login) && !empty($password))
  {

  }else{
  ?>

  <b>Pseudo ou MDP vide !</b>

  <?php
  }


  if(empty($login) && empty($password))
  {


  }else{

  session_start();
  $_SESSION['login'] = $_POST['login'];
  $_SESSION['password'] = $_POST['password'];
  header('Location: profile.php');

  }

  }

     ?>
