<?php 
     require 'conexion.php';
     require '../config/config.php';
    $rol = 4;
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $q = "SELECT * FROM usuarios where usuario = '$usuario'";
    $u = "INSERT INTO usuarios (no_rol, usuario, password, nombre, apellido, correo) VALUES ($rol, '$usuario', '$password', '$nombre', '$apellido', '$correo');";
    session_start();
    $_SESSION['usuario']=$usuario;
    $answer = mysqli_query($con,$q);
    $anfrage = mysqli_query($con,$u);
    if (mysqli_num_rows($answer)>0) {
        //Se imprime el que ya existe el usuario
        echo "Ya existe este nombre de usuario, inténtelo de nuevo";
        header("location: ../register.php");
    } else {
        //Se realiza el registro
        $anfrage;
        header("location: ../usuarios.php");
        }
?>