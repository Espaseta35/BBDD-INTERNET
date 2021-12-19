<?php
// continuamos con la sesión
session_start();
$_SESSION = array();
session_destroy();
?>
<html>
<head><title>SALIR</title></head>
<body>
Gracias por su visita <br><br>
<a href="login.php"> Entrar de nuevo en la zona privada</a>
</body>
</html>