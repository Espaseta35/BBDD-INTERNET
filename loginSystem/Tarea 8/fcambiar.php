

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

<br><br>
Elige el nombre del usuario que quiero modificar y cambia los datos:
<br>
<form method="post" action="modificar.php" name="f1">
ID: <input maxlength="30" size="40" name="id"><br>
<br>
Nombre: <input maxlength="30" size="40" name="nombre"><br>
<br>
Apellido: <input maxlength="30" size="30" name="apellido"><br>
<br>
Deporte: <input maxlength="15" size="20" name="deporte"><br>
<br>
Sexo: <input maxlength="40" size="40" name="sexo"><br>
<br>
Conducir: <input maxlength="15" size="20" name="conducir"><br>
<br>
Aficiones: <input maxlength="40" size="40" name="aficiones"><br>
<br>

 
<input name="Borrar" value="Vaciar campos" type="reset">&nbsp;&nbsp;&nbsp; <input name="Enviar" value="Modificar datos" type="submit"><br>
</form>
<p>Volver al inicio:    <a href="tarea8.html">  INICIO</a>