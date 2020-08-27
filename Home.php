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
    <title>Home</title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">GetFlix</h1>
            <!-- Search form -->
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </div>
    </div>
<!-- CARD SYSTEM------------------------------------------------------------ -->
   <!--  movies filter -->
    <h2><a href="">Movies</a></h2>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="assets/Avenger.jpg" alt="Avenger" />
                <h3>Title movie</h3>
                <p>Film description</p>

            </div>

            <div class="card">
                <img src="assets/Avenger.jpg" alt="avenger" />
                <h3>Title movie</h3>
                <p>Film description</p>

            </div>

            <div class="card">
                <img src="assets/Avenger.jpg" alt="avenger" />
                <h3>Title movie</h3>
                <p>Film description</p>

            </div>

        </div>
    </div>

    <!-- series-->

    <h2><a href="">Series</a></h2>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="assets/Avenger.jpg" alt="" />
                <h3>Title movie</h3>
                <p>Film description</p>

            </div>

            <div class="card">
                <img src="assets/Avenger.jpg" alt="" />
                <h3>Title movie</h3>
                <p>Film description</p>

            </div>

            <div class="card">
                <img src="assets/Avenger.jpg" alt="" />
                <h3>Title movie</h3>
                <p>Film description</p>

            </div>

        </div>
    </div>
    <!-- Most liked -->

    <h2><a href="">Most liked</a></h2>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="assets/Avenger.jpg" alt="" />
                <h3>Title movie</h3>
                <p>Film description</p>

            </div>

            <div class="card">
                <img src="assets/Avenger.jpg" alt="" />
                <h3>Title movie</h3>
                <p>Film description</p>

            </div>

            <div class="card">
                <img src="assets/Avenger.jpg" alt="" />
                <h3>Title movie</h3>
                <p>Film description</p>

            </div>

        </div>
    </div>

    
<!-- ------------------------------------------------------------- -->
    <?php
    include 'footer.php'
    ?>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>