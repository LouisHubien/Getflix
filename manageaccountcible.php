<?php
session_start();
include 'connectiondatabase.php';

//CHANGER USERNAME
//  Récupération des données du form si elles existent
if(isset($_POST['newusername'],$_POST['newusernameconfirmation'])){
    $newUsername=htmlspecialchars($_POST['newusername']);
    $confirmNewUsername=htmlspecialchars($_POST['newusernameconfirmation']);
    
    //Changement de l'username si la confirmation est correcte et de $_SESSION['Username'] + message
    if($newUsername == $confirmNewUsername){
        $req = $bdd->prepare('UPDATE users SET Username=:newusername WHERE username = :oldusername');
        $req->execute(array(
            'newusername' => $newUsername,
            'oldusername' => $_SESSION['username']
        ));
        $_SESSION['username']=$newUsername;
        $_SESSION['messageusername']=array('Your username has been changed to <span class="font-italic">'. $newUsername . '</span> !');
        header('Location:manageaccount.php');
    }else{
        $_SESSION['messageusername']=array("Your new username's confirmation failed. Please try again.");
        header('Location:manageaccount.php');
    }
    $req->closeCursor();
}


//CHANGER PASSWORD
//  Récupération des données du form si elles existent
if(isset($_POST['currentpassword'],$_POST['newpassword'],$_POST['newpasswordconfirmation'])){
    $username=$_SESSION['username'];
    $currentpassword=htmlspecialchars($_POST['currentpassword']);
    $newpassword=htmlspecialchars($_POST['newpassword']);
    $newpasswordconfirmation=htmlspecialchars($_POST['newpasswordconfirmation']);
    
    // Comparaison du current password
    $newpass_hache = password_hash($newpassword, PASSWORD_DEFAULT);
    $req = $bdd->prepare('SELECT Password FROM users WHERE Username = :username');
    $req->execute(array('username' => $username));
    $donnees = $req->fetch();
    $isPasswordCorrect = password_verify($currentpassword, $donnees['Password']);

    // Changement de password si la confirmation est correcte + messsage
    if($isPasswordCorrect AND $newpassword==$newpasswordconfirmation){
        $req = $bdd->exec('UPDATE users SET Password=$newpass_hache WHERE username = $username');
        $_SESSION['messagepassword']=array('Your password has been changed ! It will be activated on your next connection.');
        header('Location:manageaccount.php');
    }else{
        $_SESSION['messagepassword']=array("Your current password is not valid or your new password's confirmation failed. Please try again.");
        header('Location:manageaccount.php');
    }
    $req->closeCursor();
}

//KID ACCOUNT
//  Récupération des données du form si elles existent
if(isset($_POST['newadult'])){
    $newadult=htmlspecialchars($_POST['newadult']);

    //Changement dans la database et de $_SESSION['adult']
    $req = $bdd->prepare('UPDATE users SET Adult=:newadult WHERE Username = :username');
    $req->execute(array(
        'newadult' => $newadult,
        'username' => $_SESSION['username']
    ));
    $_SESSION['adult'] = $newadult;

    //message
    if($newadult==0){
        $_SESSION['messageadult']=array("Your account's resctrictions have been changed : your account is now for kids.");
        header('Location:manageaccount.php');
    }else{
        $_SESSION['messageadult']=array("Your account's resctrictions have been changed : your account is now for an adult.");
        header('Location:manageaccount.php');
    }
    $req->closeCursor();
}
?>