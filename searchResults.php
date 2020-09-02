<?php
session_start()
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
    <title>Blurflix-TVShows</title>
</head>

<body class="text-white">
    <?php 
    include 'header.php';
    ?>
    <section class="container searchpage ml-sm-3">
        <div class="row">
            <div class="col-12">
                <form action="searchResults.php" method="post">
                    <h1><input name="search" id="searchInput" type="search" Placeholder ="Search a title..."></h1>
                </form>
            </div>
        </div>
    </section>
    <section class="searchResults  ml-sm-3">
    <!-- RECHERCHE -->
    <?php
    include 'connectiondatabase.php';
    if(isset($_POST['search'])){
        $search=htmlspecialchars($_POST['search']);
        echo "<h2 class=\"fontfamily\">Search for " . $search . ":<h2>";
        $req = $bdd->query('SELECT * FROM entities');

        // Rechercher la recherche dans les Names de la database (les 2 mis en minuscules)
        while ($donnees = $req->fetch()){
            $searchlw=strtolower($search);
            $movieName=strtolower($donnees['Name']) ;
            $searchpos=strpos($movieName,$searchlw);
            if($searchpos!==FALSE){

                // Si account enfant, seuls les films enfant s'afficheront
                if($_SESSION['adult']==0){
                    if($donnees['adult']==0){
                        echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
                    }

                //Sinon tous les films s'affichent
                }else{echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";}
            }
        }
        $req->closeCursor();
    }
    ?>
    </section>
    <!-- JS scripts -->
    <!-- Own script -->
    <script src="script.js"> </script>
    <?php 
        include 'scriptinclude.php';
    ?>
    
    
</body>

</html><?php

?>