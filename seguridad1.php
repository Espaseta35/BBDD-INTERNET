<?php
//Inicio la sesión
session_start();

if ($_SESSION['autentificado'] != "OK") {
    header("Location: login.php");
}
?>