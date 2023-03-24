<?php
    require '../functions.php';

    $admin = new Admin_Actions();

    //login
    $login = $admin->logIn($_POST['usuario'], $_POST['pass']);

    if($login){
        //Inicio sesion
        $_SESSION['admin'] = $_POST['usuario'];
        echo "true";
    }else{
        echo "false";
    }

?>