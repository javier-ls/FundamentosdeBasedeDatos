<?php

  //conexion con el servidor
  $conectar=@mysqli_connect('127.0.0.1' , 'root' , '');
  // verificar la conexion
  if(!$conectar){
    echo "no se pudo conectra con el servidor";
    }
  if(!mysqli_select_db($conectar, 'empresa2')){
      echo"no se encontro la base de datos";
    }

  // recuperar variebles
  $nombre= $_POST['nombre'];
  $edad= $_POST['edad'];
  $correo= $_POST['correo'];
  $salario= $_POST['salario'];
  $sql="INSERT INTO empleados(nombre, edad, correo, salario) VALUES('$nombre','$edad','$correo','$salario')";

  // ejecutar
  if(!mysqli_query($conectar,$sql)){
    echo"hubo un error";
  }else{
    echo"datos guardados correctamente<br><a href='formula01.html'>volver</a>";
  }
?>
