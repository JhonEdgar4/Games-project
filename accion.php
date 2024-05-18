<?php
#Inicailizacion de la sesion
session_start();


var_dump($_POST);

#Guardamos en variales de sesion el Email y la contrasena
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

#Redireccion al archivo index.php
header('Location:ingreso.php');
?>