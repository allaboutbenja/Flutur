<?php
class Usuario{
    private $nombre;
    private $apellido;
    private $correo;
    private $pass;
    private $imagen;
    private $rol;
    private $estado;

    public function Usuario($nombre,$apellido,$correo,$pass,$imagen,$rol,$estado) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->pass = $pass;
        $this->imagen = $imagen;
        $this->rol = $rol;
        $this->estado = $estado;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }

    public function getCorreo() {
        return $this->correo;
    }
    
    public function getPass() {
        return $this->pass;
    }
    public function getImagen() {
        return $this->imagen;
    }
    public function getRol() {
        return $this->rol;
    }
    public function getEstado() {
        return $this->estado;
    }
}
?>