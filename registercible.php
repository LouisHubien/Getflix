<?php
session_start();
include 'connectiondatabase.php';


$username =htmlspecialchars($_POST['username'])  ;
$email=htmlspecialchars($_POST['email']) ;
$password=htmlspecialchars($_POST['password']) ;
$passwordconfirmation=htmlspecialchars($_POST['passwordconfirmation']);
$adult=htmlspecialchars($_POST['adult']);

if($password==$passwordconfirmation){
$pass_hache = password_hash($password, PASSWORD_DEFAULT);
$req = $bdd->prepare('INSERT INTO users(Username, Email, Password, Adult) 
VALUES(:Username, :Email ,:Password ,:Adult)');
$req->execute(array(
	'Username' => $username,
	'Email' => $email,
	'Password' => $pass_hache,
	'Adult'=> $adult,
	));
	header('Location: index.php');
}else{
	$_SESSION['errorregister']=array("Your password's confirmation failed, please try again.");
	header('Location:register.php');
}
?>