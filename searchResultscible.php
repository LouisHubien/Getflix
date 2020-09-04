<?php
include 'connectiondatabase.php';
    
    if(isset($_POST['search'])){
    $search=htmlspecialchars($_POST['search']);
    $searchlw=strtolower($search);
    $req = $bdd->prepare('SELECT * FROM entities WHERE name = :name');
    $req->execute(array(
        'name' => $searchlw,
        ));
    while ($donnees = $req->fetch())
		{
            echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
        }
    
    $req->closeCursor();
    }

    
    ?>