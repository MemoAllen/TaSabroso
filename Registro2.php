<?php

require './conexion.php';



	$user_name=$_POST['usuario'];
	$email= $_POST['email'];

	$password=$_POST['passwd'];







	$conectar = new Conexion();
	$conectar->conectar();
	$conect=$conectar->getConexion();

	


	//$hola=mysqli_query($conect,"INSERT INTO user_register VALUES('','prueba','prueba@gmail.com',1,1,'hola','$status')");

	//echo ("$hola");
	$mysqli=mysqli_query($conect,"INSERT INTO registro VALUES('','$user_name','$email','$password')");
	//$mysqli=mysqli_query($conect,"INSERT INTO registro VALUES('','Alejandro','alejandro@gmail','1234')");
	
	//echo ("$hola");	
	
	echo ' <script language="javascript">alert("Ya estas registrado Ta sabroso te agradece.....!!");</script> ';
	echo ("<script>location.href='./Registro.php'</script>");				
	
	


?>