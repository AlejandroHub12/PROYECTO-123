<?php
include '../crud/conexion.php';
$Id = $_GET[ 'id_usuario'];
$consulta = "SELECT * FROM usuario WHERE id_usuario = '$Id' ";
$resultado = $conectarbd->query($consulta);
if ($resultado) {
    $mostrar = $resultado->fetch_object();
    $Id = $mostrar->id_usuario;
    $Usuario = $mostrar->Tipo_usuario;
    $Documento = $mostrar->Documento;
    $Nombres = $mostrar->Nombres;
    $Apellido1 = $mostrar->Apellido1;
    $Apellido2 = $mostrar->Apellido2;
    $Telefono = $mostrar->Telefono;
    $Correo = $mostrar->Correo;
    $Ocupacion = $mostrar->Ocupacion;
    $ingreso_ec = $mostrar->Ingreso_ec;
    $Direccion = $mostrar->Direccion;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos </title>
</head>
<boody>
    <form action="actualizarR.PHP" method="post">

        <input type="text" name="id_usuario" id="id_usuario" class="input" value="<?php echo $Id ?>" readonly>
        <label for="Documento" class="input-label">ID</label><br>

        <input type="text" name="Documento" id="Documento" class="input" value="<?php echo $Documento ?>" required>
        <label for="Documento" class="input-label">Documento</label><br>

        <input type="text" name="Nombres" id="Nombres" class="input" value="<?php echo $Nombres ?>" required>
        <label for="Nombres" class="input-label">Nombres </label><br>

        <input type="text" name="Apellido1" id="Apellido1" class="input" value="<?php echo $Apellido1 ?>" required>
        <label for="Apellido1" class="input-label">Primer apellido</label><br>

        <input type="text" name="Apellido2" id="Apellido2" class="input" value="<?php echo $Apellido2 ?>" required>
        <label for="Apellido2" class="input-label">Segundo apellido</label><br>

        <input type="text" name="Telefono" id="Telefono" class="input" value="<?php echo $Telefono ?>" required>
        <label for="Telefono" class="input-label">Telefono</label><br>

        <input type="text" name="Correo" id="Correo" class="input" value="<?php echo $Correo ?>" required>
        <label for="Correo" class="input-label">Correo</label><br>

        <input type="text" name="Ocupacion" id="Ocupacion" class="input" value="<?php echo $Ocupacion ?>" required>
        <label for="Ocupacion" class="input-label">Ocupación</label><br>

        <input type="text" name="Ingreso_ec" id="Ingreso_ec" class="input" value="<?php echo $ingreso_ec ?>" required>
        <label for="Ingreso_ec" class="input-label">Ingreso económico</label><br>

        <input type="text" name="Direccion" id="Direccion" class="input" value="<?php echo $Direccion ?>" readonly required>
        <label for="Direccion" class="input-label">Dirección</label><br>

        <input type="submit" value="Actualizar">
    </form>
</boody>
</html>