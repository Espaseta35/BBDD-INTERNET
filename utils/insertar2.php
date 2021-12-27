<?php
if (isset($_POST['producto']) && !empty($_POST['codigo']) && isset($_POST['imagen']) && !empty($_POST['precio'])) {
	$link = mysqli_connect("localhost", "root", "", "espasarc");
	mysqli_query($link, "INSERT INTO productos(producto,codigo,imagen,precio) VALUES ('{$_POST['producto']}','{$_POST['codigo']}','{$_POST['imagen']}','{$_POST['precio']}')");
	$my_error = mysqli_error($link);
	if (!empty($my_error)) {
		echo "Ha habido un error al insertar los valores. $my_error";
	} else {
		echo "Los datos han sido introducidos satisfactoriamente";
	}
} else {
	echo "Error, no ha introducido todos los datos";
}
header("Location: ../registroproductos.php")
?>