<?php

function conecta(){

    try{
        $cadena='mysql:host=localhost;dbname=project_laravel';
        $conexion= new PDO ($cadena,'homestead','secret');
        return true;
    }
    catch(PDOException $e){
        echo "ERROR". $e->getmessage();

    }
}
$conecta = conecta();
if($conecta==true){
    echo"<h1>Estamos conectados a la dba </h1>";
}
?>