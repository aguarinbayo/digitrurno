<?php 
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="Css/Botones.css" />
        <title></title>
    </head>
    <body><table align="center">
            <tr>
                <td><form method="post" action="turnoVista.php?id=<?php echo $_SESSION['identificacio']; ?>&turno=caja">
                        <input type="submit" class="button" value="Caja">
                    </form></td>
                <td><form method="post" action="turnoVista.php?id=<?php echo $_SESSION['identificacio']; ?>&turno=asesor">
                        <input type="submit" class="button" value="Asesor">
                    </form></td></tr>
        </table>
    </body>
</html>

