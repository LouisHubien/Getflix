<?php
session_start();
include 'connectiondatabase.php';


$email=htmlspecialchars($_POST['email']) ;
$password=htmlspecialchars($_POST['password']) ;
$passwordconfirmation=htmlspecialchars($_POST['passwordconfirmation']);


if($password==$passwordconfirmation){
$pass_hache = password_hash($password, PASSWORD_DEFAULT);
$req = $bdd->prepare('INSERT INTO users(Username, Email, Password, Adult) 
VALUES(:Username, :Email ,:Password ,:Adult)');
$req->execute(array(
	'Email' => $email,
	'Password' => $pass_hache,
	));
	header('Location: index.php');
}else{
	$_SESSION['errorregister']=array("Your password's confirmation failed, please try again.");
	header('Location:rewritepassword.php');
}
?>