<?php
$usuario = "root";

$password = "";

$servidor = "localhost";

$basededatos = "empresa2";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = "SELECT * FROM empleados";


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$salario=$_POST['salario'];

$resultado=mysqli_query($conexion, "UPDATE empleados SET nombre='$nombre', edad='$edad', correo='$correo', salario='$salario' WHERE id='$id'");
header('location: baseD.php');

?>
</div>


</body>
</html>
