<?php
    class Header{
        
        public static function Menu($usuario){            
            
            echo "<a href=\"about.php?usuario=$usuario\">About Me</a>";
            echo "<a href=\"projects.php?usuario=$usuario\">My Projects</a>";
            echo "<a href=\"contact.php?usuario=$usuario\">Contact</a>";
            if($usuario == 'admin'){
                echo "
                    <button id=\"btnLogOut\" type=\"button\" class=\"btn btn-outline-danger\" onclick=\"CerrarSesion()\">Log Out</button>
                ";
            }
            else if($usuario == 'vista'){
                echo "<a href=\"vistaUsuario.php\">
                    <button type=\"button\" class=\"btn btn-outline-dark\">Log In</button>
                </a>";
            }
                 
        }
    }

    echo "<script src=\"../controlador/AceptEliminar.js\"></script>"
?>