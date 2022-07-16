<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

require_once '../conn.php';
$query = "SELECT * FROM users WHERE email = :email";
$statement = $conn->prepare($query);
$statement->execute([":email" => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if($statement->rowCount() < 1) {
    $msg = "Email or password incorrect.";
    header("location: ../../login/login.php?msg=$msg");
    exit;
}

if(!password_verify($password, $user['password'])) {
    $msg = "Email or password incorrect.";
    header("location: ../../login/login.php?msg=$msg");
    exit;
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['user_roll'] = $user['userrol'];

header("location: ../../index.php");
?>