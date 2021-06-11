<?php
    require 'conexion.class.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' > 
        <link rel="stylesheet" type="text/css" href="styles.php">  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </head>

    <body id="bodyMessages">
        <section class="msjs" id="msjs">
            <h1>Mensajes</h1>

            <div class="table">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Mensaje</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            $db = new Conexion();

                            $query = "SELECT nombre, apellido, email, msj, msj_id  FROM `mensaje` ";                    
                            $res = $db->query($query);
                            $table = '';

                            while($row = mysqli_fetch_array($res)){
                                $table .= "<tr>";
                                $table .= "<td> $row[nombre] </td>";
                                $table .= "<td> $row[apellido] </td>";
                                $table .= "<td> $row[email] </td>";
                                $table .= "<td> $row[msj] </td>";
                                $table .= "<td> $row[msj_id] </td>";
                                $table .= "</tr>";
                            }                    
                            
                            echo $table;
                        ?>
                    </tbody>
                </table>
            </div>

            <a href="index.php">Back to home</a>
        </section>
    </body>
</html>