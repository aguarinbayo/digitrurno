<?php
session_start();
include './conexion/Conexion.php';
$link=  conectar();
//$usuario=$_POST['Usuario'];
$pass=$_POST['contraseña'];
$_SESSION['identificacio'] = $_REQUEST["P"];
$sql="SELECT nombre,password,cedula FROM `clientes` WHERE cedula= '".$_SESSION['identificacio']."' AND password= '". $pass."' ";

$result=  mysqli_query($link, $sql);

if($row = mysqli_fetch_array($result)){
      header('Location: Opciones.php');
 }else{
     echo 'no entro';
 }
