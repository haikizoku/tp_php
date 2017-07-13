<?php
$user= array(
  array("id" =>1, "login" =>"1", "password" => "1"),
  array("id" =>2, "login" =>"admin", "password" => "password"),
  array("id" =>3, "login" =>"joes3", "password" => "123"),
  array("id" =>4, "login" =>"joe4", "password" => "123")
);

$articles =array(
  array("id" =>1, "article" =>"chaussure"),
  array("id" =>1, "article" =>"basket"),
  array("id" =>1, "article" =>"casque"),
  array("id" =>1, "article" =>"bracelets")
);

function  seekUser  ( $array,  $login,  $password) {
  foreach ($array as $value) {
     if(($value['login']== $login) &&  ($password == $value['password']) )
     return true;
  }
  return false;
}


function listerAticle ( $array) {
  foreach ($array as $value) {
      echo "Valeur :". $value['article'] ."</br>" ;
  }
}
 ?>
