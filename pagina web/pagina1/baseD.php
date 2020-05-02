<html>
  <head>
    <title>Consulta de empleados</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>

  <body bgcolor="black" text="white" link="#525D76" alink="#525D76" vlink="#525D76">
        <table border="0" width="100%" cellspacing="0">
        <td>
<center> <div class="n"><p>    <b><font color="#000000" face="georgia" size="6"><marquee width="700" scrollamount="6" bgcolor="#FFFFFF">CONSULTA DE EMPLEADOS</marquee></font></b></p><center>

</font><h2><center><u></u><center></h2><font size=”3″ face=”Comic Sans MS, Arial, MS Sans Serif”></font></body>
  <li><a href="principal2.html">Pagina Principal</a></li>
  <br>
</html>


<?php



	$usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa2";




	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");





	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );





	$consulta = "SELECT * FROM empleados";

	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


echo "<center>";

	echo "<table borde>";

	echo "<tr>";

	echo "<th>id</th>";

	echo "<th>Nombre</th>";

        echo "<th>Edad</th>";

        echo "<th>Correo</th>";

        echo "<th>Salario</th>";

	echo "</tr>";





	while ($columna = mysqli_fetch_array( $resultado ))

	{

		echo "<tr>";

		echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";
		echo "<td> <a href='editar3.php?id=".$columna['id']."''> <button type ='button' class='btn btn-success'> EDITAR</button></a></td>";
		echo "<td> <a href='eliminar3.php?id=".$columna['id']."''> <button type ='button' class='btn btn-danger'> ELIMINAR</button></a></td>";
		echo "</tr>";


	}



	echo "</table>";





	mysqli_close( $conexion );

?>
