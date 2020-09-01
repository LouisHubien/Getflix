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
    <title>Manage Account</title>
</head>

<body>
    <?php 
    include 'header.php';
    ?>
    <section class="container-fluid flexaccount text-white">
        <div class='row'>
            <div class="col-12 offset-md-1">
                <h1 class="fontfamily">Manage your account</h1>
            </div>
        </div>
        <div class='row mt-5'>
            <div class="col-8 col-md-6 col-lg-4 offset-md-1">
                <h2> Change your username : "<?php echo $_SESSION['username'];?>"
                </h2>

                <!-- Message pour confirmer le changement d'username -->
                <p>
                <?php
                include 'connectiondatabase.php';
                if(isset($_SESSION['messageusername'])){
                    print_r($_SESSION['messageusername'][0]);
                    unset($_SESSION['messageusername']);
                }
                ?>
                </p> 
                <form class="form-container" action="manageaccountcible.php" method="post">
                    <div class="form-group ">
                        <label for="newusername">Choose a new username :</label>
                        <input id="newusername" name="newusername" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="newusernameconfirmation">Confirm your new username :</label>
                        <input id="newusernameconfirmation" name="newusernameconfirmation" type="text" class="form-control">
                    </div>
                    <input type="submit" value="Confirm" class="btn text-white buttonconfirm">
                </form>
            </div>
        </div>
        <div class='row mt-5'>
            <div class="col-8 col-md-6 col-lg-4 offset-md-1">
                <h2> Change your password :</h2>

                <!-- Message pour confirmer le changement de mot de passe -->
                <p>
                <?php
                include 'connectiondatabase.php';
                if(isset($_SESSION['messagepassword'])){
                    print_r($_SESSION['messagepassword'][0]);
                    unset($_SESSION['messagepassword']);
                }
                ?>
                </p> 
                <form class="form-container" action="manageaccountcible.php" method="post">
                    <div class="form-group">
                        <label for="currentpassword">Enter your current password :</label>
                        <input id="currentpassword" name="currentpassword" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="newpassword">Choose your new password :</label>
                        <input id="newpassword" name="newpassword" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="newpasswordconfirmation">Confirm your new password :</label>
                        <input id="newpasswordconfirmation" name="newpasswordconfirmation" type="text" class="form-control">
                    </div>
                    <input type="submit" value="Confirm" class="btn text-white buttonconfirm">
                </form>
            </div>
        </div>
        <div class='row mt-5'>
            <div class="col-12 col-md-7 col-lg-5 offset-md-1">
                <h2> Change your account restrictions :</h2>

                <!-- Message pour dire quel account c'est et confirmer le changement -->
                <p>                
                <?php
                include 'connectiondatabase.php';
                if(isset($_SESSION['messageadult'])){
                    print_r($_SESSION['messageadult'][0]);
                    unset($_SESSION['messageadult']);
                }else{
                    if($_SESSION['adult']==0){
                        $accountstatus=" a kid.";
                    }else{
                        $accountstatus=" an adult";
                    }
                        echo "Your account is currently an account for <span class=\"font-italic\">" .$accountstatus ."<span>" ; 
                }
                ?>
                </p> 
                
                <form class="form-container" action="manageaccountcible.php" method="post">
                    <p>Is this a kid account ?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="yes"  name="newadult" value="0">
                        <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  id="no"  name="newadult" value="1">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                    </br>
                    <input type="submit" value="Confirm" class="btn text-white buttonconfirm">
                </form>
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