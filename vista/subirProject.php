<!DOCTYPE html>
<html>
    <head>
        <title>Joel.T | Add Project</title>
        <link rel="stylesheet" type="text/css" href="../css/styles.php">   
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
        <meta charset='utf-8' >
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

        <h1 class="titleP">Upload a New Project</h1>
        
        <form id="frm_proyecto" action="../controlador/insert.php" method="post" enctype="multipart/form-data" onsubmit="return ValidarCamposProyecto()">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Project´s Name</span>
                <input type="text" id="nameProject" name="nameProject" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">URL Git</span>
                <input type="url" id="urlProject" name="urlProject" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" id="descriptionProject" name="descriptionProject" aria-label="With textarea" ></textarea>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Choose a picture</label>
                <input class="form-control" type="file" id="formFile" name="formFile">
            </div>

            <button type="submit" name="btn_project" class="btn btn-outline-primary btn-lg">Send</button>
        </form>

        <a href="projects.php?usuario=admin">Go to Projects</a>
        
        <script src="../controlador/Validacion.js"></script>  
    </body>
</html>