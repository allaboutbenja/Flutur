<?php
    require '../core/bootstraper.php';
    require '../controllers/restaurant.controller.php';
    $restaurant = new RestaurantController( $connectDB );

    /*
    *   Get Restaurants
    */
    if(isset($_GET['getRestaurants']) && isset($_GET['redirectTo'])){
        $restaurant->getRestaurants($_GET['redirectTo']);
    }

    /*
    *   Get Restaurants By ID
    */
    if(isset($_GET['getRestaurantsById'])){
        // $restaurant->getRestaurantById();
    }

    /*
    *   Post Restaurant
    */
    if(isset($_POST['postRestaurant'])){
        // $restaurant->postRestaurant();
    }

    /*
    *   Put Restaurant
    */
    if(isset($_POST['putRestaurant'])){
        // $restaurant->putRestaurant();
    }

    /*
    *   Delete Restaurant
    */
    if(isset($_POST['deleteRestaurant'])){
        // $restaurant->deleteRestaurant();
    }

?>