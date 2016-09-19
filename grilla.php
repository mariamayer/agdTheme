<?php
/*
Template name: Grilla
*/
get_header(); ?>

<div class="container body">
<div class="col-md-12">
		<section class="seccion-area">
		<span class="subtitulo"> Calculador automático </span>
		<h1 class="titulo-pag">Grilla Salarial</h1>
		<p class="cuerpo">Elaboramos el presente simulador con el objetivo de brindar a los compañera/os una herramienta amigable que oriente el monto que debemos percibir como salario. 
Debe tenerse en cuenta que algunos items que no han sido contemplados, como la imposición del impuesto a las ganancias, asignaciones familiares, etc.<br>
		<a class="vinculo" href="<?php echo esc_attr( get_option('pdf') ); ?>" target="_blank"> Aqui </a> puede consultarse la grilla salarial vigente a la fecha para verificar cada uno de los items en detalle.<br>
		<a class="vinculo" href="http://agduba.org.ar/recibo-de-sueldo/" target="_blank"> Aqui </a> puede encontrar una guía sobre como leer el recibo de sueldo.<br> <br></p>
		

		<?php

		echo '<h2>Categoria: '.$_POST['categoria'].'</h2>';
		echo '<h2>Dedicación: '.$_POST['dedicacion'].'</h2>';
		echo '<h2>Antigüedad: '.$_POST['antiguedad'].'</h2>';
		echo '<h2>Titulo: '.$_POST['especializacion'].'</h2>';
		echo '<h2>Afiliado a AGD?: '.$_POST['afiliacion'].'</h2>';
		$dedicacion= $_POST['dedicacion'];
		$especializacion=$_POST['especializacion'];
		if($especializacion=='no'){
			$plus=0;
		}elseif($especializacion=='especializacion'){
			$plus=get_option('espe')/100;
		}
		elseif($especializacion=='maestria'){
			$plus=get_option('maestria')/100;
		}
		elseif($especializacion=='doctorado'){
			$plus=get_option('doctorado')/100;
		}
		switch ($dedicacion) {
			case 'simple':
				if($_POST['categoria']=='titular'){
					$inicial=get_option('pt1');
					$codigo=get_option('apt1');
					$garantia=956.17;
				}elseif($_POST['categoria']=='asociado'){
					$inicial=get_option('pa1');
					$codigo=get_option('apa1');
					$garantia=855.71;
				}elseif($_POST['categoria']=='adjunto'){
					$inicial=get_option('pad1');
					$codigo=get_option('apad1');
					$garantia=get_option('');
				}elseif($_POST['categoria']=='jtp'){
					$inicial=get_option('jtp1');
					$codigo=get_option('ajtp1');
					$garantia=654.77;
				}elseif($_POST['categoria']=='ay1'){
					$inicial=get_option('ay12');
					$codigo=get_option('aay12');
					$garantia=554.30;
				}elseif($_POST['categoria']=='ay2'){
					$inicial=get_option('ay2');
					$codigo=get_option('aay2');
					$garantia=443.44;
				}
				break;
			case 'semiexclusiva':
				if($_POST['categoria']=='titular'){
					$inicial=get_option('pt2');
					$codigo=get_option('apt2');
					$garantia=1912.37;
				}elseif($_POST['categoria']=='asociado'){
					$inicial=get_option('pa2');
					$codigo=get_option('apa2');
					$garantia=1711.44;
				}elseif($_POST['categoria']=='adjunto'){
					$inicial=get_option('pad2');
					$codigo=get_option('apad2');
					$garantia=1510.50;
				}elseif($_POST['categoria']=='jtp'){
					$inicial=get_option('jtp1');
					$codigo=get_option('ajtp1');
					$garantia=1309.56;
				}elseif($_POST['categoria']=='ay1'){
					$inicial=get_option('ay12');
					$codigo=get_option('aay12');
					$garantia=1108.62;
				}
				break;
			case 'exclusiva':
				if($_POST['categoria']=='titular'){
					$inicial=get_option('pt3');
					$codigo=get_option('pt3');
					$garantia=3824.74;
				}elseif($_POST['categoria']=='asociado'){
					$inicial=get_option('pa3');
					$codigo=get_option('apa3');
					$garantia=3422.87;
				}elseif($_POST['categoria']=='adjunto'){
					$inicial=get_option('pad3');
					$codigo=get_option('apad3');
					$garantia=3020.99;
				}elseif($_POST['categoria']=='jtp'){
					$inicial=get_option('jtp3');
					$codigo=get_option('ajtp3');
					$garantia=2619.12;
				}elseif($_POST['categoria']=='ay1'){
					$inicial=get_option('ay13');
					$codigo=get_option('aay13');
					$garantia=2217.24;
				}
				break;
		}

		//SUMAS
		$antiguedad=$inicial*$_POST['antiguedad'];
		$titulo=$inicial*$plus;

		$basico=$antiguedad+$inicial;
		//RESTAS
		$jubilacion=$basico*0.13;
		$pami=$basico*0.03;
		$obrasocial=$basico*0.03;
		$prestaciones=get_option('prestaciones');
		$complementaria=$basico*0.045;
		$seguro=get_option('segurodevida');
		if($_POST['afiliacion']=='si'){
			$agd=0.01;
		}else{
			$agd=0;
		}
		$afiliado=$basico*$agd;

		//RESULTADO SUMA
		$suma=$codigo+$titulo+$antiguedad;

		//RESULTADO RESTA
		$resta=$jubilacion+$pami+$obrasocial+$prestaciones+$seguro+$complementaria+$afiliado;

	
		if($_POST['antiguedad']=='0'){
			$resultado=$inicial+$suma-$resta+$garantia;
		}else{
			$resultado=$inicial+$suma-$resta;
		}

		echo '<p><hr></p>';

		echo '<h2 style="color:#e31f26">Estimación Sueldo Neto: $ '.number_format((float)$resultado, 2, '.', '').'</h2>';


		echo '<p><hr></p>';
		echo '<h2>HABERES</h2>';
		echo '<p>Sueldo básico (101): $ '.number_format((float)$inicial, 2, '.', '').'</p>';
		echo '<p>Antigüedad (103): $ '.number_format((float)$antiguedad, 2, '.', '').'</p>';
		echo '<p>Adicional no remunerativo (174t): $ '.number_format((float)$codigo, 2, '.', '').'</p>';
		echo '<p>Adicional por titulo (110): $ '.number_format((float)$titulo, 2, '.', '').'</p>';
		echo '<p>Garantía Salarial(120): $ '.number_format((float)$garantia, 2, '.', '').'</p>';

		echo '<h2>Descuentos</h2>';

		echo '<p>Jubilacion (201): $ '.number_format((float)$jubilacion, 2, '.', '').'</p>';

		echo '<p>Descuento Pami (247): $ '.number_format((float)$pami, 2, '.', '').'</p>';

		echo '<p>Aporte Obra Social DOSUBA (210): $ '.number_format((float)$obrasocial, 2, '.', '').'</p>';

		echo '<p>DOSUBA (Garantía aporte mínimo) (207t): $ '.number_format((float)$garantia, 2, '.', '').'</p>';

		echo '<p>DOSUBA (Prestaciones) (214): $ '.number_format((float)$prestaciones, 2, '.', '').'</p>';

		echo '<p>Seguro de Vida (234): $ '.number_format((float)$seguro, 2, '.', '').'</p>';

		echo '<p>Caja complementaria (272): $ '.number_format((float)$complementaria, 2, '.', '').'</p>';

		echo '<p>Aporte sindical AGD UBA (282): $ '.number_format((float)$afiliado, 2, '.', '').'</p>';
	
		echo '<p><hr></p>';
		?>


		<a class="vinculo" style="color:#e31f26" href="http://agduba.org.ar/grilla-salarial"> Volver </a>
		
		</section>
	</div>


</div>

<?php get_footer(); ?>