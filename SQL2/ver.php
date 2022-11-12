<?php
    include("conexion.php");

    //Paso 1.
    $consulta = "SELECT * FROM usuarios";

    //Paso 2.
    $query = $bd->prepare($consulta);

    //Paso 3.
    $query->execute();

    //Paso 4. Traer la información de la consulta
    $usuarios = $query->fetchAll(); ?>

<html>
    <head>
        <title>Gestión de Inventario</title>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        
        <style>
            
            body{
                padding: 20px;
            }
            
            tr{
              text-align: center;
            }
            
            .icon-borrar{
                width: 20px;
                cursor: pointer;
            }
            
            .icon-edit{
                width: 30px;
                cursor: pointer;
            }
        </style>
    </head>
    
    <body>
        
        <h1>Gestión de Inventario</h1>
        
        <table border="2" class="table table-striped">
            <tr>
                <td>ID del producto</td>
                <td>Stock</td>
                <td>Aleación</td>
                <td>Modelo</td>
                <td>Editar modelo</td>
                <td>Eliminar del inventario</td>
            </tr>
            
            <?php 
                for($x=0; $x < count($usuarios); $x++){

            ?>  
                <tr>
                    
                    <td><?php echo $usuarios[$x]["nombre"]; ?></td>
                    <td><?php echo $usuarios[$x]["correo"]; ?></td>
                    <td><?php echo $usuarios[$x]["curso"]; ?></td>
                    <td><?php echo $usuarios[$x]["pass"]; ?></td>
                    <td>
                            <img class="icon-edit" src="img/edit.png" usid="<?php echo $usuarios[$x]["id"] ?>">
                    </td>
                    <td>
                        <img class="icon-borrar" src="img/delete.png" usid="<?php echo $usuarios[$x]["id"] ?>">
                    </td>
                </tr>
            <?php
                }
            ?>
            
        </table>
        <a class="btn btn-primary" href="nuevo.php">Nuevo Artículo</a>
        <a class="btn btn-primary" href="/ProyectoPRD/menu.html">Regresar al menú principal</a>

        <br><br>
        
    
        <script>
            
            $(".icon-edit").click(function(){
               
                var id = $(this).attr("usid");
                
                window.location = "editar.php?id=" + id;
                
            });
            
            $(".icon-borrar").click(function(){
                
                var idx = $(this).attr("usid");
                
                if(confirm("¿Está seguro qué desea eliminar este artículo? Esta acción es irreversible")){ 
                    window.location = "eliminar.php?id=" + idx; 
                }
                
            });
        
        </script>
    </body>
    
</html>