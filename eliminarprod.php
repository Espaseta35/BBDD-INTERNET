
<?php 
if (!isset($_POST['cadena'])){ 
      echo "Debe especificar una cadena a bucar"; 
      exit; 
} 
$link = mysqli_connect("localhost", "root", "", "espasarc"); 
$result = mysqli_query($link, "DELETE FROM productos WHERE codigo LIKE '%{$_POST['cadena']}%' ORDER BY codigo"); 
$result2 = mysqli_query($link,"SELECT producto,codigo,imagen,precio FROM productos"); 
header("Location: ./borrarprod.php");
?> 
