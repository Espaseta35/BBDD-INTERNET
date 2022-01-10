<?php include "seguridad.php";
$nombreUsuario= $_SESSION['nombre'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
	<head>
		<title>Registro</title>
	    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
		<link rel="stylesheet" type="text/css" href="./css/table.css" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<header>
			<div class="wrapper">
				<div class="logo">
					<h1>INFO COCHES RC</h1>
					<div class="login-system">
						<a class="login-button" href="utils/salir.php">Cerrar Sesión</a>
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
		<h2>PRODUCTOS</h2>
<?php $link = mysqli_connect("localhost", "root", "","espasarc"); 
$resul1 = mysqli_query($link,"SELECT producto,codigo,imagen,precio FROM productos"); 
//Creamos  la tabla
echo "<table> \n"; 

//incluimos los nombres de los campos
echo "<tr class='red'><th>Producto</th><th>Referencia</th><th>Imagen</th><th>Precio</th><th>  </th></tr> \n"; 
while ($row = mysqli_fetch_row($resul1)){ 
       echo "<tr>
	   		<td>$row[0]</td>
	   		<td>$row[1]</td>
			<td> <img width='120' height='120' src='$row[2]'> </td>
			<td>$row[3]</td>
			<td></td>
			</tr>\n"; 
}
echo "</table> \n"; 
?>





<main id="cuerpo">
	<form name="form" method="post" action="./utils/insertarcant.php">	
	<div class="fild">
			<h2>Añadir producto</h2>

		<select name='prod' type="number" id="prod">
		<?php
			$resul1 = mysqli_query($link,"SELECT producto,codigo,imagen,precio FROM productos"); 
			while ($cod = mysqli_fetch_row($resul1)){ 

			echo"<option value='$cod[1]'>$cod[1]</option>\n";

			}
		?>
		</select>

				</div>

				<div class="fild">
					<label for="number" class="number">Cantidad:</label>
					<input
						name="cantidad"
						type="number"
						id="cantidad"
						maxlength="30"
						min="0" 
						max="10"
						required
					/>
				</div>
				<button type="reset" id="reset">Vaciar </button>
				<button type="submit" id="submit">Añadir produto</button>

				</form>
		</main>


		<?php 	
		$compras = mysqli_query($link,"SELECT producto, cantidad FROM compra WHERE cliente='$nombreUsuario'");
		$comprasArray = [];
		while($row = mysqli_fetch_array($compras))
		{
			$comprasArray[] = $row;
		}
		
		$carrito = [];

		foreach ($comprasArray as $index=>$compra) {
			$productoId = $compra["producto"];
			$producto = mysqli_query($link, "SELECT producto, precio FROM productos WHERE codigo='$productoId'");
			$productoArray = mysqli_fetch_array($producto);

			$newProd = [
				'nombrep' => $productoArray['producto'],
				'preciop' => $productoArray['precio'],
				'cantidad' => $compra['cantidad'],
			];

			$carrito[] = $newProd;
		};

// Creamos  la tabla
echo "<table> \n"; 
echo "<h2>Carrito</h2>";
// Incluimos los nombres de los campos
echo "<tr class='red'><th>Producto</th><th>Cantidad</th><th>Precio</th><th>  </th></tr> \n"; 
foreach ($carrito as $carritoProd) {
	$nombreProducto = $carritoProd['nombrep'];
	$precioProducto = $carritoProd['preciop'];
	$unidadesProducto = $carritoProd['cantidad'];

       echo "<tr>
	   		<td>$nombreProducto</td>
	   		<td>$precioProducto</td>
			<td>$unidadesProducto</td>
			</tr>
			\n"; 
}
echo "</table> \n"; 
?>
		<footer>
			<h3>Empresas colaboradoras</h3>
			<a href="https://espasarcshop.com/"
				><img
					src="data:image/jpeg;base64,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"
					width="20%"
			/></a>

			<a href="https://www.reds-racing.com/">
				<img
					src="http://summum-brothers.com/wp-content/uploads/2016/08/3_REDS.png"
					width="20%"
			/></a>
			<a
				href="https://www.google.es/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0ahUKEwiZ4fXXotXXAhUkJMAKHd6jAb0QFggmMAA&url=http%3A%2F%2F6mik-racing.com%2F&usg=AOvVaw3i_Ylyj8ZQBTBHUxFpP5-9"
				><img
					src="http://summum-brothers.com/wp-content/uploads/2016/08/4_6MIK.png"
					width="20%"
			/></a>
			<a
				href="https://www.google.es/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0ahUKEwj__u3lotXXAhWrAMAKHeCAC4UQFggmMAA&url=http%3A%2F%2Fwww.agama-rc.com%2F&usg=AOvVaw2qJ069FBhyttd4rkUWj5S1"
				><img
					src="http://summum-brothers.com/wp-content/uploads/2016/08/1_AGAMA.png"
					width="20%"
			/></a>
		</footer>
	</body>
</html>