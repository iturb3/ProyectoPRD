<?php

    include("conexion.php");

    //print_r($_GET);

    $id = $_GET["id"];

    $consulta = "SELECT * FROM usuarios WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();

//    echo "<pre>";
//    print_r($usuario);
//    echo "</pre>";

    //echo $usuario[0]["nombre"];

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Usuario</title>
        <!--  Bootstrap      -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
        
        <style>
             body{
                padding: 20px;
            }
       form {
  background-color: white;
  margin: 250 auto;
  width: 400px;
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
    background-color: yellow;
}
    </style>
        
    </head>
    
    <body>
        
        <h1>Editar Usuario</h1>
        
        <form action="editar_respuesta.php" method="post">
            <div>Nombre de usuario</div>
            <input type="text" name="nombre" value="<?php echo $usuario[0]["nombre"]; ?>"><br><br>
            
            <div>Contraseña</div>
            <input type="text" name="correo" value="<?php echo $usuario[0]["correo"]; ?>"><br><br>

            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button>Modificar Usuario</button>
            
        </form>
    
    </body>
    
</html>




