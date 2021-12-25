<?php
session_start();
if ($_SESSION['autentificado'] != "OK") {
    if ($_SESSION['autentificado'] != "OKK"){
        header("Location: login.php");
    }
}
?>