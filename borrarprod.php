<?php include "seguridad1.php";
$nombreusuario= $_SESSION['nombre'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./css/table.css" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <h1>INFO COCHES RC</h1>
                <div class="login-system">
						<a class="login-button" href="utils/salir.php">Cerrar Sesión</a>
					</div>
            </div>
            <nav height="100%">
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
 <?php

$link = mysqli_connect("localhost", "root", "","espasarc"); 
$resul1 = mysqli_query($link,"SELECT producto,codigo,imagen,precio FROM productos"); 
//Creamos  la tabla
echo "<table> \n"; 
//incluimos los nombres de los campos
echo "<tr class='red'><th>Producto</th><th>Referencia</th><th>Imagen</th><th>Precio</th><th>  </th></tr> \n"; 
while ($row = mysqli_fetch_row($resul1)){ 
       echo "<tr>
	   		<td>$row[0]</td>
	   		<td>$row[1]</td>
			<td> <img width='120' height='120' src='$row[2]'> </td>
			<td>$row[3]</td>
			<td>Añadir </td>
			</tr>\n"; 
}
echo "</table> \n"; 
?> 

<br>
<form method="POST" action="eliminarprod.php">
Elimina por código:<input maxlength="30" size="30" name="cadena"><br>
<input name="Enviar" value="Elimina datos" type="submit">
</form>
</main>