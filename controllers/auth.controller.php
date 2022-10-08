<?php
    require '../models/Usuario.php';

    class AuthController {
    
        private IConnectDB $connectDB;

        function __construct(IConnectDB $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function login($user, $pass){
           $this->connectDB->connect();
            $sql = "SELECT * FROM users WHERE correo = '$user' AND password='$pass'";
            $resp = $this->connectDB->getDB()->query($sql);
            if($rs = mysqli_fetch_array($resp)){
                $user = new Usuario($rs['id'],$rs['nombre'],$rs['apellido'],$rs['correo'],$rs['password'],$rs['imagen'],$rs['rol'],$rs['estado'],);
                session_start();
                $_SESSION['id'] = $user->getId();
                $_SESSION['nombre'] = $user->getNombre();
                $_SESSION['apellido'] = $user->getApellido();
                $_SESSION['correo'] = $user->getCorreo();
                $_SESSION['password'] = $user->getPass();
                $_SESSION['imagen'] = $user->getImagen();
                $_SESSION['rol'] = $user->getRol();
                $_SESSION['estado'] = $user->getEstado();
                $this->connectDB->disconnect();
                header("location:  ../index.php");
                return;
            }
            $_SESSION['user'] = null;
            $this->connectDB->disconnect();
            header("location: ../pages/login.php?AuthError");
            return;
        }

        public function register($name, $lastName,$correo, $pass){
            $this->connectDB->connect();
            $sql = "INSERT INTO `users`(`nombre`, `apellido`, `correo`, `password`) VALUES ('$name','$lastName','$correo','$pass')";
            $resp = $this->connectDB->getDB()->query($sql);
            if($this->connectDB->getDB()->affected_rows){
                $this->connectDB->disconnect();
                header("location:  ../pages/login.php");
                return;
            }
            $this->connectDB->disconnect();
            header("location:  ../pages/register.php?RegisterError");
            return;
        }
    }


?> 