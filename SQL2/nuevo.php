<html>
    <head>
        <title>Gestión de Inventario</title>
        <meta charset="utf-8">
    </head>
    
    <body>
    
        <h1 style="background-color:purple;">Gestión de Inventario</h1>
        
        <form action="nuevo_respuesta.php" method="post">
            <div>ID del producto</div>
            <input type="text" name="nombre"><br><br>
            
            <div>Stock</div>
            <input type="text" name="correo"><br><br>
            
            <div>Aleación</div>
            <input type="text" name="curso"><br><br>
            
            <div>Modelo</div>
            <input type="text" name="password"><br><br>
            
            <button>Añadir producto</button>
            <button onclick="location.href='/ITURBE/Joyerias%20vivaldi/SQL2/ver.php'">Ver el inventario</button>
        </form>
        
    <script>
        //alert("Hola");

    </script>
    </body>

</html>


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