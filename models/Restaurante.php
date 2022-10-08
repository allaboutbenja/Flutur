<?php
class Restaurante{
    private $id;
    private $nombre;
    private $descripcion;
    private $direccion;
    private $lng;
    private $lat;
    private $instagram;
    private $whatsapp;
    private $web;

    public function Restaurante($id,$nombre,$descripcion,$direccion,$lng,$lat,$instagram,$whatsapp,$web) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->direccion = $direccion;
        $this->lng = $lng;
        $this->lat = $lat;
        $this->instagram = $instagram;
        $this->whatsapp = $whatsapp;
        $this->web = $web;
    }
    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getDireccion() {
        return $this->direccion;
    }
    
    public function getLng() {
        return $this->lng;
    }
    public function getLat() {
        return $this->lat;
    }
    public function getInstagram() {
        return $this->instagram;
    }
    public function getWhatsapp() {
        return $this->whatsapp;
    }
    public function getWeb() {
        return $this->web;
    }
}
?>