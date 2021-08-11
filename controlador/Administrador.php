<?php    
    session_start();

    class Administrador{
        private $usuario;
        private $clave;

        public function __construct($usuario, $clave){
            $this->usuario = $usuario;
            $this->clave = $clave;
        }

        public function Verificar(){
            require '../read.php';
            $claveCorrecta = "";

            BuscarUsuarioYClave($this->usuario, $claveCorrecta);

            if(password_verify($this->clave, $claveCorrecta)){                  
                session_start();
                $_SESSION['usuar'] = '_admin';
                header("location: ../vista/index.php?usuario=admin");
            }
            else{   
                header("location: ../vista/vistaUsuario.php?bandera=1");                                 
            }
        }
    }
?>