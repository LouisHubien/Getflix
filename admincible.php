<?php
include 'connectiondatabase.php';

//Efface une entities
if(isset($_GET['titre'])){
$title=$_GET['titre'];
$req = $bdd->prepare('DELETE FROM entities WHERE Name=:name');
$req->execute(array(
	'name' => $title,
	));
header('Location:admin.php');
};

//Efface un user
if(isset($_GET['user'])){
    $user=$_GET['user'];
    $req = $bdd->prepare('DELETE FROM users WHERE Username=:user');
    $req->execute(array(
	'user' => $user,
	));
    header('Location:admin.php');
    };
?>