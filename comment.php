<?php
include 'connectiondatabase.php';
if (isset($_POST['comment'])){
    $req = $bdd->prepare('INSERT INTO comments (Comment, Username, id_video) VALUES (:content, :Username, :id_video)');
    $req->execute(array(
        'Username' => $_SESSION['username'],
        'content' => $_POST['comment'],
        'id_video' => $_GET['videoId']
        ));    
}  $req->closeCursor();

}
