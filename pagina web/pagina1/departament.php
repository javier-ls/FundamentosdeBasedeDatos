<?php
$usuario = "root";

$password = "";

$servidor = "localhost";

$basededatos = "empresa2";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = "SELECT * FROM departamentos";


$id=$_POST['id'];
$nombres=$_POST['nombres'];

$resultado=mysqli_query($conexion, "UPDATE departamentos SET nombres='$nombres' WHERE id='$id'");
header('location: baseD2.php');

?>
</div>


</body>
</html>
