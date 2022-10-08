<?php
class Restaurante{
    private $nombre;
    private $descripcion;
    private $direccion;
    private $lng;
    private $lat;
    private $instagram;
    private $whatsapp;
    private $web;

    function __construct($nombre,$descripcipn,$direccion,$lng,$lat,$instagram,$whatsapp,$web) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->direccion = $direccion;
        $this->lng = $lng;
        $this->lat = $lat;
        $this->instagram = $instagram;
        $this->whatsapp = $whatsapp;
        $this->web = $web;
    }
    function getNombre() {
        return $this->nombre;
    }
    function getDescripcion() {
        return $this->descripcion;
    }

    function getDireccion() {
        return $this->direccion;
    }
    
    function getLng() {
        return $this->lng;
    }
    function getLat() {
        return $this->lat;
    }
    function getInstagram() {
        return $this->instagram;
    }
    function getWhatsapp() {
        return $this->whatsapp;
    }
    function getWeb() {
        return $this->web;
    }
}
?>