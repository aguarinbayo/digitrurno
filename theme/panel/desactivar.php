<?php
error_reporting(0);
$area=$_GET["area"];
$turno=$_GET["turno"];
$id=$_GET["id"];
$user =json_decode( file_get_contents("http://localhost/digi/theme/data/api/".$area."?filter[]=code_Cliente,eq,".$id."&filter[]=turno,eq,".$turno."&transform=1"), true );

$id_cancelar=$user["caja"][0]["idCaja"];

	$datas=[
			"Estado"=>NULL
	];
		$datas=json_encode($datas);
		$opciones = array(
  'http'=>array(
    'method'=>"DELETE",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n",
    'content'=>$datas
  )
);
		$contexto = stream_context_create($opciones);
		$fichero = file_get_contents('http://localhost/digi/theme/data/api/'.$area.'/'.$id_cancelar, false, $contexto);
		

session_destroy();
header("Location: ../../movil/Opciones.php");
?>
