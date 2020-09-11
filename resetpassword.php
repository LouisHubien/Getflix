<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$pdo = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', '');

if(isset($_POST['email'])) {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $email = htmlspecialchars($_POST['email']) ;
    $sql = "SELECT `id`, `email` FROM `users` WHERE `email` = :email";
    
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':email', $email);
    $statement->execute();

    $userInfo = $statement->fetch(PDO::FETCH_ASSOC);
    
    $userEmail = $userInfo['email'];
    $userId = $userInfo['id'];
    
    //Création du token
    $token = openssl_random_pseudo_bytes(16);
    $token = bin2hex($token);
    
    $insertSql = "INSERT INTO password_reset_request
                (user_id, date_requested, token)
                VALUES
                (:user_id, NOW(), :token)";
    

    $statement = $pdo->prepare($insertSql);
    $statement->execute(array(
        "user_id" => $userId,
        "token" => $token
    ));
    
    $passwordRequestId = $pdo->lastInsertId();
    
    

    //Vérification et permission de changement
    $verifyScript = ('rewritepassword.php');
    
    //Lien envoyé via mail
    $linkToSend = $verifyScript . '?uid=' . $userId . '&id=' . $passwordRequestId . '&t=' . $token;


    require 'vendor/autoload.php';
    try {
        //Server settings
        $mail = new PHPMailer(); 
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'blurflix.becode@gmail.com';
        $mail->Password   = 'NOTONGITHUB';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('blurflix.becode@gmail.com', 'Blurflix');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reset password Blurflix';
        $mail->Body    = 'You can reset your password with the link there <a href="http://blurflix.rf.gd/'.$linkToSend.'">'. $linkToSend.'</a>';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header('Location:forgottendone.php');

    exit();
}

header('Location:forgottenpassword.php');

exit();

?>