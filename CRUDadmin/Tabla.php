<?php
include '../crud/conexion.php' ;
include 'sesion.php' ;

?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="http://localhost/compunetC/css/TablaR.css">
 
<body>
    <h1>Registros de la base de datos <a href="cerrarsesion.php"><?php echo $usuarioComp ?></a></h1>

    <div class="contenedor">
        <table>
            <tr class="head">
                <td>id</td>
                <td>Persona</td>
                <td>Documento</td>
                <td>Nombres</td>
                <td>Apellido 1</td>
                <td>Apellido 2</td>
                <td>Telefono</td>
                <td>Correo</td>
                <td>Ocupación</td>
                <td>Ingreso económico</td>
                <td>Dirección</td>
                <td colspan="2">Acción</td>
            </tr>
            <?php
                $consulta = "SELECT * FROM usuario ORDER BY id_usuario";
                $resultado = $conectarbd ->query($consulta);
                while ($fila=mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td><?php echo $fila['id_usuario'];?></td>
                <td><?php echo $fila['Tipo_usuario'];?></td>
                <td><?php echo $fila['Documento'];?></td>
                <td><?php echo $fila['Nombres'];?></td>
                <td><?php echo $fila['Apellido1'];?></td>
                <td><?php echo $fila['Apellido2'];?></td>
                <td><?php echo $fila['Telefono'];?></td>
                <td><?php echo $fila['Correo'];?></td>
                <td><?php echo $fila['Ocupacion'];?></td>
                <td><?php echo $fila['Ingreso_ec'];?></td>
                <td><?php echo $fila['Direccion'];?></td>
                <td><a href="../CRUDadmin/actualizarform.php?id_usuario=<?php echo $fila['id_usuario'];?>" class="btn_update" >Actualizar</a></td>
                <td><a href="../CRUDadmin/eliminar.php?id_usuario=<?php echo $fila['id_usuario'];?>" class="btn_delete" >Eliminar</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        </div>
</body>
</html>