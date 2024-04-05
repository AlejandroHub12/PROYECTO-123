<?php
include 'conexion.php';
$Tipo_usuario= $_POST['Tipo_usuario'];
$Documento= $_POST['Documento'];
$Nombres= $_POST['Nombres'];
$Apellido1= $_POST['Apellido1'];
$Apellido2= $_POST['Apellido2'];
$Telefono= $_POST['Telefono'];
$Correo= $_POST['Correo'];
$Ocupacion= $_POST['Ocupacion'];
$Ingreso_ec= $_POST['Ingreso_ec'];
$Direccion= $_POST['Direccion'];

$guardar= $conectarbd->query("INSERT INTO usuario(Tipo_usuario, Documento, Nombres, Apellido1, Apellido2, Telefono, Correo, Ocupacion, Ingreso_ec, Direccion, Clave)
VALUES ('$Tipo_usuario','$Documento','$Nombres','$Apellido1','$Apellido2','$Telefono','$Correo','$Ocupacion','$Ingreso_ec','$Direccion')");
if ($guardar){
    echo '<script type= "text/javascript">alert("Registro exitoso");</script>';
}
else{
    echo '<script type= "text/javascript">alert("Error");</script>';
}
?>