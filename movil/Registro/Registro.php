<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../Css/Botones.css" />
        <link type="text/css" rel="stylesheet" href="../Css/bootstrap.min.css" />
        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <title></title>
        <script>
            function format(input) {
                var num = input.value.replace(/\./g, '');
                if (!isNaN(num)) {
                    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1');
                    num = num.split('').reverse().join('').replace(/^[\.]/, '');
                    input.value = num;
                } else {
                    alert('Solo se permiten numeros');
                    input.value = input.value.replace(/[^\d\.]*/g, '');
                }
            }

        </script>
    </head>
    <body class="container">
        <div class="row">
             <div class="col-md-8 offset-md-2 fondo">
                 <form action="agregarUsuario.php" method="post" class="col-md-12">
                <div class="col-md-12 titulo">
                <h1>TurnoFacil</h1>
            </div>
            <div class="col-md-12">
                <div class="col-md-12">
                    <input type="text" name="nombre" required="true" placeholder="Nombre" />
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        Tipo De Documentacion
                    </div>
                </div>
                    <div class="col-md-12 select">
                        <select  name="Tipo identicacion[]">    
                            <option value="Cedula">C.C </option>  
                            <option value="CedulaExtranjeria">C.E </option>  
                            <option value="Pasaporte">Pasaporte</option>    
                        </select>
                    </div>
                <div class="col-md-12"> 
                    <input type="text"  name="P" onkeyup="format(this)" onchange="format(this)" placeholder="Numero de documento">
                </div>
                <div class="col-md-12">
                    <input type="number" name="Telefono" placeholder="Telefono">
                </div>
                <div class="col-md-12">
                    <input type="password" name="Pass" placeholder="Contraseña">
                </div>
                <div class="col-md-12">
                    <input type="submit" class="button" value="Registrarse">
                </div>

            </div>
        </form>
             </div>
        </div>
        

    </body>
</html>
