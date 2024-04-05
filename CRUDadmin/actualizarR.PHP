<?php
include '../crud/conexion.php';

$Id = $_POST['id_usuario'];
$Documento = $_POST['Documento'];
$Nombres = $_POST['Nombres'];
$Apellido1 = $_POST['Apellido1'];
$Apellido2 = $_POST['Apellido2'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Ocupacion = $_POST['Ocupacion'];
$Ingreso_ec = $_POST['Ingreso_ec'];
$Direccion = $_POST['Direccion'];

$editar = $conectarbd->query("UPDATE usuario SET  Documento ='$Documento', Nombres ='$Nombres', Apellido1 ='$Apellido1', Apellido2 ='$Apellido2', Telefono ='$Telefono', Correo ='$Correo', Ocupacion ='$Ocupacion', Ingreso_ec ='$Ingreso_ec', Direccion='$Direccion' where id_usuario='$Id'");

if($editar){
    echo '<script type="text/javascript">alert("Registro actualizado");</script>';
    header("refresh:1; url=Tabla.php");
} else {
    echo '<script type="text/javascript">alert("Erro al registrarse");</script>';
}
?>