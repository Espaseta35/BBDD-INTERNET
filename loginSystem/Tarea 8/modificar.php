
<?php
// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
if(isset($_POST['nombre']) ) {
// Si entramos es que todo se ha realizado correctamente y conectamos con la base de datos club de mysql
$link = mysqli_connect("localhost","root","","ejercicio7");
// Con esta sentencia SQL insertaremos los datos en la base de datos
mysqli_query($link,"UPDATE datos SET nombre='{$_POST['nombre']}', apellido='{$_POST['apellido']}', deporte='{$_POST['deporte']}', sexo='{$_POST['sexo']}', conducir='{$_POST['conducir']}' , aficiones='{$_POST['aficiones']}'
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


$link = mysqli_connect("localhost", "root", "","ejercicio7"); 
$resul1 = mysqli_query($link,"SELECT id,nombre,apellido,deporte,sexo,conducir,aficiones FROM datos"); 
//Creamos  la tabla
echo "<table border = '1'> \n"; 
//incluimos los nombres de los campos
echo "<tr><td>id</td><td>Nombre</td><td>apellido </td><td>deporte </td><td>sexo </td><td>conducir </td><td>aficiones</td></tr> \n"; 
//Incluimos los resultados de la búsqueda
while ($row = mysqli_fetch_row($resul1)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>\n"; 
} 
echo "</table> \n"; 
?> 
<p>Volver al inicio:    <a href="tarea8.html">  INICIO</a>