<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];

    

   

    // Por ejemplo, guardar los datos en una base de datos, enviar un correo electrónico, etc.

    // Ejemplo: guardar los datos en un archivo de texto
    $archivo = fopen("anuncios.txt", "a");
    fwrite($archivo, "Título: " . $titulo . "\n");
    fwrite($archivo, "Contenido: " . $contenido . "\n\n");
    
   
fclose($archivo);

    
    header("Location: confirmacion.php");
    exit(); 
}
?>