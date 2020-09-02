<?php
session_start();
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
    <title>Blurflix-Home</title>
</head>

<body>
    <?php 
    include 'header.php';
    ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <!-- titre en fonction du type de compte -->
            <?php
            include 'connectiondatabase.php';
            $req = $bdd->prepare('SELECT adult FROM users WHERE Username = :username');
            $req->execute(array(
                'username' =>$_SESSION['username']));
                $adult = $req->fetch();
                if ($adult['adult']==0){
                    echo '<h1 class="titre">Blurflix for <span class="kids">Kids</span></h1>';
                }else{echo '<h1 class="titre">Blurflix</h1>';};
            ?>
            
        </div>
    </div>
   
    <h2><a href="movies.php">Movies</a></h2>
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="CarouselMovies" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="col-10 offset-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row d-flex justify-content-around ">
                            <?php
                                $bdd = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                                $reponse = $bdd->query('SELECT Thumbnails , movies FROM entities WHERE movies="1" LIMIT 4');

                                while($donnee = $reponse->fetch()){
                                     echo '<div class="col-3">' . $donnee['Thumbnails'] . '</div>';
                                }
                            ?>                           
                            </div>
                        </div>

                        <div class="carousel-item">
                        <div class="row d-flex justify-content-around">

                            <?php
                                $bdd = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                                $reponse = $bdd->query('SELECT Thumbnails , movies FROM entities WHERE movies="1" ORDER BY Id DESC LIMIT 4');

                                while($donnee = $reponse->fetch()){
                                     echo '<div class="col-3">' . $donnee['Thumbnails'] . '</div>';
                                }
                            ?> 
                                
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#CarouselMovies" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                 <a class="carousel-control-next" href="#CarouselMovies" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>        
    </section>

    <h2 class="mt-5"><a href="tvshows.php">TV-Shows</a></h2>
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="CarouselTV-Shows" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="col-10 offset-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row d-flex justify-content-around ">
                            <?php
                                $bdd = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                                $reponse = $bdd->query('SELECT Thumbnails , movies FROM entities WHERE movies="0" LIMIT 4');

                                while($donnee = $reponse->fetch()){
                                     echo '<div class="col-3">' . $donnee['Thumbnails'] . '</div>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <div class="row d-flex justify-content-around">
                            <?php
                                $bdd = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                                $reponse = $bdd->query('SELECT Thumbnails , movies FROM entities WHERE movies="0" ORDER BY Id DESC LIMIT 4');

                                while($donnee = $reponse->fetch()){
                                     echo '<div class="col-3">' . $donnee['Thumbnails'] . '</div>';
                                }
                            ?>
                            </div>
                        </div>
                    </div> 
                </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#CarouselTV-Shows" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#CarouselTV-Shows" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php
    include 'footer.php'
    ?>
 
    <!-- JS scripts -->
    <?php 
        include 'scriptinclude.php';
    ?>
    
</body>

</html>