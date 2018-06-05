<?php $id_cliente=$_SESSION["user"]["id"]; ?>


	<style>
		body{
			background: rgb(241,241,241); 
		}
		.menu img{
			width:auto;
			max-height: 300px;
			height: 200px;
		}
		.menu .row{
			padding: 5%;
		}
		.menu .opcion .row{
			padding-bottom: 5%;
			background: #fff;
			border-radius: 5px;
			margin:auto 0;
			margin-bottom: 5%;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.4);
			 text-decoration-line: none;
   			 text-decoration: none;
		}

		.menu .text{
			text-align: center;
			margin: auto;
		}
		.menu .opcion .row:hover{
			background: #58A8F8;
			box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.4);
		}
		h3{
			text-transform: uppercase;
    		text-align: center;
		}
		a:link{
			color: #000;
			
		}

		.region{
			    background: #f1f1f1;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
}

.asesores{
	background:#07DEC7;
}

		
	</style>

<body>
	
	<div class="container">
		<div class="row region">
			<h3 class="col-md-12"><?php echo $_SESSION["user"]["nombre"] ?></h3>
			<div class="col-md-12 menu">
				<div class="row">
					<div class="col-md-6 opcion col-sm-12">
						
							<a href="panel/turno.php?id=<?php echo $id_cliente ?>&turno=asesor" class="row asesores">
								<div class="col-md-6 col-sm-12">
										<img src="img/asesores.png">
								</div>
							
							<div class="col-md-6 texto col-sm-12 text">
								<h1>Asesores</h1>
								<h3>Comerciales</h3>
							</div>

							</a>
					
					</div>
					<div class="col-md-6 opcion col-sm-12">
						<a href="panel/turno.php?id=<?php echo $id_cliente ?>&turno=caja" class="row">
							<div class="col-md-6 col-sm-12">
								<img src="img/cajero.png" alt="Cajeros">
							</div>
							<div class="col-md-6 col-sm-12 text">
								<h1>Caja</h1>
								
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>

</html>