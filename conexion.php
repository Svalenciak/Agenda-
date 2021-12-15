<?php

$contraseña ='';
$usuario = 'root';
$basedatos= 'agenda';

try {
    $bd = new PDO(
        'mysql:host=localhost;
         dbname='.$basedatos,
         $usuario,
         $contraseña
    );
} catch (exception $e) {
    echo "Error de Conexion ".$e->getMessage();
}

?>