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
        <h1 class="fontfamily">TV-Shows</h1>
        <div class="dropdown ml-3 mb-3">
            <a class="btn btngenres dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Genres
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item text-dark" href="tvshows.php?genre=action">Action & Adventure</a>
                <a class="dropdown-item text-dark" href="tvshows.php?genre=comedies">Comedies</a>
                <a class="dropdown-item text-dark" href="tvshows.php?genre=drama">Drama</a>
                <a class="dropdown-item text-dark" href="tvshows.php?genre=horror">Horror</a>
                <a class="dropdown-item text-dark" href="tvshows.php?genre=romantic">Romantic</a>
                <a class="dropdown-item text-dark" href="tvshows.php?genre=scififantasy">Sci-Fi & Fantasy</a>
                <a class="dropdown-item text-dark" href="tvshows.php?genre=thrillers">Thrillers</a>
            </div>
        </div>
        <section class="">
        <?php include 'filtretvshow.php'?>
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