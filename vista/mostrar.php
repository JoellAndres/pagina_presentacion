<?php
    require '../controlador/Mensaje.php';
    require '../conexion.class.php';

    $n_filas = Mensaje::ObtenerNroFilas();
    $paginas = $n_filas/4;
    $paginas = ceil($paginas);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/styles.php">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </head>
    <body>

        <?php
            //error_reporting(0);
            session_start();
            
            if(!isset($_SESSION['usuar'])){
                //$varSession = $_SESSION['usuar'];

                //if($varSession == null || $varSession = ""){
                    echo"
                    <div class=\"unaccess\">
                        <h1>No tiene acceso</h1>
                        <a href=\"index.php\">Back to home</a>
                    </div>
                    ";

                    die();
                //}
            }
            
        ?>    
        
        <?php
            if(!$_GET){
                header('location: mostrar.php?pagina=1');
            }
        ?>

        <?php

            $inicio = ($_GET['pagina']-1) * 4;
            $mensajesCompleto = Mensaje::MostrarMensajes($inicio);            

        ?>

        <div class="table">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Mensaje</th>
                        <th>#</th>
                        <th>del</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $mensajesCompleto ?>
                </tbody>
            </table>    
        </div>

        <nav class='paginacion' aria-label='Page navigation example'>
            <ul class='pagination'>
                <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : ''?>">
                    <a class='page-link' href="mostrar.php?pagina=<?php echo $_GET['pagina']-1?>">
                        Previous
                    </a>
                </li>
                
                <?php for($i=0; $i<$paginas; $i++): ?>
                    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : ''?>">
                        <a href="mostrar.php?pagina=<?php echo $i+1?>" class='page-link'>
                            <?php echo $i+1?>
                        </a>
                    </li>
                <?php endfor; ?>                
                
                <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : ''?>">
                    <a class="page-link" href="mostrar.php?pagina=<?php echo $_GET['pagina']+1?>">
                        Next
                    </a>
                </li>
            </ul>
        </nav>
        
        <a href="verMensajes.php">Back</a>
        <script src="../controlador/AceptEliminar.js"></script>
    </body>
</html>