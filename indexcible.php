<?php
include 'connectiondatabase.php';
    
//  Récupération de l'utilisateur et de son pass hashé
$username=htmlspecialchars($_POST['username']);
$req = $bdd->prepare('SELECT Username, Password, Adult FROM users WHERE Username = :username');
$req->execute(array('username' => $username));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['Password']);
if ($isPasswordCorrect) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['adult'] = $resultat['Adult'];
    $_SESSION['admin'] = $resultat['Admin'];
    header('Location: home.php');
}else{
    // $_SESSION['errorconnection']=array("You have entered an invalid username or password, please try again.");
    header('Location:signinagain.php');
}
$req->closeCursor();

?>