<?php
include '../crud/conexion.php';
$Id=$_GET['id_usuario'];
$eliminar = $conectarbd->query("DELETE FROM usuario where id_usuario='$Id'");

if ($eliminar){
    echo '<script type="text/javascript">alert("Usuario eliminado");</script>';
    header("refresh:1; url=Tabla.php");
} else {
    echo '<script type="text/javascript">alert("Erro al eliminar usuario");</script>';
}
?>