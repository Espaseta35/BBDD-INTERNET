
<?php 
if (!isset($_POST['cadena'])){ 
      echo "Debe especificar una cadena a bucar"; 
      exit; 
} 
$link = mysqli_connect("localhost", "root", "", "espasarc"); 
$result = mysqli_query($link, "DELETE FROM datos WHERE nombre LIKE '%{$_POST['cadena']}%' ORDER BY nombre"); 
$result2 = mysqli_query($link,"SELECT id,nombre,apellidos,correo,contraseña,admin FROM datos"); 
header("Location: ./borrar.php");
?> 
