<?php
class Horarios{
    private int $id;
    private int $idRestaurant;
    private string $lunes_inicio;
    private string $lunes_cierre;
    private string $martes_inicio;
    private string $martes_cierre;
    private string $miercoles_inicio;
    private string $miercoles_cierre;
    private string $jueves_inicio;
    private string $jueves_cierre;
    private string $viernes_inicio;
    private string $viernes_cierre;
    private string $sabado_inicio;
    private string $sabado_cierre;
    private string $domingo_inicio;
    private string $domingo_cierre;

    function __construct($id,$idRestaurant,$lunes_inicio,$lunes_cierre,$martes_inicio,$martes_cierre,$miercoles_inicio,$miercoles_cierre,$jueves_inicio,$jueves_cierre,$viernes_inicio,$viernes_cierre,$sabado_inicio,$sabado_cierre,$domingo_inicio,$domingo_cierre) {
        $this->id = $id; 
        $this->idRestaurant = $idRestaurant; 
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
    public function getId():int {
        return $this->id;
    }
    public function getIdRestaurant():int {
        return $this->idRestaurant;
    }
    public function getLunes_inicio():string {
        return $this->lunes_inicio;
    }
    public function getLunes_cierre():string {
        return $this->lunes_cierre;
    }

    public function getMartes_inicio():string {
        return $this->martes_inicio;
    }
    
    public function getMartes_cierre():string {
        return $this->martes_cierre;
    }
    public function getMiercoles_inicio():string {
        return $this->miercoles_inicio;
    }
    public function getMiercoles_cierre():string {
        return $this->miercoles_cierre;
    }
    public function getJueves_inicio():string {
        return $this->jueves_inicio;
    }
    public function getJueves_cierre():string {
        return $this->jueves_cierre;
    }
    public function getViernes_inicio():string {
        return $this->viernes_inicio;
    }
    public function getViernes_cierre():string {
        return $this->viernes_cierre;
    }
    public function getSabado_inicio():string {
        return $this->sabado_inicio;
    }
    public function getSabado_cierre():string {
        return $this->sabado_cierre;
    }
    public function getDomingo_inicio():string {
        return $this->domingo_inicio;
    }
    public function getDomingo_cierre():string {
        return $this->domingo_cierre;
    }
}
?>