<?php
        require './models/Usuario.php';
        // session_name('USER');
        session_start();
        $user = false;
        if(isset($_SESSION['id'])){
            $user = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['apellido'], $_SESSION['correo'], $_SESSION['password'], $_SESSION['imagen'], $_SESSION['rol'], $_SESSION['estado']);
        }else{

        }
        
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flutur</title>
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link rel="stylesheet" href="./assets/styles/home.css">
</head>

<body>
    <header class="header">
        <section class="header__logo">
            <h3>Flutur</h3>
        </section>
        <section class="header__perfil">
            <img src="./assets/images/benja.jpg" alt="">
            <span>
                <?php 
                    if($user) echo $user->getNombre(); else echo 'Ingresar'
                 ?> 
                <!-- BENJAMIN -->
            </span>
        </section>
    </header>
    <section class="rest-disp">
        <h5>Restaurantes Disponibles</h5>
        <section class="buttons">BUSCAR RESTAURANT</section>
    

    </section>
    <section class="local">
        <section class="local__bus">          
                    <div class="local__bus-item" id="clickTemp">
                        <img src="./assets/images/sarita.png" alt="">
                        <section class="local__info">
                            <h6>TACU TACU RESTAURANT</h6>
                            <p>Fusión | Rancagua</p>
                            <p>Avenida España 40 </p>
                            
                        </section>
                        <iframe class="local__view" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1650.6724667467229!2d-70.74966744102123!3d-34.1630977064263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1savenida%20santa%20maria!5e0!3m2!1ses!2scl!4v1656803417822!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> 
                    <div class="local__bus-item">
                        <img src="./assets/images/buenabarra.jpg" alt="">
                        <section class="local__info">
                        <h6>BAR BUENA BARRA</h6>
                        <p>Hamburguesa | Machali</p>
                            <p>Avenida Machali 2308 </p>
                        </section>
                        <iframe class="local__view" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1650.6724667467229!2d-70.74966744102123!3d-34.1630977064263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1savenida%20santa%20maria!5e0!3m2!1ses!2scl!4v1656803417822!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> 
                    <div class="local__bus-item">
                        <img src="./assets/images/bravoooooo.jpg" alt="">
                        <section class="local__info">
                        <h6>BRAVO 951</h6>
                        <p>Internacional | Rancagua</p>
                            <p>Avenida San Juan</p>
                        </section>
                        <iframe class="local__view" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1650.6724667467229!2d-70.74966744102123!3d-34.1630977064263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1savenida%20santa%20maria!5e0!3m2!1ses!2scl!4v1656803417822!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="local__bus-item">
                        <img src="./assets/images/brunapoli.jpg" alt="">
                        <section class="local__info">
                        <h6>BRUNAPOLÍ</h6>
                        <p>Pizzería | Rancagua</p>
                            <p>Rubio 87 </p>
                        </section>
                        <iframe class="local__view" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1650.6724667467229!2d-70.74966744102123!3d-34.1630977064263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1savenida%20santa%20maria!5e0!3m2!1ses!2scl!4v1656803417822!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="local__bus-item">
                        <img src="./assets/images/cocoa.jpg" alt="">
                        <section class="local__info">
                        <h6>COCOA RESTAURANT</h6>
                        <p>Peruana | Rancagua</p>
                            <p>Alameda 981 </p>
                        </section>
                        <iframe class="local__view" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1650.6724667467229!2d-70.74966744102123!3d-34.1630977064263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1savenida%20santa%20maria!5e0!3m2!1ses!2scl!4v1656803417822!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <section class="buttons">
                        <button type="button" class="button">VER MÁS</button>
                    </section>
                        <h3>Flutur</h3>

                <section class="local_redes">
                <img src="./assets/images/instagram-logo-24.png" alt="">
                <img src="./assets/images/facebook-logo-24.png" alt="">
                     <img src="./assets/images/gmail-logo-24.png" alt="">

                </section>

        </section>
       

    </section>
</body>
    <script>
        const $clickTemp = document.getElementById('clickTemp');
        $clickTemp.addEventListener('click',()=>{
            location.href = "http://127.0.0.1:5500/pages/restaurant.html"
        })
    </script>

</html>
