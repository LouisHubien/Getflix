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

$req = $bdd->query('SELECT adult FROM users WHERE Username = $_SESSION['username']);
$adult = $req->fetch();
?>