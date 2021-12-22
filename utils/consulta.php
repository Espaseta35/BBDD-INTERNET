
 <?php 
include "seguridad1.php";
$nombreusuario= $_SESSION['nombre'];

$link = mysqli_connect("localhost", "root", "","espasarc"); 
$resul1 = mysqli_query($link,"SELECT id,nombre,apellidos,correo,contraseña,admin FROM datos"); 
//Creamos  la tabla
echo "<table border = '1'> \n"; 
//incluimos los nombres de los campos
echo "<tr><td>id</td><td>Nombre</td><td>Apellido </td><td>Correo </td><td> Contraseña </td><td > Admin</td></tr> \n"; 
//Incluimos los resultados de la búsqueda
while ($row = mysqli_fetch_row($resul1)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>\n"; 
} 
echo "</table> \n"; 
?> 


