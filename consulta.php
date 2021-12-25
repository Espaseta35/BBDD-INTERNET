<?php 
              include "./seguridad1.php";
              $nombreusuario= $_SESSION['nombre'];
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <h1>INFO COCHES RC</h1>
                <div class="login-system">
                <a class="registration-button" href="registro.php"
							>Registrarse</a
						>
                </div>
            </div>
            <nav height="100%">
                <ul>
                <li><a href="index.php">Inicio</a></li>
							<li><a href="HRC.php">Historia</a></li>
							<li><a href="somos.php">Tipo de Coches</a></li>
							<li><a href="tienda.php">Tienda</a></li>
							<li><a href="tarifas.php">Horario</a></li>
							<li><a href="Pilotos.xml">Pilotos</a></li>
                            <li><a href="admin.php">Administrar</a></li>
                </ul>
            </nav>
            
        </div>
    </header>
    <main>
            <?php 


              $link = mysqli_connect("localhost", "root", "","espasarc"); 
              $resul1 = mysqli_query($link,"SELECT id,nombre,apellidos,correo,contraseña,admin FROM datos"); 
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
            </main>
            <footer>
            </footer>
       </body>
 
 
 
 
 
 
 
 


