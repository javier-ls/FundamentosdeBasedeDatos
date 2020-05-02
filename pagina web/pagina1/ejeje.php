<?php

	$usuario = "root";

	$contraseña = "";

	$servidor = "localhost";

	$bd = "empresa2";

	$conexion=mysqli_connect($servidor,$usuario,$contraseña,$bd)
	or die ("error");

	$consulta = mysqli_query($conexion, "SELECT salario FROM empleados;")
	or die("error");
	$suma = 0;
	$contador = 0;
	while($elemento = mysqli_fetch_array($consulta)){
	  $suma = $suma + $elemento['salario'];
	  $contador++;
	}
	$prom = $suma/$contador;


echo"salario menor de un empleado:";
	$consulta = "SELECT * FROM empleados ORDER by salario asc limit 1";

	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");




	echo "<table borde='2'>";

	echo "<tr>";

	echo "<th>id</th>";

	echo "<th>nombre</th>";

        echo "<th>edad</th>";

        echo "<th>correo</th>";

        echo "<th>salario</th>";

	echo "</tr>";





	while ($columna = mysqli_fetch_array( $resultado ))

	{

		echo "<tr>";

		echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";

		echo "</tr>";

	}



	echo "</table>";


	echo"salario mayor de un empleado:";
		$consulta = "SELECT * FROM empleados ORDER by salario desc limit 1";

		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");




		echo "<table borde='2'>";

		echo "<tr>";

		echo "<th>id</th>";

		echo "<th>nombre</th>";

	        echo "<th>edad</th>";

	        echo "<th>correo</th>";

	        echo "<th>salario</th>";

		echo "</tr>";





		while ($columna = mysqli_fetch_array( $resultado ))

		{

			echo "<tr>";

			echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";

			echo "</tr>";

		}



		echo "</table>";

		echo "<br><br>El promedio es: $prom<br><br>";


		echo"salario mayor del promedio:";
			$consulta = "SELECT * FROM empleados WHERE salario>$prom";

			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");




			echo "<table borde='2'>";

			echo "<tr>";

			echo "<th>id</th>";

			echo "<th>nombre</th>";

						echo "<th>edad</th>";

						echo "<th>correo</th>";

						echo "<th>salario</th>";

			echo "</tr>";





			while ($columna = mysqli_fetch_array( $resultado ))

			{

				echo "<tr>";

				echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";

				echo "</tr>";

			}



			echo "</table>";

    
			echo"salario menor del promedio:";
				$consulta = "SELECT * FROM empleados where salario<$prom";

				$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");




				echo "<table borde='2'>";

				echo "<tr>";

				echo "<th>id</th>";

				echo "<th>nombre</th>";

			        echo "<th>edad</th>";

			        echo "<th>correo</th>";

			        echo "<th>salario</th>";

				echo "</tr>";





				while ($columna = mysqli_fetch_array( $resultado ))

				{

					echo "<tr>";

					echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";

					echo "</tr>";

				}



				echo "</table>";

	mysqli_close( $conexion );

?>
