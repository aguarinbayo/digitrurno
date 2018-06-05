<?php
error_reporting(0);
require_once dirname(dirname(__DIR__))."/function.php";
$url=__DIR__."/elementturno.php";

$home=new home();
$home->sesion($url);
$id=$_GET["id"];
$turno=$_GET["turno"];



/*



*/

$data_tam =json_decode( file_get_contents("http://localhost/digi/theme/data/api/".$turno."?filter=code_Cliente,eq,".$id."&transform=1"), true );

if(isset($data_tam[$turno][0]) && $data_tam[$turno][0]["Estado"]=="activo"):
	$turno_cli=$data_tam[$turno][0]["turno"];
	$date=new DateTime($data_tam[$turno][0]["fecha"],new DateTimeZone('America/Bogota'));
	$dateF=$date->format('Y-m-d H:i');
	$fec=explode(" ", $dateF);	

else:
	
	$user =json_decode( file_get_contents("http://localhost/digi/theme/data/api/clientes?filter=idClientes,eq,".$id."&transform=1"), true );

	$total=json_decode( file_get_contents("http://localhost/digi/theme/data/api/".$turno."?transform=1"), true );
$data=end($total["caja"]);
if (isset($data[0])) {
	$fecha1 = new DateTime($total["caja"][$data]["fecha"],new DateTimeZone('America/Bogota'));
}else{
	$fecha1 = new DateTime("",new DateTimeZone('America/Bogota'));
}

$fecha2 = new DateTime("",new DateTimeZone('America/Bogota'));
$intervalo = $fecha1->diff($fecha2);
$validinter= $intervalo->format('%h%');


if($validinter>1){
$date=new DateTime("",new DateTimeZone('America/Bogota'));
$date->modify('+10 minute');
$dateF=$date->format('Y-m-d H:i');
$fec=explode(" ", $dateF);
}else{
$date=new DateTime("",new DateTimeZone('America/Bogota'));
$date->modify('+10 minute');
$dateF=$date->format('Y-m-d H:i');
$fec=explode(" ", $dateF);	
}

	$count=count($total[$turno]);
	$tunos=$total[$turno][0]["turno"];
		if($turno=="caja"){
			$letra="C";
		}else if($turno=="asesor"){
			$letra="V";
		}else if($turno=="pagos"){
			$letra="P";
		}else if($turno=="asistentes"){
			$letra="A";
		}
	$array=explode($letra, $tunos);

	$Nu_turno=$letra.($count+1);
	$turno_cli=$Nu_turno;
	$datas=[
			"idCaja"=>"",
			"turno"=>$Nu_turno,
			"code_Cliente"=>$user["clientes"][0]["idClientes"],
			"Estado"=>"activo",
			"fecha"=>$dateF
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
		$contexto = stream_context_create($opciones);
		$fichero = file_get_contents('http://localhost/digi/theme/data/api/'.$turno, false, $contexto);
		

endif;

?>


<!DOCTYPE html>
<html>
<?php $home->isert("head"); ?>

<body>
<div class="container">
		<div class="col-md-12 turno">	
			<div class="row">
				<div class="col-md-8 offset-md-2 interno">
					<h1 class="col-md-8 offset-md-2 titule"><?php echo $turno_cli; ?></h1>
					<div class="col-md-8 offset-md-2 fecha">
						<div class="row">
							<div class="col-md-3 imgT">
								<img src="../img/calendario.png">
							</div>
							<div class="col-md-9 textal">
								<div class="col-md-12">Fecha del turno:</div>
								<div class="col-md-12"><h2> <?php echo $fec[0]?></h2></div>
							</div>
						</div>
					
					</div>
					<div class="col-md-8 offset-md-2 hora">
						<div class="row">
							<div class="col-md-3 imgT">
								<img src="../img/reloj.png">
							</div>
							<div class="col-md-9">
								<div class="col-md-12">Posible hora de atencion:</div>
								<div class="col-md-12"> <h2><?php echo $fec[1]?></h2></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>	
</div>

<style type="text/css">
	.turno{
		text-align: center;
	}
	.interno{
		border-radius: 5px;
		box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
		background-color: #f1f1f1;
		padding: 5%;


	}
	.fecha img,.hora img{
		    width: 100%;

		    max-width: 50px;
			
	}
	.titule,.fecha,.hora{
		border-radius: 5px;
		box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.5);
		background-color: #fff;
		margin-bottom: 5%;
	}

	.titule{
		padding: 5%;
		margin-bottom: 11%;
		font-weight: bolder;
	}
	.fecha,.hora{
		
		text-align: left;
	}
	.textal{
		margin: auto;
	}
	.imgT{
		background: #6481F4;
		padding: 2%;
		text-align: center;
		border-radius: 5px 0px 0px 5px
	}
</style>