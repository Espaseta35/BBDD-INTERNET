<?php
// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
if(!isset($_POST['admin']))
{
	$_POST['admin']='No';
}

if(isset($_POST['nombre']) && !empty($_POST['apellidos']) && isset($_POST['correo']) && !empty($_POST['contraseña'])&& isset($_POST['admin']))
{
// Si entramos es que todo se ha realizado correctamente y conectamos con la base de datos club de mysql

//echo $name;
// echo $surname;
// echo $email;
// echo $password;

$link = mysqli_connect("localhost","root","","espasarc");

// Con esta sentencia SQL insertaremos los datos en la base de datos
mysqli_query($link,"INSERT INTO datos(nombre,apellidos,correo,contraseña,admin)
VALUES ('{$_POST['nombre']}','{$_POST['apellidos']}','{$_POST['correo']}','{$_POST['contraseña']}','{$_POST['admin']}')");

// Ahora comprobaremos que todo ha ido correctamente
$my_error = mysqli_error($link);
if (!empty($my_error)) {
	echo "Ha habido un error al insertar los valores. $my_error";
	} else {
		echo "Los datos han sido introducidos satisfactoriamente";
		}
	}
else {
echo "Error, no ha introducido todos los datos";
}
?>


