<?php include "../seguridad1.php";
$nombreusuario= $_SESSION['nombre'];
if (isset($_POST['prod']) && !empty($_POST['cantidad'])) {
	$link = mysqli_connect("localhost", "root", "", "espasarc");
	mysqli_query($link, "INSERT INTO compra (cliente, producto, cantidad) VALUES ('$nombreusuario','{$_POST['prod']}','{$_POST['cantidad']}')");
	$my_error = mysqli_error($link);
	if (!empty($my_error)) {
		echo "Ha habido un error al insertar los valores. $my_error";
	} else {
		echo "Los datos han sido introducidos satisfactoriamente";
	}
} else {
	echo "Error, no ha introducido todos los datos";
}
header("Location: ../tienda.php")
?>
