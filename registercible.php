<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$username =htmlspecialchars($_POST['username'])  ;
$email=htmlspecialchars($_POST['email']) ;
$password=htmlspecialchars($_POST['password']) ;
$adult=htmlspecialchars($_POST['adult']);

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
?>