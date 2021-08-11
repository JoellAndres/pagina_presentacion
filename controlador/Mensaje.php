<?php
    class Mensaje{
        public static function ObtenerNroFilas(){
            //require '../conexion.class.php';

            $db = new Conexion();
    
            $contador_filas = 0;
            
            $query = "SELECT *  FROM `mensaje` "; 
            $resultado = $db->query($query);

            while($row = mysqli_fetch_array($resultado)){        
                $contador_filas++;
            }   

            return $contador_filas;
        }

        public static function MostrarMensajes($iniciar){
            $db = new Conexion();
            
            $query_limit = "SELECT * FROM `mensaje` LIMIT $iniciar,4";           
            
            $res_limit = $db->query($query_limit);

            $table = "";

            while($row = mysqli_fetch_array($res_limit)){
                $table .= "<tr>";
                $table .= "<td> $row[nombre] </td>";
                $table .= "<td> $row[apellido] </td>";
                $table .= "<td> $row[email] </td>";
                $table .= "<td> $row[msj] </td>";
                $table .= "<td> $row[msj_id] </td>";
                $table .= "<td> <button type='button' name=\"del_mensaje\" class='btn btn-danger' onclick='EliminarMensaje($row[msj_id])'> <img src='../imagenes/trash.svg'> </button> </td>";
                $table .= "</tr>";
            }

            return $table;
        }
    
        public static function BusquedaMensaje($identificador, $valorIdentificador){
            $db = new Conexion();
                            
            $table = '';
            $n_filas = 0;

            if(gettype($valorIdentificador) == "integer"){
                $query_busqueda = "SELECT nombre, apellido, email, msj, msj_id  
                FROM `mensaje` 
                WHERE $identificador=$valorIdentificador";
            }
            else{
                $query_busqueda = "SELECT nombre, apellido, email, msj, msj_id  
                FROM `mensaje` 
                WHERE $identificador='$valorIdentificador'";
            }

            $res_busqueda = $db->query($query_busqueda);

            while($row = mysqli_fetch_array($res_busqueda)){
                $table .= "<tr>";
                $table .= "<td> $row[nombre] </td>";
                $table .= "<td> $row[apellido] </td>";
                $table .= "<td> $row[email] </td>";
                $table .= "<td> $row[msj] </td>";
                $table .= "<td> $row[msj_id] </td>";
                $table .= "</tr>";            
            }

            return $table;
        }
    
    }
?>