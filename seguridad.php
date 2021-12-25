<?php
session_start();
if ($_SESSION['autentificado'] != "OK") {
header("Location: login.php");
}
if ($_SESSION['autentificado'] != "OKK"){
    header("Location: login.php");
} 
?>