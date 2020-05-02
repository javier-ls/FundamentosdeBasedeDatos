<?php
$mysqli=new mysqli("localhost","root","","empresa");

if($mysqli->connect_errno){
	echo "fallo la conexion";
	exit();

}
$consulta="SELECT*FROM empleados";
$resultado=$mysqli->query($consulta);
while($empleados=$resultado->fetch_assoc()){

var_dump($empleados);}
$resultado->close();
$mysqli->close();

