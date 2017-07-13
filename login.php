<html>
<head>
<title> Page de Login</title>
</head>
<body>
  <form action="" method="post">
   <fieldset>
    <legend>Connexion:</legend>
    login: <input type="text" name="login"><br>
    password: <input type="password" name="password"><br>
    <input type="submit" value="Connexion">
   </fieldset>
  </form>
</div>
</body>
</html>

<?php
include "fakerUser.php";

if (isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['login']) && !empty($_POST['password'])) {

  if (seekUser($user,$_POST['login'],$_POST['password'])){

		session_start ();
    
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['password'] = $_POST['password'];

		header ('location: profile.php');
	}
	else {

    echo 'Vos identifiants sont incorects';


	}
}

?>
