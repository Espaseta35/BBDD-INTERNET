<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ICRC</title>
		<meta charset="UTF-8" />
		<meta name="title" content="ICRC" />
		<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	</head>
	<body background="../img/fondo4.jpg">
    <header>
			<div class="wrapper">
				<div class="logo">
					<h1>INFO COCHES RC</h1>
					<div class="login-system">
						<a class="login-button" href="login.php">Log In</a>
						<a class="registration-button" href="registro.php"
							>Registrarse</a
						>
					</div>
				</div>
				<nav>
						<ul>
						<li><a href="index.php">Inicio</a></li>
							<li><a href="HRC.php">Historia</a></li>
							<li><a href="somos.php">Tipo de Coches</a></li>
							<li>
								<a
									href="https://espasarcshop.com/"
									target="_blank"
									>Tienda</a
								>
							</li>
							<li><a href="tarifas.php">Horario</a></li>
							<li><a href="Pilotos.xml">Pilotos</a></li>
                            <li><a href="admin.php">Administrar</a></li>
						</ul>
				</nav>
			</div>
		</header>
            <div class="horario">
<?php
if (!isset($_POST['cadena'])) {
      echo "Debe especificar una cadena a bucar";
      exit;
}
$link = mysqli_connect("localhost", "root", "", "espasarc"); // es la contraseña;
$result = mysqli_query($link, "SELECT * FROM datos WHERE nombre LIKE '%{$_POST['cadena']}%' ORDER BY nombre");
if ($row = mysqli_fetch_array($result)) {
      echo "<table border = '1'> \n";
      //Mostramos los nombres de las tablas 
      echo "<tr> \n";
      while ($field = mysqli_fetch_field($result)) {
            echo "<td>$field->name</td> \n";
      }
      echo "</tr> \n";

      do {
            echo "<tr> \n";
            echo "<td>" . $row["id"] . "</td> \n";
            echo "<td>" . $row["nombre"] . "</td> \n";
            echo "<td>" . $row["apellidos"] . "</td> \n";
            echo "<td>" . $row["correo"] . "</td> \n";
            echo "<td>" . $row["contraseña"] . "</td> \n";
            echo "<td>" . $row["admin"] . "</td> \n";

            echo "</tr> \n";
      } while ($row = mysqli_fetch_array($result));
      echo "</table> \n";
} else {
      echo "¡ No se ha encontrado ningún registro !";
}
?>
            </div>