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
	$consulta="SELECT * FROM departamentos WHERE id='".$id."' ";
	$resultado = mysqli_query( $conexion, $consulta );
	$columna=mysqli_fetch_array($resultado);
	return [
		$columna['id'],
		$columna['nombres'],
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
		  <form action="departament.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
	      <input type="hidden" name="id" value="<?php echo $_GET['id']?> ">

	  		<label>Nombres: </label>
	  		<input type="text" name="nombres" name="nombres" value="<?php echo $consulta[1] ?>"><br>


	  		<br>
	  		<button type="submit" class="btn btn-success">Guardar</button>
</form>
</body>
</html>
