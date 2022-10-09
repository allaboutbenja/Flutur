<?php
    require '../models/Restaurante.php';
    
    class RestaurantController {
    
        private IConnectDB $connectDB;

        function __construct(IConnectDB $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function getRestaurants(){

        }

        public function getRestaurantById($id){
            
        }

        public function postRestaurant(Restaurante $restaurant){
            
        }

        public function putRestaurant($id, Restaurante $restaurant){
            
        }

        public function deleteRestaurant($id){
           
        }
    }

?> 