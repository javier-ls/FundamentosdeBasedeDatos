<?php
$usuario = "root";

$password = "";

$servidor = "localhost";

$basededatos = "empresa2";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = "SELECT * FROM inventario";


$id=$_POST['id'];
$producto=$_POST['producto'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];

$resultado=mysqli_query($conexion, "UPDATE inventario SET producto='$producto', precio='$precio', cantidad='$cantidad' WHERE id='$id'");
header('location: baseD3.php');

?>
</div>


</body>
</html>
