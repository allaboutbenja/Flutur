<?php
class Horarios{
    private $id;
    private $lunes_inicio;
    private $lunes_cierre;
    private $martes_inicio;
    private $martes_cierre;
    private $miercoles_inicio;
    private $miercoles_cierre;
    private $jueves_inicio;
    private $jueves_cierre;
    private $viernes_inicio;
    private $viernes_cierre;
    private $sabado_inicio;
    private $sabado_cierre;
    private $domingo_inicio;
    private $domingo_cierre;

     function __construct($id,$lunes_inicio,$lunes_cierre,$martes_inicio,$martes_cierre,$miercoles_inicio,$miercoles_cierre,$jueves_inicio,$jueves_cierre,$viernes_inicio,$viernes_cierre,$sabado_inicio,$sabado_cierre,$domingo_inicio,$domingo_cierre) {
        $this->id = $id; 
        $this->lunes_inicio = $lunes_inicio;
        $this->lunes_cierre = $lunes_cierre;
        $this->martes_inicio = $martes_inicio;
        $this->martes_cierre = $martes_cierre;
        $this->miercoles_inicio = $miercoles_inicio;
        $this->miercoles_cierre = $miercoles_cierre;
        $this->jueves_inicio = $jueves_inicio;
        $this->jueves_cierre = $jueves_cierre;
        $this->viernes_inicio = $viernes_inicio;
        $this->viernes_cierre = $viernes_cierre;
        $this->sabado_inicio = $sabado_inicio;
        $this->sabado_cierre = $sabado_cierre;
        $this->domingo_inicio = $domingo_inicio;
        $this->domingo_cierre = $domingo_cierre;
    }
    public function getId() {
        return $this->id;
    }
    public function getLunes_inicio() {
        return $this->lunes_inicio;
    }
    public function getLunes_cierre() {
        return $this->lunes_cierre;
    }

    public function getMartes_inicio() {
        return $this->martes_inicio;
    }
    
    public function getMartes_cierre() {
        return $this->martes_cierre;
    }
    public function getMiercoles_inicio() {
        return $this->miercoles_inicio;
    }
    public function getMiercoles_cierre() {
        return $this->miercoles_cierre;
    }
    public function getJueves_inicio() {
        return $this->jueves_inicio;
    }
    public function getJueves_cierre() {
        return $this->jueves_cierre;
    }
    public function getViernes_inicio() {
        return $this->viernes_inicio;
    }
    public function getViernes_cierre() {
        return $this->viernes_cierre;
    }
    public function getSabado_inicio() {
        return $this->sabado_inicio;
    }
    public function getSabado_cierre() {
        return $this->sabado_cierre;
    }
    public function getDomingo_inicio() {
        return $this->domingo_inicio;
    }
    public function getDomingo_cierre() {
        return $this->domingo_cierre;
    }
}
?>