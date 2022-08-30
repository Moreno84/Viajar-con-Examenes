<?php
 //conectamos Con el servidor
 $host ="localhost:3307";
 $user ="root";
 $pass ="";
 $db="basedatos";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
 $nombre=$_POST['nombre'];
 $apellidos=$_POST['apellidos'];
 $email=$_POST['email'];
 $comentarios=$_POST['comentarios'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO usuarios(nombre,apellidos,email,comentarios) VALUES('$nombre',
           '$apellidos',
           '$email','$comentarios')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente";
 }
?>

