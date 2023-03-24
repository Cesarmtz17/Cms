<?php require './resources/php/app_top.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS</title>
    <link rel="stylesheet" href="./resources/css/framework/semantic/semantic.min.css">
    <link rel="stylesheet" href="./resources/css/main.css">
</head>
<body>

    <?php require "./views/nav/main_nav.php"; ?>
    <?php 
        if(!isset($_GET['section'])){
            require 'views/home.php';
        }
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="./resources/css/framework/semantic/semantic.min.js"></script>

</body>
</html>