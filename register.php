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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assetsCSS/indexstyle.css">
     <!-- Favicon -->
     <link rel="icon" type="image/png" href="/assets/favicon.png" />
    <title>Sign Up</title>
  </head>

  <body>
    <section class="container-fluid flexboxtest">
      <section class="row">
        <div class="col-12">
          <h1>BlurFlix</h1>
        </div>
      </section>
      
      <section class="row page">
        <div class="col-12">

        <form class="form-container" action="registercible.php" method="post">
        
        <!-- Message d'erreur-->
        <p>
        <?php
        include 'connectiondatabase.php';
        if(isset($_SESSION['errorregister'])){
          print_r($_SESSION['errorregister'][0]);
          unset($_SESSION['errorregister']);
        }
        ?>
        </p> 

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="exemple@mail.com" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="password1234" name="password" required>
            </div>
            <div class="form-group">
              <label for="passwordconfirmation">Confirm your password</label>
              <input type="password" class="form-control" id="passwordconfirmation" placeholder="password1234" name="passwordconfirmation" required>
            </div>
              <p>Are you older than 12? <p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="yes"  name="adult" value="1" required>
              <label class="form-check-label" for="yes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio"  id="no"  name="adult" value="0"> 
              <label class="form-check-label" for="no">No</label>
            </div>
            <input type="submit" value="Sign Up" class="btn btn-block buttonindex">
            
          </form>
        
        </div>
      </section>

      <!-- FOOTER -->
      <section class="container-fluid paddingfix ">
        <?php 
        include 'footer.php';
        ?>  
      </section>
    </section>
  </body>
</html>