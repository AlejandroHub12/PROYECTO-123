<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/resgistros.css">
</head>
<body>
    <div>
        <div class= "contenedor">
            <form action="../crud/ingresarR.php" method= "POST"></form>
           <div class= formulario>

           <input type="text" name="id_usuario" id="id_usuario" class="username input" required>
           <label for="id_usuario" class="input-label">id_usuario</label><br>

            <select name="Tipo_usuario" id="Tipo_usuario" class= "username input">
                <option value="Administrador">Administrador</option>
                <option value="Beneficiario">Beneficiario</option>
                <option value="Donante">Donante</option>
            </select><br>

            <input type="text" name="Documento" id="Documento" class="username input" required>
            <label for="Documento" class="username label">Documento</label><br>

            <input type="text" name="Nombres" id="Nombres" class="username input" required>
            <label for="Nombres" class="username label">Nombres</label><br>

            <input type="text" name="Apellido1" id="Apellido1" class="username input" required>
            <label for="Apellido1" class="username label">Primer apellido</label><br>

            <input type="text" name="Apellido2" id="Apellido2" class="username input" required>
            <label for="Apellido2" class="username label">Segundo apellido</label><br>

            <input type="text" name="Telefono" id="Telefono" class="username input" required>
            <label for="Telefono" class="username label">Telefono</label><br>

            <input type="text" name="Correo" id="Correo" class="username input" required>
            <label for="Correo" class="username label">Correo</label><br>

            <input type="text" name="Ocupacion" id="Ocupacion" class="username input" required>
            <label for="Ocupacion" class="username label">Ocupación</label><br>

            <input type="text" name="Ingreso_ec" id="Ingreso_ec" class="username input" required>
            <label for="Ingreso_ec" class="username label">Ingreso económico</label><br>

            <input type="text" name="Direccion" id="Direccion" class="username input" required>
            <label for="Direccion" class="username label">Dirección</label><br>
           </div> 
        </div>
    </div>
</body>
</html>