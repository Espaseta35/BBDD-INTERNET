<?php
// Conexión con la base de datos
$link = mysqli_connect("localhost", "root", "", "espasarc");
$usu = $_POST['user'];
$pwd = $_POST['key'];
$sql = "select * from usuarios where usuario='$usu' and clave='$pwd' and admin='si' ";
$sql2 = "select * from usuarios where usuario='$usu' and clave='$pwd' and admin='no' ";
$resultado = mysqli_query($link, $sql);
$resultado2 = mysqli_query($link, $sql2);
if (mysqli_num_rows($resultado) != 0) {
    session_start();
    $_SESSION['nombre'] = $usu;
    $_SESSION['autentificado'] = "OK";




    header("Location: zonavip.php");
} elseif (mysqli_num_rows($resultado2) != 0) {
    session_start();
    $_SESSION['nombre'] = $usu;
    $_SESSION['autentificado'] = "OK";



    header("Location: zona.php");
} else {
    header("Location: login.php");
}
mysql_free_result($resultado);
mysql_close($link);
