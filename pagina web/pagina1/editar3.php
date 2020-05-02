<?php

$consulta=ConsultarProducto($_GET['id']);

function ConsultarProducto($id)
{
	$usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa2";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	$consulta="SELECT * FROM empleados WHERE id='".$id."' ";
	$resultado = mysqli_query( $conexion, $consulta );
	$columna=mysqli_fetch_array($resultado);
	return [
		$columna['id'],
		$columna['nombre'],
		$columna['edad'],
		$columna['correo'],
		$columna['salario']
	];

}

?>
<html>
<head>
	<title></title>
</head>
<body>
	<span> <h1>Editar Producto</h1> </span>
	  		<br>
		  <form action="emplementer.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
	      <input type="hidden" name="id" value="<?php echo $_GET['id']?> ">

	  		<label>Nombre: </label>
	  		<input type="text" name="nombre" name="nombre" value="<?php echo $consulta[1] ?>"><br>

				<label>Edad: </label>
	  		<input type="text" name="edad" name="edad" value="<?php echo $consulta[2] ?>"><br>

	  		<label>Correo: </label>
	  		<input type="text" name="correo" name="correo" value=" <?php echo $consulta[3] ?> "><br>


				<label>Salario: </label>
				<input type="text" name="salario" name="salario" value=" <?php echo $consulta[4] ?> "><br>

	  		<br>
	  		<button type="submit" class="btn btn-success">Guardar</button>
</form>
</body>
</html>
