<?php
    
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];

    echo "En nombre llego: " . $nombre;
    echo "<br>";
    echo "En edad llego: " . $edad;

    echo "<br><br>";


    if($edad >= 1 && $edad <= 12){
        echo $nombre . " eres un niñ@";
    }else if($edad >= 13 && $edad <= 20){
        echo $nombre . " eres un adolescente";
    }else if($edad >= 21 && $edad <= 35){
        echo $nombre . " eres un adulto joven";
    }else if($edad > 36){
        echo $nombre . " ya estas grande =P ";
    }
   
?>