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
    <title>Sign in</title>
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
            <form class="form-container" action="indexcible.php" method="post">
              <p class="text-white">You have entered an invalid username or password, please try again.</p>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="password1234" name="password" required>
            </div>
            <input type="submit" value="Sign In" class="btn btn-block buttonindex">
            <p>First time on BlurFlix? <a href="register.php">Register here</a></p>
            <p>Did you forget your password? <a href="forgottenpassword.php">Click here</a></p>
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