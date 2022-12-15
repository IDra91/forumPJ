<?php
    require 'conexion.php';
   $usuario=$_POST['usuario'];
   $password=$_POST['password'];

   session_start();
   $_SESSION['usuario']=$usuario;

   $cons="SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
   $resultado=mysqli_query($con,$cons);

   $filas=mysqli_num_rows($resultado);

   if($filas){
    header("location: ../test.php");
   }else{
    echo "NO VÁLIDO";
   }
?>