<?php

	Eliminar($_GET['id']);

	function Eliminar($id)
	{
		$usuario = "root";

		$password = "";

		$servidor = "localhost";

		$basededatos = "empresa2";

		$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

		$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

		$consulta = "DELETE from empleados where id='$id'";

		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='baseD.php';
</script>
