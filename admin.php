<?php
include 'sessionstart.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Streaming platform in bootstrap">
    <meta name="keywords" content="HTML, CSS, JS, Bootstrap CDN, Php, Mysql">
    <meta name="author" content="Louis Hubien, eugenieuwimana, Noemie Uylenbroeck, El kabir Soufiane">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assetsCSS/Homestyle.css">
    <script src="https://kit.fontawesome.com/11651444b5.js" crossorigin="anonymous"></script>
    <title>Admin page</title>
</head>

<body>
    <?php 
    include 'header.php';
    ?>
    <section class="container-fluid flexaccount text-white">
        <div class='row'>
            <div class="col-12 offset-md-1">
                <h1 class="fontfamily">Admin page</h1>
            </div>
        </div>
        <div class='row mt-5'>
            <div class="col-8 col-md-6 col-lg-4 offset-md-1">
                <h2> Manage the videos</h2>
                <?php
                include 'connectiondatabase.php';
                $reponse = $bdd->query('SELECT * FROM entities');
                while ($donnees = $reponse->fetch())
                {
                    if($donnees['movies']==1 AND $donnees['adult']==1){
                    echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\">" . $donnees['Name'] . "Type : movies Categorie : adult </a></br>";
                    
                }elseif($donnees['movies']==1 AND $donnees['adult']==0){
                    echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\">" . $donnees['Name'] . "Type : movies Categorie : kid </a></br>";
                }elseif($donnees['movies']==0 AND $donnees['adult']==1){
                    echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\">" . $donnees['Name'] . "Type : TV-Show Categorie : adult </a></br>";
                }else{
                    echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\">" . $donnees['Name'] . "Type : TV-Show Categorie : kid </a></br>";
                }
                }$reponse->closeCursor();
                ?>
            </div>
        </div>
        <div class='row mt-5'>
            <div class="col-8 col-md-6 col-lg-4 offset-md-1">
                <h2> Manage the users</h2>

            </div>
        </div>
        <!-- FOOTER -->
        <?php 
        include 'footer.php';
        ?>
    </section> 
 
    <!-- JS scripts -->
    <?php 
        include 'scriptinclude.php';
    ?>
    
</body>

</html>