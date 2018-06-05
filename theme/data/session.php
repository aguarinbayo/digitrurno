<?php

session_start();

$id=$_GET["cedula"];

$data_tam =json_decode( file_get_contents("http://localhost/digi/theme/data/api/clientes?filter=cedula,eq,".$id."&transform=1"), true );


if($data_tam['clientes']):
$_SESSION["user"]=[
	"id"=>$data_tam["clientes"][0]["idClientes"],
	"cedula"=>$data_tam["clientes"][0]["cedula"],
	"nombre"=>$data_tam["clientes"][0]["nombre"]
];

else:
echo "El Usuario no esta registrado";
endif;


?>