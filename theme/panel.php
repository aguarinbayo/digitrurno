<?php
$url=__DIR__."/panel/modulo.php";
require_once dirname(__DIR__)."/function.php";
$home=new home();
$home->sesion($url);

?>

<!DOCTYPE html>
<html>

	
<?php $home->isert("head"); ?>