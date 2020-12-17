<?php

require './conexion.php';



 $usuario = $_POST['email'];
 $passwd = $_POST['passwd'];

 
 $conectar = new Conexion();
 $conectar->conectar();
 $conect=$conectar->getConexion();


 session_start();
 $_SESSION['usuario'] = $usuario;

 $consulta ="SELECT * FROM registro WHERE email = '$usuario' AND passwd = '$passwd'";

$resultado =mysqli_query($conect, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
header("location: home.php");

}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad" style="text-align:center;">Error en la autenficación</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conect);