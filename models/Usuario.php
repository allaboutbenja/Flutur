<?php
class Usuario{
    private $rut;
    private $nombre;
    private $apellido;
    private $edad;
    private $correo;
    private $fechaCreacion;
    private $pass;
    private $imagen;
    private $admin;

    function __construct($rut, $nombre,$apellido,$edad,$correo,$fechaCreacion,$pass,$imagen,$admin) {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->fechaCreacion = $fechaCreacion;
        $this->pass = $pass;
        $this->imagen = $imagen;
        $this->admin = $admin;
    }
    function getRut() {
        return $this->rut;
    }
    function getNombre() {
        return $this->nombre;
    }
    function getApellido() {
        return $this->apellido;
    }
    function getEdad() {
        return $this->edad;
    }
    function getCorreo() {
        return $this->correo;
    }
    function getFechaCreacion() {
        return $this->fechaCreacion;
    }
    function getPass() {
        return $this->pass;
    }
    function getImagen() {
        return $this->imagen;
    }
    function getAdmin() {
        return $this->admin;
    }
}
?>