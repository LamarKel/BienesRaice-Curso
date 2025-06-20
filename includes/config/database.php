<?php

function conectarDB(){
    $db = mysqli_connect('localhost', 'root', '1234' ,'bienesraices_crud');

    if(!$db){
        echo "Error no se pude conectar";
        exit;
    }

    return $db;
}