<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flutur</title>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/login.css">
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
        <form method="POST" action="../routes/auth.php" >
            <h3>Iniciar Sesión</h3>
            <div class="input">
                <label for="">Correo Electronico</label>
                <input type="text" title="Correo" name="txtCorreo"> 
            </div>
            <div class="input">
                <label for="">Contraseña</label>
                <input type="password" title="Contraseña" name="txtPass"> 
            </div>
            <button name="btnAuthLogin"class="button">INGRESAR</button>
            <div>
                <p class="separator-o">ó</p>
                <div class="social-networks">
                    <img src="../assets/images/google.png" alt="">
                    <img src="../assets/images/facebook.png" alt="">
                </div>
            </div>
            <div class="link">
                <p>
                    <a href="./register.php">Crear Cuenta</a>
                </p>
                <br>
                <p>
                    <a href="">¿Olvidaste la Contraseña?</a>
                </p>
            </div>
        </form>
    </section>

</body>
</html>