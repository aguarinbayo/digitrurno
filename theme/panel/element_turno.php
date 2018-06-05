<!DOCTYPE html>
<html>
<?php $home->isert("head"); ?>
<body>
		<button id="Cancelar">Cancelar</button>
</body>
</html>

<script type="">
	$(document).ready(function(){
			$("#Cancelar").click(function(){
					window.location.href="desactivar.php?id=&turno=<?php echo $turno_cli; ?>";
			});

	});
</script>