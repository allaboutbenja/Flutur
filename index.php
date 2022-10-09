<?php
        require './models/Usuario.php';
        require './models/Restaurante.php';
        session_start();
        $login = false;
        $isAdmin = false;
        if(isset($_SESSION['user'])){
            $login = true;
            $user = $_SESSION['user'];
            if($_SESSION['user']->getRol() == '1') $isAdmin = true;
        }    
        if(!isset($_GET['all']) || !$_SESSION['restaurants']){
            header("location:  ./routes/restaurant.route.php?getRestaurants&redirectTo=../index.php?all");
        }

        $restaurantsList = $_SESSION['restaurants'];
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
            <?php if($login) echo "<img src='./assets/images/benja.jpg' alt=''>";?>
            <span>
                <?php 
                    if($login){
                        echo $user->getNombre(); 
                        echo '<a href="./routes/auth.route.php?logout" class="me-3">Salir</a>';
                    } 
                    else echo '<a href="./pages/login.php">Ingresar</a>';
                 ?> 
            </span>
            
        </section>
    </header>
    <section class="rest-disp">
        <h5>Restaurantes Disponibles</h5>
        <section class="buttons">BUSCAR RESTAURANT</section>
    

    </section>
    <section class="local">
        <section class="local__bus">     
                    <?php
                        for($i = 0; $i < count($restaurantsList); $i++){
                            echo "
                            <div class='local__bus-item' id='clickTemp'>
                            <img src='./assets/images/sarita.png' alt=''>
                            <section class='local__info'>
                                <h6>".$restaurantsList[$i]->getNombre()."</h6>
                                <p>".$restaurantsList[$i]->getDescripcion()."</p>
                                <p>".$restaurantsList[$i]->getDireccion()."</p>
                                
                            </section>
                            <iframe class='local__view' src='https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1650.6724667467229!2d-70.74966744102123!3d-34.1630977064263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1savenida%20santa%20maria!5e0!3m2!1ses!2scl!4v1656803417822!5m2!1ses!2scl' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
                        </div> ";
                        }
                    ?>
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
            location.href = "./pages/restaurant.php"
        })
    </script>

</html>
