<?php
error_reporting(0);
session_start();
$usuario = $_POST['nombre'];
$pass = $_POST['Pass'];
$Tel = $_POST['Telefono'];
$_SESSION['identificacio'] = $_REQUEST["P"];

$data_tam =json_decode( file_get_contents("http://localhost/digi/theme/data/api/clientes?filter=cedula,eq,".$_SESSION['identificacio']."&transform=1"),true);

var_dump($_SESSION['identificacio']);

    if(isset($data_tam["clientes"][0])):
        echo "Error se encuentra ya registro";
    else:
$datas=[
            "idClientes"=>"",
            "cedula"=>$_SESSION['identificacio'],
            "nombre"=>$usuario,
            "telefono"=>$Tel,
            "password"=>$pass
    ];
        $datas=json_encode($datas);
        $opciones = array(
  'http'=>array(
    'method'=>"POST",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n",
    'content'=>$datas
  )
);

        var_dump($datas);
        $contexto = stream_context_create($opciones);
        $fichero = file_get_contents('http://localhost/digi/theme/data/api/clientes', true, $contexto);

         header('Location: ../Opciones.php');

    endif;
        

/*
include '../conexion/Conexion.php';
$link = conectar();

$sqlValidar = "SELECT * FROM `clientes` WHERE cedula = '" . $_SESSION['identificacio'] . "'";
$sql = "INSERT INTO `clientes` VALUES ('','" . $_SESSION['identificacio'] . "','" . $usuario . "','" . $Tel . "','" . md5($pass) . "')";

$resultvalidation = mysqli_query($link, $sqlValidar);
if (!$row = mysqli_fetch_array($resultvalidation)) {
        if ($row[1] == $_SESSION['identificacio']) {
        echo "Datos Insertados erroneos";
    } else {
        $result = mysqli_query($link, $sql);
        if ($result) {

            header('Location: ../Opciones.php');
        } else {
            echo 'opailas';
        }
    }
} else {
    echo 'error en el registro revise nuevamente';
}
*/