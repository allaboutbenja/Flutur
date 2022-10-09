<?php    
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

        public function postRestaurant($idUser, $name, $desc, $address, $lng, $lat, $ig, $whatsApp, $web){
            
        }

        public function putRestaurant($idRestaurant, $idUser, $name, $desc, $address, $lng, $lat, $ig, $whatsApp, $web){
            
        }

        public function deleteRestaurant($id){
           
        }
    }

?> 