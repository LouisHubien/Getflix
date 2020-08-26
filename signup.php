<?php
session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$username=$_POST["username"];
$email=$_POST["email"];
$adult=$_POST["adult"];

$pass_hache = password_hash($_Post["password"], PASSWORD_DEFAULT);
$req = $bdd->prepare('INSERT INTO users(Username, Email, Password, Adult) 
VALUES(:Username, :Email ,:Password ,:Adult)');
$req->execute(array(
	'Username' => $username,
	'Email' => $email,
	'Password' => $pass_hache,
	'Adult'=> $adult,
    ));
?>