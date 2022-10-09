<?php
    require "../models/Restaurante.php";
    class RestaurantController {
    
        private IConnectDB $connectDB;

        function __construct(IConnectDB $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function getRestaurants($redirectTO){
            session_start();
            $this->connectDB->connect();
            $sql = "SELECT * FROM restaurante";
            $resp = $this->connectDB->query($sql);
            $list = array();
            while($rs = mysqli_fetch_array($resp)){
                $restaurant = new Restaurante($rs[0],$rs[1],$rs[2],$rs[3],$rs[4],$rs[5],$rs[6],$rs[7],$rs[8],$rs[9],$rs[10]);
                $list[] = $restaurant;
            }
            $_SESSION['restaurants'] = $list;
            $this->connectDB->disconnect();
            header("location:  $redirectTO");
            return;
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