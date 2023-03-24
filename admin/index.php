<?php require '../resources/php/app_top_admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>administrador</title>
    <link rel="stylesheet" href="../resources/css/framework/semantic/semantic.min.css">
    <link rel="stylesheet" href="../resources/css/main.css">
</head>
<body>

    <?php 
        if(
            isset($_SESSION['admin'])
            ){
            require '../views/nav/main_nav.php';
        }
    ?>
    <?php 
        if(
            !isset($_GET['admin'])
        ){
            require '../views/admin/home.php';
        }
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="../resources/css/framework/semantic/semantic.min.js"></script>
<script src="../resources/js/admin.js"> </script>


</body>
</html>