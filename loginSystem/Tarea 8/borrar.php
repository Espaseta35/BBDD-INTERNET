 <?php 

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
<br>
<form method="POST" action="eliminar.php">
Elimina por nombre:<input maxlength="30" size="30" name="cadena"><br>
<input name="Enviar" value="Elimina datos" type="submit">
</form>
<p>Volver al inicio:    <a href="tarea8.html">  INICIO</a>