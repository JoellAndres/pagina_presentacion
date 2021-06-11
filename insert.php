<?php
    !isset($_POST) ? die('Acceso denegado') : '';

    require 'conexion.class.php';

    $db = new Conexion();

    if(isset($_POST['alta'])){
        $nombre = $_POST['name1'];
        $apellido = $_POST['lastName1'];
        $email = $_POST['email1'];
        $msj = $_POST['message1'];
        
        $query = "INSERT INTO `mensaje`(`nombre`, `apellido`, `email`, `msj`) 
                VALUES ('$nombre','$apellido','$email','$msj')";
        
        $result = $db->query($query);
        
        $db->affected_rows < 0 ? print 'Hubo un problema' : header("location: mensajeEnviado.html");
    }            
?>