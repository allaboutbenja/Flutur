<?php
    class DatabaseMYSQL implements IConexionDB{
        private $db;
        private $localhost;
        private $user;
        private $pass;
        private $nameDB;        

        function __construct($localhost, $user, $pass, $nameDB)
        {
            $this->localhost = $localhost;    
            $this->user = $user;
            $this->pass = $pass;
            $this->nameDB = $nameDB;
        }

        public function connect(){
            $this->db = new mysqli($this->localhost,$this->user,$this->pass,$this->nameDB);
            if($this->db->connect_errno){
                die("Error al establecer la conexion a la BD -> juegosinflables");
            }
        }
        public function disconnect(){
            $this->db->close();
        }
    }
?>