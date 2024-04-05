<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar registro</title>
</head>
<body>
    <?php
    $conectarbd = mysqli_connect ('localhost','root','','Compunet') or die ("Problemas con la conexion"); 

    $sql = mysqli_query($conectarbd, "INSERT INTO usuario(id_usuario,Tipo_usuario,Documento,Nombres,Apellido1,Apellido2,Telefono,Correo,Ocupacion,Ingreso_ec,Direccion) VALUES ('$_REQUEST[id_usuario]','$_REQUEST[Tipo_usuario]','$_REQUEST[Documento]','$_REQUEST[Nombres]','$_REQUEST[Apellido1]','$_REQUEST[Apellido2]','$_REQUEST[Telefono]','$_REQUEST[Correo]','$_REQUEST[Ocupacion]','$_REQUEST[Ingreso_ec]','$_REQUEST[Direccion]')") or die ("Problemas con el registro" . mysqli_error($conectarbd));

    if ($sql){
        echo "<script>
               alert('Registro del usuario exitoso');
               location.href= '../index.php';
             </script>";
    }

    mysqli_close($conectarbd);

    echo "El usuario ha sido registrado exitosamente"
    ?>
</body>
</html>