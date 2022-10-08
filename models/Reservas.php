<?php
class Reservas{
    private $hora_inicio;
    private $hora_fin;
   

    public function Reservas($hora_inicio,$hora_fin) {
        $this->hora_inicio = $hora_inicio;
        $this->hora_fin = $hora_fin;
    }
    public function getHora_inicio() {
        return $this->hora_inicio;
    }
    public function getHora_fin() {
        return $this->hora_fin;
    }
}
?>