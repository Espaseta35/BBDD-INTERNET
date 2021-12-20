<?php
// Conexión con la base de datos
$link = mysqli_connect("localhost", "root", "", "espasarc");
$usu = $_POST['nombre'];
$pwd = $_POST['contraseña'];
$sql = "select * from datos where nombre='$usu' and contraseña='$pwd' and admin='Si' ";
$sql2 = "select * from datos where nombre='$usu' and contraseña='$pwd' and admin='No' ";
$resultado = mysqli_query($link, $sql);
$resultado2 = mysqli_query($link, $sql2);
if (mysqli_num_rows($resultado) != 0) {
    session_start();
    $_SESSION['nombre'] = $usu;
    $_SESSION['autentificado'] = "OK";
    header("Location: ../admin.php");
} elseif (mysqli_num_rows($resultado2) != 0) {
    session_start();
    $_SESSION['nombre'] = $usu;
    $_SESSION['autentificado'] = "OK";
    header("Location: ../tienda.php");
} else {
    header("Location: ../login.php");
}
mysql_free_result($resultado);
mysql_close($link);
?>