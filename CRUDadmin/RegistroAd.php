<?php
    include '../crud/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/donante.css">
</head>
<body>
    <div class="formulario">
        <h1>INICIO DE SESIÓN</h1>
        <form method="POST" action="../crud/IniciarSesion.php">
            <div class="username">
                <input type="text" class="Gmail" id="Gmail" name="Gmail"  required>
                <label>Correo ✉ </label>
            </div>
            <div class="username">
                <input type="text" class="Documento" id="Documento" name="Documento" required>
                <label>Documento</label>
            </div>
            <input type="submit" value="Iniciar sesión">
            <div class="registrarse">
                Quiero hacer el <a href="../CRUDadmin/RegistroAdr.html">Registro</a>
            </div>
        </form>
    </div>
</body>
</html>