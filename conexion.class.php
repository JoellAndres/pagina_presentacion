<?php
    require 'config/config.php';
    
    class Conexion extends Mysqli{

        public function __construct(){
            parent::__construct(HOST, USER_NAME, PASS, DB_NAME);
            $this->connect_error ? die('Error al conectar') : '';
        }
    }

    //$db = new Conexion();

    
?>