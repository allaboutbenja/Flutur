<?php    
    class UserController {
    
        private IConnectDB $connectDB;

        function __construct(IConnectDB $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function getUsers(){

        }

        public function getUserById($id){
            
        }

        public function putUser($id, $name, $lastname, $correo, $pass, $img){
            
        }

        public function deleteUser($id){
           
        }

        public function changeUserAdmin($id, int $value){
           
        }
        
        public function changeUserBanned($id, int $value){
           
        }
    }

?> 