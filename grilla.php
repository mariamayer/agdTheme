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
		<?php
		echo '<p>Categoria: '.$_POST['categoria'].'</p>';
		echo '<p>Dedicación: '.$_POST['dedicacion'].'</p>';
		echo '<p>Antiguedad: '.$_POST['antiguedad'].'</p>';
		echo '<p>Cobra Plus: '.$_POST['especializacion'].'</p>';
		echo '<p>Afiliado a AGD?: '.$_POST['afiliacion'].'</p>';
		$dedicacion= $_POST['dedicacion'];
		$especializacion=$_POST['especializacion'];
		if($especializacion=='no'){
			$plus=0;
		}elseif($especializacion=='especializacion'){
			$plus=0.5;
		}
		elseif($especializacion=='maestria'){
			$plus=0.7;
		}
		elseif($especializacion=='doctorado'){
			$plus=0.17;
		}
		switch ($dedicacion) {
			case 'simple':
				if($_POST['categoria']=='titular'){
					$inicial=5641.43;
					$codigo=35;
				}elseif($_POST['categoria']=='asociado'){
					$inicial=5048.68;
					$codigo=33;
				}elseif($_POST['categoria']=='adjunto'){
					$inicial=4455.92;
					$codigo=29;
				}elseif($_POST['categoria']=='jtp'){
					$inicial=3863.15;
					$codigo=26;
				}elseif($_POST['categoria']=='ay1'){
					$inicial=3270.39;
					$codigo=22;
				}elseif($_POST['categoria']=='ay2'){
					$inicial=2616.32;
					$codigo=20;
				}
				break;
			case 'semiexclusiva':
				if($_POST['categoria']=='titular'){
					$inicial=9561.87;
					$codigo=107;
				}elseif($_POST['categoria']=='asociado'){
					$inicial=8557.18;
					$codigo=101;
				}elseif($_POST['categoria']=='adjunto'){
					$inicial=7552.49;
					$codigo=88;
				}elseif($_POST['categoria']=='jtp'){
					$inicial=6547.80;
					$codigo=77;
				}elseif($_POST['categoria']=='ay1'){
					$inicial=5543.11;
					$codigo=70;
				}
				break;
			case 'exclusiva':
				if($_POST['categoria']=='titular'){
					$inicial=19123.71;
					$codigo=245;
				}elseif($_POST['categoria']=='asociado'){
					$inicial=17114.33;
					$codigo=230;
				}elseif($_POST['categoria']=='adjunto'){
					$inicial=15104.96;
					$codigo=200;
				}elseif($_POST['categoria']=='jtp'){
					$inicial=13095.58;
					$codigo=175;
				}elseif($_POST['categoria']=='ay1'){
					$inicial=11086.21;
					$codigo=158;
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
		$garantia=120;
		$prestaciones=50;
		$seguro=3.80;
		if($_POST['afiliacion']=='si'){
			$agd=0.01;
		}else{
			$agd=0;
		}
		$afiliado=$basico*$agd;

		//RESULTADO SUMA
		$suma=$codigo+$titulo+$antiguedad;
		//RESULTADO RESTA
		$resta=$jubilacion+$pami+$obrasocial+$garantia+$prestaciones+$seguro+$afiliado;

		$resultado=$inicial+$suma-$resta;

		echo '<p>Sueldo Neto: $ '.number_format((float)$resultado, 2, '.', '').'</p>';

		echo '<p>Pruebas</p>';
		echo '<p>Sueldo Inicial (120): $ '.number_format((float)$inicial, 2, '.', '').'</p>';
		echo '<p>Sumas</p>';
		echo '<p>Antiguedad (103): $ '.number_format((float)$antiguedad, 2, '.', '').'</p>';
		echo '<p>Codigo (174t): $ '.number_format((float)$codigo, 2, '.', '').'</p>';
		echo '<p>Plus por titulo (110): $ '.number_format((float)$titulo, 2, '.', '').'</p>';
		echo '<p>Restas</p>';
		echo '<p>Jubilacion (201): $ '.number_format((float)$jubilacion, 2, '.', '').'</p>';
		echo '<p>Pami (247): $ '.number_format((float)$pami, 2, '.', '').'</p>';
		echo '<p>Obra Social (210): $ '.number_format((float)$obrasocial, 2, '.', '').'</p>';
		echo '<p>Garantia (207t): $ '.number_format((float)$garantia, 2, '.', '').'</p>';
		echo '<p>Prestacones (214): $ '.number_format((float)$prestaciones, 2, '.', '').'</p>';
		echo '<p>Seguro de Vida (234): $ '.number_format((float)$seguro, 2, '.', '').'</p>';
		echo '<p>Afiliacion (282): $ '.number_format((float)$afiliado, 2, '.', '').'</p>';


		?>

		</section>
	</div>


</div>

<?php get_footer(); ?>