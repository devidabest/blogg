<?php

include("db.php");
$errors=array();
$username='';
$email='';
$password='';

if (isset($_POST['register-btn'])){
  global $conn;
    
  if(empty($_POST['username'])){
    array_push($errors, 'Nom dutilisateur est nécessaire');
  }
  if(empty($_POST['email'])){
    array_push($errors, 'Le email est requis');
  }
  if(empty($_POST['password'])){
    array_push($errors, 'Mot de passe requis');
  }
  $existingUser= selectOne('users' ,['email'=> $_POST['email']]);
  if(isset($existingUser)){
    array_push($errors, 'lemail existe déjà');
  }
  if(count($errors) ==0 ){
    unset($_POST['register-btn']);
    $_POST['admin'] = 0;
    $_POST['password']= password_hash($_POST['password'],PASSWORD_DEFAULT);
    $user_id= create('users' ,$_POST);
    $user =selectOne('users', ['id' => $user_id]);

    //log in
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'Vous êtes maintenant connecté';
    $_SESSION['type'] = 'sucess';
    if ($_SESSION['admin']) {
      header('location: ../pages/form login.php');
    }else {
      header('location: ../pages/page1 acceuil.php');
    }

    exit();
    //login end

  }else{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  }
}
if(isset($_POST["login-btn"])){

  if(empty($_POST['username'])){
    array_push($errors, 'Nom de utilisateur est nécessaire');
  }
  if(empty($_POST['password'])){
    array_push($errors, 'Mot de passe requis');
  }
  if(count($errors) ==0 ){
    $user=selectOne('users',['username'=>$_POST['username']]);
    if ($user && password_verify($_POST['password'],$user['password'])) {
      $_SESSION['id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['admin'] = $user['admin'];
      $_SESSION['message'] = 'Vous êtes maintenant connecté';
      $_SESSION['type'] = 'succès';
      if ($_SESSION['admin']) {
        header('location: ../pages/form login.php');
      }else {
        header('location: ../pages/page1 acceuil.php');
      }
      exit();

    } else {
      array_push($errors,'mot de passe incorecte');
    }  
  }
  $username = $_POST['username'];
  $password = $_POST['password'];

}
?>