
<?php
// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
if(isset($_POST['nombre']) ) {
// Si entramos es que todo se ha realizado correctamente y conectamos con la base de datos club de mysql
$link = mysqli_connect("localhost","root","","espasarc");
// Con esta sentencia SQL insertaremos los datos en la base de datos
mysqli_query($link,"UPDATE datos SET nombre='{$_POST['nombre']}', apellidos='{$_POST['apellidos']}', Correo='{$_POST['correo']}', contraseña='{$_POST['contraseña']}', admin='{$_POST['admin']}'
WHERE id='{$_POST['id']}'");
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

header("Location: ../fcambiar.php");
