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
            <div class="col-8 offset-1">
                <h2> Add a video</h2>
                <!-- Message de confirmation-->
                <p class="text-white">
                <?php
                include 'connectiondatabase.php';
                if(isset($_SESSION['confirmAdd'])){
                    print_r($_SESSION['confirmAdd'][0]);
                    unset($_SESSION['confirmAdd']);
                }
                ?>
                </p> 
                <form class="form-container" action="admincible.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="thumbnailname">Thumbnail's name</label>
                        <input type="text" class="form-control" id="thumbnailname" placeholder="Thumbnail's name" name="thumbnailname" required>
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail (.JPG 200x300px = thumbnail's name.jpg)</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                    </div>
                    <div class="form-group">
                        <label for="preview">Youtube link</label>
                        <input type="text" class="form-control" id="preview" placeholder="link" name="preview" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Choose a genre</label>
                        <select name="category" class="form-control" id="category">
                            <option value="1">Action/Aventure</option>
                            <option value="2">Comedy</option>
                            <option value="3">Drama</option>
                            <option value="4">Horror</option>
                            <option value="5">Romantic</option>
                            <option value="6">Sci-Fi & Fantasy</option>
                            <option value="7">Thrillers</option>
                        </select>
                    </div>
                    <p>Is this a movie or a TV-show? <p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="movie"  name="movies" value="1" required>
                        <label class="form-check-label" for="movie">Movie</label>
                    </div>
                    <div class="form-group form-check form-check-inline">
                        <input class="form-check-input" type="radio"  id="tvshow"  name="movies" value="0">
                        <label class="form-check-label" for="tvshow">TV-show</label>
                    </div>
                    <p>Is this a movie for kids ? <p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="adult"  name="adult" value="1" required>
                        <label class="form-check-label" for="adult">No</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  id="kid"  name="adult" value="0">
                        <label class="form-check-label" for="kid">Yes</label>
                    </div>
                    </br>
                    <input type="submit" value="Add" class="btn buttonconfirm text-white">
                </form>
            </div>
        </div>
        <div class='row mt-5'>
            <div class="col-8 offset-1">
                <h2> Delete a video</h2>
                <table style="width:100%" class="table text-white">
                <thead class="thead-light">
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Categorie</th>
                <th scope="col">Operation</th>
                </tr>
                </thead>
                <?php
                include 'connectiondatabase.php';
                $reponse = $bdd->query('SELECT * FROM entities ORDER BY Name');
                while ($donnees = $reponse->fetch())
                {
                    if($donnees['movies']==1 AND $donnees['adult']==1){
                    echo "<tr>
                    <td scope=\"row\"><a href=\"video.php?titre=" . $donnees['Name'] . "\">" . $donnees['Name'] ."</a></td>
                    <td>Movie</td>
                    <td>Adult</td>
                    <td><a href=\"admincible.php?titre=" . $donnees['Name'] . "\">Delete</a></td>
                    </tr>" ;
                    
                }elseif($donnees['movies']==1 AND $donnees['adult']==0){
                    echo "<tr>
                    <td scope=\"row\"><a href=\"video.php?titre=" . $donnees['Name'] . "\">" . $donnees['Name'] ."</a></td>
                    <td>Movie</td>
                    <td>Kid</td>
                    <td><a href=\"admincible.php?titre=" . $donnees['Name'] . "\">Delete</a></td>
                    </tr>" ;
                }elseif($donnees['movies']==0 AND $donnees['adult']==1){
                    echo "<tr>
                    <td scope=\"row\"><a href=\"video.php?titre=" . $donnees['Name'] . "\">". $donnees['Name'] ."</a></td>
                    <td>TV-Show</td>
                    <td>Adult</td>
                    <td><a href=\"admincible.php?titre=" . $donnees['Name'] . "\">Delete</a></td>
                    </tr>" ;
                }else{
                    echo "<tr>
                    <td scope=\"row\"><a href=\"video.php?titre=" . $donnees['Name'] . "\">". $donnees['Name'] ."</a></td>
                    <td>TV-Show</td>
                    <td>Kid</td>
                    <td><a href=\"admincible.php?titre=" . $donnees['Name'] . "\">Delete</a></td>
                    </tr>" ;
                }
                }$reponse->closeCursor();
                ?>
                </table>
            </div>
        </div>
        <div class='row mt-5'>
        <div class="col-8 offset-1">
                <h2> Manage the Users</h2>
                <table style="width:100%" class="table text-white">
                <thead class="thead-light">
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Account</th>
                <th scope="col">Rights</th>
                <th scope="col">Operation</th>
                </tr>
                </thead>
                <?php
                include 'connectiondatabase.php';
                $reponse = $bdd->query('SELECT * FROM users ORDER BY Username');
                while ($donnees = $reponse->fetch())
                {
                    if($donnees['Adult']==1 AND $donnees['Admin']==0 ){
                    echo "<tr>
                    <td scope=\"row\">" . $donnees['Username'] ."</td>
                    <td>Adult</td>
                    <td>none</td>
                    <td><a href=\"admincible.php?user=" . $donnees['Username'] . "\">Delete</a></td>
                    </tr>" ;
                    
                }elseif($donnees['Adult']==0 AND $donnees['Admin']==0){
                    echo "<tr>
                    <td scope=\"row\">" . $donnees['Username'] ."</td>
                    <td>Kid</td>
                    <td>none</td>
                    <td><a href=\"admincible.php?user=" . $donnees['Username'] . "\">Delete</a></td>
                    </tr>" ;
                }elseif($donnees['Adult']==1 AND $donnees['Admin']==1){
                    echo "<tr>
                    <td scope=\"row\">" . $donnees['Username'] ."</td>
                    <td>Adult</td>
                    <td>Admin</td>
                    <td><a href=\"admincible.php?user=" . $donnees['Username'] . "\">Delete</a></td>
                    </tr>" ;
                }else{
                    echo "<tr>
                    <td scope=\"row\">" . $donnees['Username'] ."</td>
                    <td>Kid</td>
                    <td>Admin</td>
                    <td><a href=\"admincible.php?user=" . $donnees['Username'] . "\">Delete</a></td>
                    </tr>" ;
                }
                }$reponse->closeCursor();
                ?>
                </table>
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