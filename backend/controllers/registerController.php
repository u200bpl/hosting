<?php

session_start();

$email = $_POST['email'];

$password = $_POST['password'];
if (strlen($password) < 8) {
    $msg = "Password should be at least 8 characters long.";
    header("location: ../../register/register.php?msg=$msg");
    exit;
}

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $msg = "Password should include at least one upper case letter, one number, and one special character.";
    header("location: ../../register/register.php?msg=$msg");
    exit;
}

$passwordRetry = $_POST['passwordRetry'];
if ($password != $passwordRetry) {
    $msg = "Passwords do not match.";
    header("location: ../../register/register.php?msg=$msg");
    exit;
}
$hash = password_hash($password, PASSWORD_DEFAULT);

require_once '../conn.php';
$querye = "SELECT * FROM users WHERE email = :email";
$statemente = $conn->prepare($querye);
$statemente->execute([":email" => $email]);

if(!$statemente->rowCount() < 1) {
    $msg = "Email already exist.";
    header("location: ../../register/register.php?msg=$msg");
    exit;
}

$query = "INSERT INTO users (email, password) 
VALUES (:email, :password)";
$statement = $conn->prepare($query);
$statement->execute([
    ":email" => $email,
    ":password" => $hash,
]);

header("location: ../../index.php");
?>