
<?php
include "seguridad1.php";
$nombreusuario= $_SESSION['nombre'];

// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
if(isset($_POST['nombre']) ) {
// Si entramos es que todo se ha realizado correctamente y conectamos con la base de datos club de mysql
$link = mysqli_connect("localhost","root","","espasarc");

// Con esta sentencia SQL insertaremos los datos en la base de datos
mysqli_query($link,"UPDATE compra SET cliente='{$_POST['cliente']}', producto='{$_POST['producto']}', cantidad='{$_POST['cantidad']}', npedido='{$_POST['npedido']}'");
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

header("Location: ../fcambiarcarrito.php");
