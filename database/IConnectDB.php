<?php
    interface IConnectDB{
        public function connect();
        public function disconnect();
        public function getDB();
    }
?>