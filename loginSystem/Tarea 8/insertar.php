<?php
// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
if(!isset($_POST['conducir'])){$_POST['conducir']='no conduce';}
if(isset($_POST['nombre']) && !empty($_POST['apellido']) && isset($_POST['correo']) && !empty($_POST['sexo'])&& isset($_POST['conducir']) && !empty($_POST['aficiones'])) {
// Si entramos es que todo se ha realizado correctamente y conectamos con la base de datos club de mysql

$link = mysqli_connect("localhost","root","","ejercicio7");
// Con esta sentencia SQL insertaremos los datos en la base de datos
mysqli_query($link,"INSERT INTO datos(nombre,apellido,deporte,sexo,conducir,aficiones)
VALUES ('{$_POST['nombre']}','{$_POST['apellido']}','{$_POST['deporte']}','{$_POST['sexo']}','{$_POST['conducir']}','{$_POST['aficiones']}')");
// Ahora comprobaremos que todo ha ido correctamente
$my_error = mysqli_error($link);
if(!empty($my_error)) {
	echo "Ha habido un error al insertar los valores. $my_error";
	} else {
		echo "Los datos han sido introducidos satisfactoriamente";
		}
	}
else {
echo "Error, no ha introducido todos los datos";
}
?>
<p>Volver al inicio:    <a href="tarea8.html">  INICIO</a>