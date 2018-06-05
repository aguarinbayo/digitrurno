	<?php


		require_once("function.php");

		$home=new home();

	?>

<!DOCTYPE html>
<html>


<?php
	$home->isert("head");

?>




<body >
	<div class="container">
	
	<div id="trabajo" class="row">
		<div class="col-md-12 bd" style="">
		<div class="row">
		<form action="" class="col-md-12" id="form">
			<div class="row">
				<input type="text" placeholder="Identificacion" name="cedula" id="cedula" class="col-hidden-3 col-md-8">
				
			</div>		
		</form>
	<div class="col-md-12">		
	<table class="table_teclado col-hidden-3 col-md-8" id="teclado">
		<tr class="row">
			<td class="col-md-4"><div class="col-md-12">1</div></td>
			<td class="col-md-4"><div class="col-md-12">2</div></td>
			<td class="col-md-4"><div class="col-md-12">3</div></td>
		</tr>
		<tr class="row">
			<td class="col-md-4"><div class="col-md-12">4</div></td>
			<td class="col-md-4"><div class="col-md-12">5</div></td>
			<td class="col-md-4"><div class="col-md-12">6</div></td>
		</tr>
		<tr class="row">
			<td class="col-md-4"><div class="col-md-12">7</div></td>
			<td class="col-md-4"><div class="col-md-12">8</div></td>
			<td class="col-md-4"><div class="col-md-12">9</div></td>
		</tr>
		<tr class="row">
			<td class="col-md-8"><div class="col-md-12">0</div></td>
			<td class="col-md-4"><div class="col-md-12 dele"><img class="btn_delete" src="img/borrar.png"></div></td>
		</tr>
	</table>
</div>
<div class="col-md-12 evio">	
		<button  id="submit"  class="col-md-offset-3 col-md-8">Enviar</button>

		<div id="text" class="col-hidden-3 col-md-8">	</div>
</div>	
		</div>
	</div>
	</div>
</div>
</body>

	<?php $home->isert("footer");?>

</html>