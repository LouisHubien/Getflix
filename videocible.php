<?php
include 'connectiondatabase.php';

//Efface un comment
if(isset($_GET['commentId'], $_GET['titre'])){
    $commentId=$_GET['commentId'];
    $title=$_GET['titre'];
    $req = $bdd->prepare('DELETE FROM comments WHERE ID=:id');
    $req->execute(array(
	'id' => $commentId,
	));
    header('Location:video.php?titre=' . $title);
    $req->closeCursor();
    };
?>