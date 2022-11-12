<?php
    include("conexion.php");

    //Paso 1.
    $consulta = "SELECT * FROM usuarios";

    //Paso 2.
    $query = $bd->prepare($consulta);

    //Paso 3.
    $query->execute();

    //Paso 4. Traer la información de la cosulta
    $usuarios = $query->fetchAll();

    
//    echo "<pre>";
//    print_r($usuarios);
//    echo "</pre>";

    //echo $usuarios[1]["correo"];
?>

<html>
    <head>
        <title>Ver Usuarios</title>
        <meta charset="utf-8">
        
        <!--   Jquery     -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        
        <!--  Bootstrap      -->
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
        
        <h1>Lista de Administradores</h1>
        
        <table border="2" class="table table-striped">
            <tr>
                
                <td>Nombre</td>
                <td>Correo</td>
                <td>Rol</td>
                <td>Contraseña</td>
                <td>Editar</td>
                <td>Borrar Administrador</td>
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
        
        <br><br>
        
        <a class="btn btn-primary" href="nuevo.php">Nuevo Usuario</a>
        <a class="btn btn-primary" href="/ProyectoPRD/menu.html">Regresar al menú principal</a>

    
        <script>
            
            $(".icon-edit").click(function(){
               
                var id = $(this).attr("usid");
                
                window.location = "editar.php?id=" + id;
                
            });
            
            $(".icon-borrar").click(function(){
                
                var idx = $(this).attr("usid");
                
                if(confirm("Este usuario perderá sus privilegios de administrador, ¿continuar? Esta acción es irreversible")){ 
                    window.location = "eliminar.php?id=" + idx; 
                }
                
            });
        
            
            // sintaxis de un GET
            //http://localhost/curso/ver.php?nombre=Diana
        
        </script>
    </body>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario registro</title>
    <style>
       form {
  /* Centrar el formulario en la página */
  background-color: white;
  margin: 250 auto;
  width: 400px;
  /* Esquema del formulario */
  padding: 1em;
  border: 1px solid black;
  border-radius: 1em;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}

label {
  /* Tamaño y alineación uniforme */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input,
textarea {
  /* Para asegurarse de que todos los campos de texto tienen la misma configuración de letra
     Por defecto, las áreas de texto tienen un tipo de letra monoespaciada */
  font: 1em sans-serif;

  /* Tamaño uniforme del campo de texto */
  width: 300px;
  box-sizing: border-box;

  /* Hacer coincidir los bordes del campo del formulario */
  border: 1px solid #999;
}

input:focus,
textarea:focus {
  /* Destacado adicional para elementos que tienen el cursor */
  border-color: #000;
}

textarea {
  /* Alinear los campos de texto multilínea con sus etiquetas */
  vertical-align: top;

  /* Proporcionar espacio para escribir texto */
  height: 5em;
}

.button {
  /* Alinear los botones con los campos de texto */
  padding-left: 90px;
   /* mismo tamaño que los elementos de la etiqueta */
}

button {
  /* Este margen adicional representa aproximadamente el mismo espacio que el espacio
     entre las etiquetas y sus campos de texto */
  margin-left: .5em;
} 

body{
    background-color: rosybrown;
}
    </style>
</head>

</html>
</html>