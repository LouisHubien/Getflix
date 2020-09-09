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
    <meta name="keywords" content="HTML, CSS, JS, Bootstrap  CDN, Php, Mysql">
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
                        $videoId=$resultat['Id'];
                        echo $resultat['Preview'];
                        $req->closeCursor();
                    }
                    ?>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="font">Commentaires</h2>                    
                </div>
            </div>
            <div class="row ml-12">
                <div class="col-12">           
                    <?php
                    /* ------------------------COMMENT  SECTION ----------------------- */
                    include 'connectiondatabase.php';
                    $title=$_GET['titre'];
                    $req = $bdd->prepare('SELECT * FROM comments WHERE videoId=:videoId');
                    $req->execute(array('videoId' => $videoId));
                    while ($donnees = $req->fetch()) 
                    {
                        echo '<p>' . $donnees ['Username'] . ' : ' . $donnees ['Comment'] . '</p>';
                    }
                    $req->closeCursor();
                    ?>
                    <form method="post">
                        <label for="comment">Comment :</label>
                        <textarea class="form-control col-8 mb-1" id="comment" name="comment" rows="3" placeholder="Enter your comment here." required></textarea>
                        <input type="submit" value="Comment" class="btn buttoncomment">
                    </form>
                    <?php
                    if (isset($_POST['comment'])){
                        $req = $bdd->prepare('INSERT INTO comments (Comment, Username, videoId) VALUES (:content, :Username, :videoId)');
                        $req->execute(array(
                            'content' => $_POST['comment'],
                            'Username' => $_SESSION['username'],
                            'videoId' => $videoId,
                        ));
                        header('Location:video.php?titre=' . $title);
                        $req->closeCursor();
                    }
                    ?>
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