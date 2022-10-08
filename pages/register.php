<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flutur</title>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/register.css">
</head>
<body>
    <header>
        <h1>
            <a href="../index.html">Flutur</a>
        </h1>
    </header>
    <section class="form">
        <div> </div> 
        <div> </div> 
        <form method="POST" action="../routes/auth.php">
            <h3>REGISTRARSE</h3>
            <div class="input">
                <label for="nameInput">Nombre</label>
                <input type="text" title="Nombre" id="nameInput" name="txtNombre"> 
            </div>
            <div class="input">
                <label for="apellidoInput">Apellido</label>
                <input type="text" title="Apellido" id="apellidoInput" name="txtApellido"> 
            </div>
            <div class="input">
                <label for="correoInput">Correo Eléctronico</label>
                <input type="email" title="Correo Eléctronico" id="correoInput" name="txtCorreo"> 
            </div>
            <div class="input">
                <label for="passInput">Contraseña</label>
                <input type="password" title="Contraseña" id="passInput" name="txtPass"> 
            </div>
            <!-- <div class="input" id="pass2">
                <label for="pass2Input">Confirmar contraseña</label>
                <input type="password" title="Confirmar contraseña" id="pass2Input"> 
            </div> -->

            <button type="submit" class="button" id="btnForm" name="btnCrearCuenta">CREAR CUENTA</button>
            <p><a href="./login.html">¿Ya tienes cuenta?</a></p>
        </form>
    </section>
    <script src="../js/register.js"></script>
</body>
</html>