<?php

$fecha = date("Y-m-d");

$path = 'logo.jpg';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$logodj = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>

?>
<html lang="es">
<head>
    <link rel="stylesheet" href="./bs3.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Personal</title>
    <style>

		@page {
			margin-left: 43px;
		}
		#container:last-child { 
      		page-break-after: never; 
		}
		body{
			margin:0;
			padding:0;

			font-family:'Arial';
		}
		#header {
		position: absolute;  
		left: 0px;
		top: -20px;
		right: 0px;
		height: 50px;
		text-align: center;   
		}
		#logo {
			width: 120;
			text-align: center;
		}
		#container {
			margin-top: 190px;
		}
		#cabeza {
			padding-top: 0px;   
		}
		td {
			font-size: 9;
		}

		table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
			padding-bottom:6px;
			padding-top:-1px;
			padding-right: -7.5px;
		}
		.center{
			text-align: center;
		}
		#observaciones{
			height: 80px;
			text-align:top;
		}
		#firma {
			text-align:top;
			padding-bottom:80px;

		}
		.tamano15{
			font-family:'ArialB';
			font-size:17px;
			text-align:center;
		}
		table tbody th{
		}

    </style>
</head>
<body>
	<div id="header">
		<table id="cabeza">
          <tbody>
            <tr>
            	<td colspan="3" style="width:100px;"><img id="logo" src="<?php echo $logodj;?>" alt="DJ"></td>
              <td colspan="9" style="width:600px;">
            	<div class="tamano15 centro">REPORTE DE LISTA DE PERSONAL CALIFICADO:<?php echo $planta ?></div>
              </td>
              
            </tr>
            <tr>
              <td colspan="3" width="25%"><label>FOR-DJ-LOG-05</label></td>
              <td colspan="3" width="25%"><label>Revisión 03</label></td>
              <td colspan="3" width="25%"><label></label></td>
              <td colspan="3" width="25%"><label>Páginas 1 de 1 </label></td>
            </tr>
			<tr>
              <td colspan="6" width="50%"><label>Nombre: <?php echo $nombre;?></label></td>
              <td colspan="6" width="50%"><label>Descripcion: <?php echo $descripcion;?> </label></td>
            </tr>
			<tr>
              <td colspan="4" width="33%"><label>Responsable: <?php echo $nombreresponsable;?></label></td>
              <td colspan="4" width="33%"><label>Cargo: <?php echo $cargoresponsable;?> </label></td>
			  <td colspan="4" width="33%"><label>Celular: <?php echo $celularresponsable;?> </label></td>
            </tr>
			<tr>
              <td colspan="4" width="33%"><label>Supervidor: <?php echo $nombresuper;?></label></td>
              <td colspan="4" width="33%"><label>Cargo: <?php echo $cargosuper;?> </label></td>
			  <td colspan="4" width="33%"><label>Celular: <?php echo $celularsuper;?> </label></td>
            </tr>
          </tbody>

        </table>
	</div>
		
	<div id="container">
        <table>
          <tbody>
            <tr> 
              <td style="width:30px;"><div class="tamano15">#</div></td>
              <td style="width:250px;"><div class="tamano15">Nombre</div></td>
			  <td style="width:70px;"><div class="tamano15">DNI</div></td>
              <td style="width:140px;"><div class="tamano15">Cargo</div></td>
			  <td style="width:100px;"><div class="tamano15">Lugar Residencia</div></td>
			  <td style="width:100px;"><div class="tamano15">Celular</div></td>
            </tr>
            <?php
			$contar = 1;
            foreach ($personal as $key => $item) {
              echo '<tr>
                      <td class="center">'.$contar.'</td>
                      <td style="padding-left:5px;">'.$item["nombre"].'</td>
					  <td style="padding-left:5px;">'.$item["dni"].'</td>
                      <td style="padding-left:5px;">'.$item["cargo"].'</td>
					  <td style="padding-left:5px;">'.$item["ubicacion"].'</td>
					  <td style="padding-left:5px;">'.$item["celular"].'</td>';
              echo ' </tr>';

			  $contar++;
            }
            ?>
          </tbody>
        </table>
    </div>

	<div id="footer" >
	<table width="100%">
		<tbody >

		<tr>
			<td id="observaciones">Observaciones:</td>
			<td id="firma">Firma:</td>
		</tr>
		</tbody>
	</table>
	</div>		
</body>
</html>