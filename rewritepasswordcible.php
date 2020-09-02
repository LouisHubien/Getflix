<?php

$pdo = new PDO('mysql:host=localhost;dbname=blurflix;charset=utf8', 'root', '');
 
//Informations du token
$userId = isset($_GET['uid']) ? trim($_GET['uid']) : '';
$token = isset($_GET['t']) ? trim($_GET['t']) : '';
$passwordRequestId = isset($_GET['id']) ? trim($_GET['id']) : '';
 
 
//Vérification si la requête est valable et correspond à une demande de reset dans la BDD
 
$sql = "
      SELECT id, user_id, date_requested 
      FROM password_reset_request
      WHERE 
        user_id = :user_id AND 
        token = :token AND 
        id = :id";
 
$statement = $pdo->prepare($sql);
$statement->execute(array(
    "user_id" => $userId,
    "id" => $passwordRequestId,
    "token" => $token
));
 
$requestInfo = $statement->fetch(PDO::FETCH_ASSOC);
 
if(empty($requestInfo)){
    echo 'Invalid request!';
    exit;
}
 

$_SESSION['user_id_reset_pass'] = $userId;
 
//Aller au form
header('Location: rewritepassword.php');
exit;

?>