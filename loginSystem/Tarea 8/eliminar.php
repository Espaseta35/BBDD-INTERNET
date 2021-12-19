<?php 
if (!isset($_POST['cadena'])){ 
      echo "Debe especificar una cadena a bucar"; 
      exit; 
} 
$link = mysqli_connect("localhost", "root", "", "ejercicio7"); 
$result = mysqli_query($link, "DELETE FROM datos WHERE nombre LIKE '%{$_POST['cadena']}%' ORDER BY nombre"); 
$result2 = mysqli_query($link,"SELECT id,nombre,apellido,deporte,sexo,conducir,aficiones FROM datos"); 
//Creamos  la tabla
echo "<table border = '1'> \n"; 
//incluimos los nombres de los campos
echo "<tr><td>id</td><td>Nombre</td><td>apellido </td><td>deporte </td><td>sexo </td><td>conducir </td><td>aficiones</td></tr> \n"; 
//Incluimos los resultados de la búsqueda
while ($row = mysqli_fetch_row($result2)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>\n"; 
} 
echo "</table> \n"; 
?> 
<p>Volver al inicio:    <a href="tarea8.html">  INICIO</a>