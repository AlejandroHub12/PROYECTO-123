<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="donante.css">
</head>
<body>
   
<?php
include 'include/header.php';

?>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="conexion.php">
                    <h2>REGISTRATE</h2>
                    Seleccione tipo de persona:
                    <select name="Tipo_persona">
           <option value="1">Persona natural</option>
           <option value="2">Empresa</option>
       </select><br>
       Ingrese documento:
       <input type="text" name="Documento"><br>
         Ingrese su nombre:
        <input type="text" name="Nombres"><br>
         Ingrese primer apellido:
        <input type="text" name="Apellido1"><br>
        <br>
        Ingrese segundo apellido:
        <input type="text" name="Apellido2"><br>
        <br>
        Ingrese telefono:
        <input type="text" name="Telefono"><br>
        <br>
        Ingrese correo:
        <input type="text" name="Correo"><br>
        <br>
        Ingrese dirección:
        <input type="text" name="Direccion"><br>
        <br>
        <input type="submit" value="Registrar">
                </form>
            </div>
        </div>
    </section>
    <?php
include 'include/footer.php';

?>
</body>
</html>