<?php

function conectar(){
    $host='localhost';
    $user='root'; 
    $pass=''; 
    $bd_name='turnofacil';
    $link=  mysqli_connect($host, $user, $pass) or die ("Error en la conexion");
    mysqli_select_db($link, $bd_name)or die('error en la seleccion de la base de datos');
    return $link;
}
