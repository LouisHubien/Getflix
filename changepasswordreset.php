<?php
session_start();
include 'connectiondatabase.php';


$token=$_POST['token'];
$id=$_POST['tokenid'];
$password=htmlspecialchars($_POST['password']) ;
$passwordconfirmation=htmlspecialchars($_POST['passwordconfirmation']);


if($password==$passwordconfirmation){
	$pass_hache = password_hash($password, PASSWORD_DEFAULT);
	$req = $bdd->prepare("
		UPDATE users as u
		LEFT JOIN password_reset_request as prr
		ON u.Id = prr.user_id
		SET u.Password = :Password 
		WHERE u.Id = :Id
		AND prr.token = :Token
		AND prr.date_requested > NOW()-INTERVAL 1 HOUR
	");
	$req->execute(array(
	'Password' => $pass_hache,
	'Id' => $id,
	'Token' => $token,
	));

	header('Location: index.php');
}else{
	$_SESSION['errorregister']=array("Your password's confirmation failed, please try again.");
	header('Location:rewritepassword.php');
}
?>