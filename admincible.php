<?php
include 'connectiondatabase.php';

//Upload l'image
if (isset($_FILES['thumbnail']) AND $_FILES['thumbnail']['error'] == 0)
{
    $infosfichier = pathinfo($_FILES['thumbnail']['name']);
    $extension_upload = $infosfichier['extension'];
    if($extension_upload='jpg'){
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'thumbnail/' . basename($_FILES['thumbnail']['name']));
    }
};

//Ajoute le film dans la database
if(isset($_POST['title'],$_POST['thumbnailname'],$_POST['preview'],$_POST['category'],$_POST['movies'],$_POST['adult'])){
    $title=htmlspecialchars($_POST['title']);
    $thumbnailname="<img src=\"thumbnail/" . htmlspecialchars($_POST['thumbnailname']) . ".jpg\" alt=\"" . htmlspecialchars($_POST['thumbnailname']) . "\">";
    $preview="<iframe width=\"715\" height=\"402\" src=\"" . htmlspecialchars($_POST['preview']) . "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    $category=htmlspecialchars($_POST['category']);
    $movies=htmlspecialchars($_POST['movies']);
    $adult=htmlspecialchars($_POST['adult']);
    
    $req = $bdd->prepare('INSERT INTO entities(Name, Thumbnails, Preview, CategoryId, movies, adult) VALUES(:title, :thumbnailname, :preview, :category, :movies, :adult)');
    $req->execute(array(
        'title' => $title,
        'thumbnailname' => $thumbnailname,
        'preview' => $preview,
        'category' => $category,
        'movies' => $movies,
        'adult' => $adult,
    ));
    $_SESSION['confirmAdd']=array("The video has been added to the database.");
    echo $title, $thumbnailname, $preview, $category, $movies, $adult;
    header('Location:admin.php');
}

//Efface une entities
if(isset($_GET['titre'])){
$title=$_GET['titre'];
$req = $bdd->prepare('DELETE FROM entities WHERE Name=:name');
$req->execute(array(
	'name' => $title,
	));
header('Location:admin.php');
};

//Efface un user
if(isset($_GET['user'])){
    $user=$_GET['user'];
    $req = $bdd->prepare('DELETE FROM users WHERE Username=:user');
    $req->execute(array(
	'user' => $user,
	));
    header('Location:admin.php');
    };
?>