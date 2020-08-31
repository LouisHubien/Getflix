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
                <form>
                    <h1><input id="searchInput" type="search" Placeholder ="Search..."></h1>
                </form>
            </div>
        </div>
    <h2 id="searchTitle" class="text-white fontfamily small text-left"></h2>
    </section>
    
    <section class="searchResults"></section>


    <!-- JS scripts -->
    <?php 
        include 'scriptinclude.php';
    ?>
    
    
</body>

</html><?php

?>