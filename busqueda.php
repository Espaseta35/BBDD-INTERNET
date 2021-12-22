<?php
//Inicio la sesión
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION['autentificado'] != "OK") {
//si no existe, envío a la página de autentificación
header("Location: login.php");
//ademas salgo de este script
} 
?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ICRC</title>
		<meta charset="UTF-8" />
		<meta name="title" content="ICRC" />
		<link rel="stylesheet" type="text/css" href="./css/styles.css" />
	</head>
	<body background="../img/fondo4.jpg">
    <header>
			<div class="wrapper">
				<div class="logo">
					<h1>INFO COCHES RC</h1>
					<div class="login-system">
						<a class="login-button" href="utils/salir.php">Cerrar Sesión</a>
					</div>
				</div>
				<nav>
						<ul>
						<li><a href="index.php">Inicio</a></li>
							<li><a href="HRC.php">Historia</a></li>
							<li><a href="somos.php">Tipo de Coches</a></li>
							<li><a href="tienda.php">Tienda</a></li>
							<li><a href="tarifas.php">Horario</a></li>
							<li><a href="Pilotos.xml">Pilotos</a></li>
                            <li><a href="admin.php">Administrar</a></li>
						</ul>
				</nav>
			</div>
		</header>







        <main id="cuerpo">
            <form method="POST" action="utils/buscar.php">
                Inserte el cliente:<input maxlength="30" size="30" name="cadena"><br>
                <input name="Enviar" value="Envía datos" type="submit" size="15">
            </form>
        </main>
    </body> 
</html