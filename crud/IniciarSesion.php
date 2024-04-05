<?php
include 'conexion.php';
$Correo = $_POST['Gmail'];
$Doc = $_POST['Documento'];

$Administrador=$conectarbd->query("SELECT * FROM usuario WHERE Correo ='$Correo' AND Documento = '$Doc' AND Tipo_usuario = 'Administrador'");

$Aspirante=$conectarbd->query("SELECT * FROM usuario WHERE Correo ='$Correo' AND Documento = '$Doc' AND Tipo_usuario = 'Aspirante'");

$Donante=$conectarbd->query("SELECT * FROM usuario WHERE Correo ='$Correo' AND Documento = '$Doc' AND Tipo_usuario = 'Donante'");

if($completo=mysqli_fetch_array($Administrador)){
    session_start();
    $_SESSION['Correo'] = $_POST['Correo'];
    echo '<script type="text/javascript">alert("Has ingresado como administrador");</script>';
    header("refresh:1; url=../CRUDadmin/Tabla.php");

}elseif($completo=mysqli_fetch_array($Aspirante)){
    session_start();
    $_SESSION['Correo'] = $_POST['Correo'];
    echo '<script type="text/javascript">alert("Hola querido aspirante");</script>';
    header("refresh:1; url=index.html");

}elseif($completo=mysqli_fetch_array($Donante)){
    session_start();
    $_SESSION['Correo'] = $_POST['Correo'];
    echo '<script type="text/javascript">alert("Hola querido donante");</script>';
    header("refresh:1; url=index.html");

}else{
    echo '<script type="text/javascript">alert("Error al iniciar sesión");</script>';
    header("");
}


?>