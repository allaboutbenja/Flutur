<?php
class Reservas{
    private $id;
    private $hora_inicio;
    private $hora_fin;
   

    function __construct($id,$hora_inicio,$hora_fin) {
        $this->hora_inicio = $hora_inicio;
        $this->hora_fin = $hora_fin;
    }
    public function getId() {
        return $this->id;
    }
    public function getHora_inicio() {
        return $this->hora_inicio;
    }
    public function getHora_fin() {
        return $this->hora_fin;
    }
}
?>