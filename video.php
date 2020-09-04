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
                <div class="col-12 ">
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
                <div class="col-12 iframecontainer">
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
<<<<<<< HEAD
                <div class="col-12 col-md-8 offset-md-2">
                    <h2>Commentaires</h2>                    
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 ">
                <div class="panel panel-info">
                <div class="panel-body">            
                <?php
        /* ------------------------COMMENT  SECTION ----------------------- */
        include 'connectiondatabase.php';
        $req = $bdd->prepare('SELECT * FROM comments WHERE videoId=:videoId ORDER BY date_creation DESC');
        $req->execute(array(
            'entities' => $_GET['id'],
            ));   
        
            while ($data = $req->fetch()) 
            {
            echo '<p>' . $data['author'] . ' : </strong>' . $data['content'] . '</p>';
        }
        $req->closeCursor();
    ?>       
        <form class="form-inline" method= "post" action="comment.php">
            <!-- <input type='hidden' name='User_id'> -->
            <!-- <input type='hidden' name='Date' value= " <?php echo date('Y-m-d H:i:s') ?>"> -->
            <textarea placeholder="Write your comment here!" class="pb-cmnt-textarea" name="comment"></textarea>
            <button class="button pull-right" type="button">Comment</button>
            <input type="submit" value="Comment" class="btn btn-block buttonindex">
        </form>
=======
                <div class="col-12 ">
                    <h2>Commentaires</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
>>>>>>> acf62fe7bc19d65c2fe256846d812f11c9278fa7
                </div>
            </div>
                    
            </div>
            </div>
        </section>

        <!-- Footer -->
<<<<<<< HEAD
        
        <?php
        include 'footer.php'
        ?>
    
=======
        <?php
        include 'footer.php'
        ?>
>>>>>>> acf62fe7bc19d65c2fe256846d812f11c9278fa7
 
    <!-- JS scripts -->
    <?php 
        include 'scriptinclude.php';
    ?>
    
    
</body>

</html>