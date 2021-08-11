<?php
    function BuscarUsuarioYClave($us, &$cl){
        require 'conexion.class.php';

        !isset($_POST) ? die('Acceso denegado') : '';

        $db = new Conexion();

        $usuario = "";
        $clave = "";

        if(isset($_POST['us']) || isset($_POST['newPass'])){
            $query = "SELECT * FROM `claveusuario` WHERE usuario='$us'";                    
            $res = $db->query($query);            

            while($row = mysqli_fetch_array($res)){
                //$usuario = $row['usuario'];
                $clave = $row['clave'];
            }
        }        

        //$us = $usuario;
        $cl = $clave;        
    }    

    function MostrarProyecto($user){
        $arreglo = array();
        $i = 0;

        require 'conexion.class.php';
        $db = new Conexion();

        $querySelect = "SELECT * FROM `proyecto`";
        $resultado = $db->query($querySelect);

        while($row = $resultado->fetch_assoc()){            
            $nom = $row['nombre'];
            $linkGit = $row['url'];
            $descrip = $row['descripcion'];
            $img = base64_encode($row['imagen']);
            $id_proyecto = $row['id'];

            $arreglo[$i] = "<div class=\"contenedor-proyecto\">
                <img src=\"data:image/jpg;base64,$img\" height=\"430px\" width=\"430px\" border=\"1\"/>
                
                <div class=\"titulo-proyecto\">
                    <h3>$nom</h3>
                </div>
                
                
                <div class=\"link-git\"> 
                    <a href=\"$linkGit\" target=\"_blank\">
                        <button type=\"button\" class=\"btn btn-warning\">Link GIT</button>
                    </a>
                </div>

                <div class=\"descripcion-proyecto\">
                    <a href=\"javascript:void(0);\" onclick=\"window.open('../vista/descripcion.php?id=$descrip', 'popup', 'top=100, left=100, width=599, height=300, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')\" rel=\"nofollow\">
                        <button type=\"button\" class=\"btn btn-warning\">Description</button>
                    </a>
                </div>                

            ";

            if($user == 'admin'){
                $arreglo[$i] .= "
                    <div class=\"delete-proyecto\"> 
                                
                        <button type='button' name=\"del_proyecto\" class='btn btn-danger' onclick='EliminarProyecto($id_proyecto)'> 
                            Delete 
                        </button>
                                
                    </div>
                </div>
                ";
            }
            else{
                $arreglo[$i].="</div>";
            }
            

            $i = $i + 1;
        }

        return $arreglo;
    }
?>