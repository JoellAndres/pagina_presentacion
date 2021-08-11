<?php
    //error_reporting(0);
    session_start();
                
    if(!isset($_SESSION['usuar'])){
        //$varSession = $_SESSION['usuar'];

        //if($varSession == null || $varSession = ""){
            echo"
            <div class=\"unaccess\">
                <h1>No tiene acceso</h1>
                <a href=\"../vista/index.php\">Back to home</a>
            </div>
            ";

            die();
        //}
    }
    require '../conexion.class.php';

    !isset($_POST) ? die('Acceso denegado') : '';

    $db = new Conexion();

    if(isset($_GET['aEliminar'])){
        
        if($_GET['aEliminar'] == 'mensaje'){
            $idAEliminar = $_GET['id'];

            $query = "DELETE FROM `mensaje` WHERE msj_id=$idAEliminar";
            $result = $db->query($query);

            if($db->affected_rows < 0){
                print 'Hubo un problema';
            }else{
                header("location: ../vista/mostrar.php");
            }
        }

        if($_GET['aEliminar'] == 'proyecto'){
            $idProyecto = $_GET['id_proyecto'];

            $queryP = "DELETE FROM `proyecto` WHERE id=$idProyecto";
            $resultado = $db->query($queryP);

            if($db->affected_rows < 0){
                print 'Hubo un problema';
            }else{
                header("location: ../vista/projects.php?usuario=admin");
            }
        }
    }
?>