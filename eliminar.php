<?php 
if (!isset($_POST['cadena'])){ 
      echo "Debe especificar una cadena a bucar"; 
      exit; 
} 
<link rel="stylesheet" type="text/css" href="./css/table.css" />
<div class="login-system">
		<a class="login-button" href="utils/salir.php">Cerrar Sesión</a>
</div>
$link = mysqli_connect("localhost", "root", "", "espasarc"); 
$result = mysqli_query($link, "DELETE FROM datos WHERE nombre LIKE '%{$_POST['cadena']}%' ORDER BY nombre"); 
$result2 = mysqli_query($link,"SELECT id,nombre,apellidos,correo,contraseña,admin FROM datos"); 
//Creamos  la tabla
echo "<table> \n"; 
//incluimos los nombres de los campos
echo "<tr class='red'><th>id</td><td>Nombre</th><th>Apellido </th><th>Correo </th><th> Contraseña </th><th > Admin</th></tr> \n"; 
//Incluimos los resultados de la búsqueda

while ($row = mysqli_fetch_row($resul1)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>\n"; 
} 
echo "</table> \n"; 
?> 
