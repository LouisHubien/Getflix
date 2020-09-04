<?php
$bdd = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT Thumbnails , movies FROM entities WHERE movies="" LIMIT 4');

while($donnee = $reponse->fetch()){
    echo '<div class="col-3">' . $donnee['Thumbnails'] . '</div>';
}
?>