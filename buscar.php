<?php
if (!isset($_POST['cadena'])) {
      echo "Debe especificar una cadena a bucar";
      exit;
}
$link = mysqli_connect("localhost", "root", "", "ejercicio7"); // es la contraseña;
$result = mysqli_query($link, "SELECT * FROM datos WHERE nombre LIKE '%{$_POST['cadena']}%' ORDER BY nombre");
if ($row = mysqli_fetch_array($result)) {
      echo "<table border = '1'> \n";
      //Mostramos los nombres de las tablas 
      echo "<tr> \n";
      while ($field = mysqli_fetch_field($result)) {
            echo "<td>$field->name</td> \n";
      }
      echo "</tr> \n";
      do {
            echo "<tr> \n";
            echo "<td>" . $row["id"] . "</td> \n";
            echo "<td>" . $row["nombre"] . "</td> \n";
            echo "<td>" . $row["apellido"] . "</td> \n";
            echo "<td>" . $row["deporte"] . "</td> \n";
            echo "<td>" . $row["sexo"] . "</td> \n";
            echo "<td>" . $row["conducir"] . "</td> \n";
            echo "<td>" . $row["aficiones"] . "</td> \n";

            echo "</tr> \n";
      } while ($row = mysqli_fetch_array($result));
      echo "</table> \n";
} else {
      echo "¡ No se ha encontrado ningún registro !";
}
?>
<p>Volver al inicio: <a href="tarea8.html"> INICIO</a>