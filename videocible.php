<?php
include 'connectiondatabase.php';

//display les comments précédents
$title=$_GET['titre'];
$req = $bdd->prepare('SELECT * FROM comments WHERE videoId=:videoId');
$req->execute(array('videoId' => $videoId));
while ($donnees = $req->fetch()) 
{
    echo "<p>" . $donnees ['Username'] . " : " . $donnees ['Comment'] . "<a href=\"videocible.php?commentId=" . $donnees['ID'] . "&amp;titre=" . $title . "\"><i class=\"fas fa-times float-right\" style=\"font-size: 1.3em;color:#C76B16\"></i></a></p>";
}
$req->closeCursor();

//Ajoute un comment
if (isset($_POST['comment'])){
    $req = $bdd->prepare('INSERT INTO comments (Comment, Username, videoId) VALUES (:content, :Username, :videoId)');
    $req->execute(array(
        'content' => $_POST['comment'],
        'Username' => $_SESSION['username'],
        'videoId' => $videoId,
    ));
    header('Location:video.php?titre=' . $title);
    $req->closeCursor();
}

//Efface un comment
if(isset($_GET['commentId'], $_GET['titre'])){
    $commentId=$_GET['commentId'];
    $req = $bdd->prepare('DELETE FROM comments WHERE ID=:id');
    $req->execute(array(
	'id' => $commentId,
	));
    header('Location:video.php?titre=' . $title);
    $req->closeCursor();
    };
?>