<?php
session_start();

if (basename($_SERVER['PHP_SELF']) == "index.php") {
    $index = true;
}

if (basename($_SERVER['PHP_SELF']) == "minecraft.php") {
    $minecraft = true;
    $dropdown = true;
}

if (basename($_SERVER['PHP_SELF']) == "fivem.php") {
    $fivem = true;
    $dropdown = true;
}

if (basename($_SERVER['PHP_SELF']) == "discord.php") {
    $discord = true;
    $dropdown2 = true;
}

if (basename($_SERVER['PHP_SELF']) == "register.php") {
    $register = true;
}

if (basename($_SERVER['PHP_SELF']) == "login.php") {
    $login = true;
}
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <?php require_once 'backend/config.php'; ?>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <title><?php echo $site_name; ?> | <?php echo basename($_SERVER['PHP_SELF'],'.php'); ?></title>

            <meta name="description" content="Cheap and affordable hosting for everyone on premium hardware!">
            <link href="<?php echo $base_url; ?>/img/logo2.png" rel="shortcut icon">
            <meta name="keywords" content="minecraft, minecraft hosting, minecraft server, minecraft server hosting, mc, mc hosting, mc server, mc server hosting, fivem, fivem hosting, fivem server, fivem server hosting, fivem txadmin, fivem server txadmin, fivem server hosting txadmin, fivem hosting txadmin, discord, discord hosting, discord server, discord server hosting, discord bot, discord bot server, discord bot hosting">
            <meta name="author" content="Dennis Overman">
            
            <link rel="stylesheet" href="<?php echo $base_url; ?>/css/style.css">
            <script src="https://kit.fontawesome.com/268c8277db.js" crossorigin="anonymous"></script>
        </head>
    <body>