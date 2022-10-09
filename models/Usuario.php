<?php
class Usuario{
    private int $id;
    private string $nombre;
    private string $apellido;
    private string $correo;
    private string $pass;
    private string $imagen;
    private int $rol;
    private int $estado;

    function __construct($id,$nombre,$apellido,$correo,$pass,$imagen,$rol,$estado) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->pass = $pass;
        $this->imagen = $imagen;
        $this->rol = $rol;
        $this->estado = $estado;
    }
    public function getId():int {
        return $this->id;
    }
    public function getNombre():string {
        return $this->nombre;
    }
    public function getApellido():string {
        return $this->apellido;
    }

    public function getCorreo():string {
        return $this->correo;
    }
    
    public function getPass():string {
        return $this->pass;
    }
    public function getImagen():string {
        return $this->imagen;
    }
    public function getRol():int {
        return $this->rol;
    }
    public function getEstado():int {
        return $this->estado;
    }
}
?>