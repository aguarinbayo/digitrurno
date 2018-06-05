<?php

session_start();
include './conexion/Conexion.php';
$link = conectar();
$_SESSION['identificacio'];
$sql1 = "SELECT turno FROM `caja` ORDER by idCaja DESC LIMIT 1 ";
$SQL = "SELECT idClientes from clientes where cedula = '" . $_SESSION['identificacio'] . "'";
$letraturno = "C";
$i = 1;
$resultadoquery = mysqli_query($link, $sql1);
$row1 = mysqli_fetch_array($resultadoquery);
while ($i <= 100) {
    if ($letraturno . $i == $row1[0]) {
        $i++;
        $resultado = mysqli_query($link, $SQL);
        if ($row = mysqli_fetch_array($resultado)) {
            $SQL1 = "INSERT INTO caja values('','" . $letraturno . $i . "','" . $row[0] . "','espera')";
            $resultadoinsersion = mysqli_query($link, $SQL1);
            if ($resultadoinsersion) {
                echo "<i type='text' value='" . $letraturno . $i . "'>";
            }
            break;
        }
    } else {
        if ($row1[0] == $letraturno . '100') {
            $i = 0;
        } else {
            $i++;
        }
    }
}

    /* $resultado = mysqli_query($link, $SQL);
      if ($row = mysqli_fetch_array($resultado)) {
      $SQL1 = "INSERT INTO caja values('','AZ15','" . $row[0] . "','espera')";
      $resultadoinsersion = mysqli_query($link, $SQL1);
      if ($resultadoinsersion) {
      echo '  ';

      }
      } */    