<?php
class Usuario{
    private $id
    private $nombre;
    private $apellido;
    private $correo;
    private $pass;
    private $imagen;
    private $rol;
    private $estado;

    public function Usuario($id,$nombre,$apellido,$correo,$pass,$imagen,$rol,$estado) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->pass = $pass;
        $this->imagen = $imagen;
        $this->rol = $rol;
        $this->estado = $estado;
    }
    public function getId() {
        return $this->id;
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