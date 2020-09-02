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

        <form class="form-container" action="changepasswordreset.php" method="post">
        
        <!-- Message d'erreur-->

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="exemple@mail.com" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">New Password</label>
              <input type="password" class="form-control" id="password" placeholder="password1234" name="password" required>
            </div>
            <div class="form-group">
              <label for="passwordconfirmation">Confirm your password</label>
              <input type="password" class="form-control" id="passwordconfirmation" placeholder="password1234" name="passwordconfirmation" required>
            </div>
            <input type="submit" value="Confirm" class="btn btn-block buttonindex">
            
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