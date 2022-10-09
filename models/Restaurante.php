<?php
class Restaurante{
    private int $id;
    private int $idUser;
    private string $nombre;
    private string $descripcion;
    private string $direccion;
    private string $lng;
    private string $lat;
    private string $instagram;
    private string $whatsapp;
    private string $web;

    function __construct($id,$idUser,$nombre,$descripcion,$direccion,$lng,$lat,$instagram,$whatsapp,$web) {
        $this->id = $id;
        $this->idUser = $idUser;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->direccion = $direccion;
        $this->lng = $lng;
        $this->lat = $lat;
        $this->instagram = $instagram;
        $this->whatsapp = $whatsapp;
        $this->web = $web;
    }
    public function getId():int {
        return $this->id;
    }
    public function getNombre():string {
        return $this->nombre;
    }
    public function getUserId():int {
        return $this->idUser;
    }
    public function getDescripcion():string {
        return $this->descripcion;
    }

    public function getDireccion():string {
        return $this->direccion;
    }
    
    public function getLng():string {
        return $this->lng;
    }
    public function getLat():string {
        return $this->lat;
    }
    public function getInstagram():string {
        return $this->instagram;
    }
    public function getWhatsapp():string {
        return $this->whatsapp;
    }
    public function getWeb():string {
        return $this->web;
    }
}
?>