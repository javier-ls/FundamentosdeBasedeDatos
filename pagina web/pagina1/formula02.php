<?php

  //conexion con el servidor
  $conectar=@mysqli_connect('localhost' , 'root' , '');
  // verificar la conexion
  if(!$conectar){
    echo "no se pudo conectra con el servidor";
    }
  if(!mysqli_select_db($conectar, 'empresa2')){
      echo"no se encontro la base de datos";
    }

  // recuperar variebles
  $nombres= $_POST['nombres'];
  $sql="INSERT INTO departamentos(nombres) VALUES('$nombres')";

  // ejecutar
  if(!mysqli_query($conectar,$sql)){
    echo"hubo un error";
  }else{
    echo"datos guardados correctamente<br><a href='formula02.html'>volver</a>";
  }
?>
