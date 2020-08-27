<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', '');
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
    
//  Récupération de l'utilisateur et de son pass hashé
$username=$_POST['username'];
$req = $bdd->prepare('SELECT Username, Password FROM users WHERE Username = :username');
$req->execute(array(
    'username' => $username));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['Password']);

if ($isPasswordCorrect) {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: home.php');
    }
    else {
        header('Location:index.php');
    }
?>