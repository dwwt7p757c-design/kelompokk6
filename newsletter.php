<?php
require __DIR__.'/bootstrap.php';if($_SERVER['REQUEST_METHOD']!=='POST'){http_response_code(405);exit;}csrf_check();$email=filter_var($_POST['email']??'',FILTER_VALIDATE_EMAIL);if($email){$q=$pdo->prepare('INSERT IGNORE INTO newsletter_subscribers(email) VALUES(?)');$q->execute([$email]);}redirect('index.php');
