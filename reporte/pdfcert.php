<?php

$fecha = date("Y-m-d");

$path = 'encabezado.jpg';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$logo = 'data:image/' . $type . ';base64,' . base64_encode($data);

$path = 'topderecha.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$derecha = 'data:image/' . $type . ';base64,' . base64_encode($data);

$path = 'bootizquierda.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$izquierda = 'data:image/' . $type . ';base64,' . base64_encode($data);

$path = 'firmajosue.jpg';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$firmarafa = 'data:image/' . $type . ';base64,' . base64_encode($data);

?>
<html lang="es">
<head>
    <link rel="stylesheet" href="./bs3.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contrato</title>
    <style>
        
        @font-face {
            font-family: "Arial";           
            src: url("../../dompdf/vendor/dompdf/dompdf/lib/fonts/Arial Narrow.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        } 
        @font-face {
            font-family: "ArialB";           
            src: url("../../dompdf/vendor/dompdf/dompdf/lib/fonts/Arial-Narrow-Bold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        } 
		@page {
			margin: 0;
			padding: 0;
		}
		.estiloletra{
			font-family: 'Open Sans';
		}
		body{

		}
		.delante{
			z-index: 99;
		}
		.centro{
			text-align: center;   
		}
		.izquierda{
			text-align: left;   
		}
		.derecha{
			text-align: right;
		}
		.negrita{

		}
		.tamano9{
			font-size:9px;
		}
		.tamano10{
			font-size:10px;
		}
		#logo{
			position:absolute;
			top:10px;
			left:10px;
			right: 0px;
			bottom:0px;
			width:600px;
			height: 110px;
			opacity: 0.5;
		}
		#topderecha{
			position:absolute;
			top:10px;
			left:625px;
			right: 10px;
			bottom:0px;
			width:170px;
			height: 350px;
			opacity: 0.5;
		}
		#bootizquierda{
			position:absolute;
			top:680px;
			left:3px;
			right: 0px;
			bottom:0px;
			width:120px;
			height: 350px;
			opacity: 0.5;
		}
		#nombre{
			font-family: "Arial";
			position:absolute;
			top:128px;
			left:75px;
			right: 0px;
			bottom:0px;
			width:400px;
			font-size:13px;

		}
		#dni{
			font-family: "Arial";
			position:absolute;

			top:128px;
			left:585px;
			right: 0px;
			bottom:0px;
			width:100px;
			font-size:13px;
		}
		#cargo{
			font-family: "Arial";
			position:absolute;
			top:228px;
			left:500px;
			right: 0px;
			bottom:0px;
			width:200px;
			font-size:13px;
		}
		#anexo2{
			font-family: "ArialB";
			position:absolute;
			top:160px;
			right: 0px;
			bottom:0px;
			width:100%;
			font-size:20px;
			text-decoration: underline;
		}
		#clausulas{
			font-family: "ArialB";
			position:absolute;
			top:420px;
			left: 70px;
			right: 0px;
			bottom:0px;
			width:100%;
			font-size:17px;
		}
		#expide{
			font-family: "Arial";
			position:absolute;
			top:440px;
			left: 70px;
			right: 0px;
			bottom:0px;
			width:80%;
			font-size:17px;
		}
		td{
			padding:4px;
		}


				/*PAGINA 2*/

		#declaracion{
			font-family: "Arial";
			position:absolute;
			top:80px;
			left:0px;
			right: 0px;
			bottom:0px;
			width:100%;
			font-size:17px;
		}
		#gerencia{
			font-family: "Arial";
			position:absolute;
			top:100px;
			left:0px;
			right: 0px;
			bottom:0px;
			width:100%;
			font-size:17px;
		}
		.tabla1-2{
			border-collapse: collapse;
			font-family: "Arial";
			position:absolute;
			top:120px;
			left:58px;
			right: 0px;
			bottom:0px;
			font-size:13px;
		}
		#cabeza{
			font-family: "Arial";
			position:absolute;
			top:190px;
			left: 22%;
			right: 0px;
			bottom:0px;
			width:55%;
			font-size:17px;
			text-align: justify;
			line-height: 23px;
			
		}	
		#parrafo1{
			font-family: "Arial";
			position:absolute;
			top:430px;
			left: 56px;
			right: 0px;
			bottom:0px;
			width:82%;
			font-size:17px;
			text-align: justify;
			line-height: 25px;
		}	
		#parrafo2{
			font-family: "Arial";
			position:absolute;
			top:50px;
			left: 60px;
			right: 0px;
			bottom:0px;
			width:80%;
			font-size:17px;
			text-align: justify;
			line-height: 25px;
		}	
		#subguion{
			font-family: "Arial";
			position:absolute;
			top:600px;
			left: 100px;
			right: 0px;
			bottom:0px;
			font-size:15px;
			text-align: justify;
		}	
		.p{
			word-spacing:-3px;
			letter-spacing: -0.5px;	
		}
		.circulo{
			list-style-type: disc;
		}
		#pagina3firma{
			position:absolute;
			top:530px;
			left:490px;
			right: 0px;
			bottom:0px;
			width:150px;
			height: 100px;
		}
		.estilogrueso{
			font-family:'ArialB';
			display:inline-block;
			vertical-align: text-top;
		}
		.estilogrueso2{
			font-family:'ArialB';
			display:inline-block;
			vertical-align: -4.5px;
		}
		.estilogrueso3{
			font-family:'ArialB';
			display:inline-block;
			vertical-align: -2.8px;
		}
		.estilo{
			font-family:'Arial';
		}
		.lineal{
			display: flex;
			justify-content: space-between;
			align-items: center; /
		}
		.espaciop{
			line-height:1.2;
			padding-bottom:-15px;
		}
		#firmarafa{
			position:absolute;
			top:670px;
			left:300px;
			right: 0px;
			bottom:0px;
			width:210px;
			height: 110px;
		}
    </style>
</head>
<body>
	<div>
		<div><img id="logo" src="<?php echo $logo;?>"></div>
		<div><img id="topderecha" src="<?php echo $derecha;?>"></div>
		<div><img id="bootizquierda" src="<?php echo $izquierda;?>"></div>
		<div class="delante estiloletra centro" id="anexo2">CERTIFICADO DE TRABAJO</div>
		<div id="cabeza">
			<p><div class="tamano17">
			Certifica por el presente documento que el Sr.  <div class="estilogrueso2"><?php echo $nombre?></div> con DNI N°  <div class="estilogrueso2"><?php echo $dni?></div> quien laboro en nuestra empresa desde el <div class="estilogrueso2"><?php echo $fechainicio?></div> hasta el <div class="estilogrueso2"><?php echo $fechafin?></div> , desempeñándose como  <div class="estilogrueso2"><?php echo $cargo?></div>, en los trabajos de mantenimiento de los <div class="estilogrueso2">PROYECTO </div> de la Unidad Minera<div class="estilogrueso2"><?php echo $unidad?></div>. Durante su permanencia ha demostrado ser un profesional competente, buen líder.
			</div></p>
			<p><div class="tamano17">
			Se le expide la presente solicitud del interesado para los fines que estime conveniente.
			</div></p>
			<p><div class="tamano17 derecha">
			Cerro de Pasco <div class="estilogrueso2"><?php echo $fecha?></div>
			</div></p>
			<p><div class="tamano17 centro">
			Atentamente,
			</div></p>

		</div>
		<div><img id="firmarafa" src="<?php echo $firmarafa;?>"></div>
	
	</div>
</body>
</html>