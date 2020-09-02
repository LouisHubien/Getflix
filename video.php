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
    <title>Blurflix-Movies</title>
</head>

<body class="text-white">
    <?php 
    include 'header.php';
    ?>
        <section class="container videocontainer">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <!-- titre de la vidéo -->
                    <?php
                    include 'connectiondatabase.php';
                    if(isset($_GET['titre'])){
                        echo '<h1 class="fontfamily">'. $_GET['titre'] . '</h1>';
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                <?php
                include 'connectiondatabase.php';
                    if(isset($_GET['titre'])){
                        $req = $bdd->prepare('SELECT * FROM entities WHERE Name = :name');
                        $req->execute(array('name' => $_GET['titre']));
                        $resultat = $req->fetch();
                        echo $resultat['Preview'];
                        $req->closeCursor();
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <h2>Commentaires</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 border">
                    <h1 class="fontfamily"></h1>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <section class="fixed-bottom">
        <?php
        include 'footer.php'
        ?>
    </section>
 
    <!-- JS scripts -->
    <?php 
        include 'scriptinclude.php';
    ?>
    
    
</body>

</html>