<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agd
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Khand:700,600,500,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'agd' ); ?></a>

<header id="masthead" class="site-header" role="banner">
<div class="container">
	<div class="col-md-4" style="margin-top:15px"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png"></a></div>
  	<div class="col-md-4" style="margin-top:15px" ><img src="<?php echo get_template_directory_uri(); ?>/img/sub-logo-header.png"></div>
  	<div class="col-md-4">
      <ul class="head-contacto">
        <li>Chile 2181 CABA </li>
        <li>TEL 4941 6311/6337</li>
        <li><a href="mailto:adg@sociales.uba.ar" target="_top">adg@sociales.uba.ar</a></li>
      </ul>
        </div>
</div>
<nav class="navbar navbar-default navbar-agd">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo get_home_url(); ?>/formulario-afiliacion/">Afiliate a agd</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institucional <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo get_home_url(); ?>/mesa-ejecutiva/">Mesa ejecutiva</a></li>
            <li><a href="<?php echo get_home_url(); ?>/comisiones/">Comisiones directivas</a></li>
            <li><a href="<?php echo get_home_url(); ?>/memoria-y-balance/">Memoria y balance</a></li>
            <li><a href="<?php echo get_home_url(); ?>/estatuto/">Estatuto</a></li>
            <li><a href="<?php echo get_home_url(); ?>/nuestra-historia/">Nuestra historia</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nuestra Lucha <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo get_home_url(); ?>/category/salario/">Salario</a></li>
            <li><a href="<?php echo get_home_url(); ?>/category/ad-honorem/">Ad honorem</a></li>
            <li><a href="<?php echo get_home_url(); ?>/category/genero/">Género y diversidad sexual</a></li>
            <li><a href="<?php echo get_home_url(); ?>/category/jubilacion/">Jubilación</a></li>
            <li><a href="<?php echo get_home_url(); ?>/category/derechos-humanos/">DD HH y libertades democráticas</a></li>
            <li><a href="<?php echo get_home_url(); ?>/category/preuniversitarios/">Preuniversitarios</a></li>
            <li><a href="<?php echo get_home_url(); ?>/category/democratizacion/">Democratización</a></li>
            <li><a href="<?php echo get_home_url(); ?>/category/becarixs-investigadores/">Becarixs e investigadores</a></li>
            <li><a href="<?php echo get_home_url(); ?>/category/libertad-sindical/">Libertad sindical</a></li>            
            <li><a href="<?php echo get_home_url(); ?>/category/obra-social/">Obra social</a></li>
            <li><a href="<?php echo get_home_url(); ?>/category/presupuesto-universitario/">Presupuesto Universitario</a></li>

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Asesoria legal y contable</a></li>
            <li><a href="#">Capacitación docente</a></li>
            <li><a href="#">Turismo y colonia de vacaciones</a></li>
            <li><a href="#">Nacimientos/unión civil/casamientos</a></li>
            <li><a href="#">Descuentos y convenios</a></li>
    </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Información General <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo get_home_url(); ?>/grilla-salarial/">Simulador salarial</a></li>
            <li><a href="<?php echo get_home_url(); ?>/recibo-de-sueldo/">Recibo de sueldo</a></li>
            <li><a href="#">Mayores de 65</a></li>
            <li><a href="#">Asignaciones familiares</a></li>
            <li><a href="#">Obra social</a></li>
            <li><a href="#">Convenio colectivo</a></li>
            <li><a href="#">Caja complementaria</a></li>
            <li><a href="#">Legislaciones</a></li>
          </ul>
        </li>
        <li><a href="#">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav social">
        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="buscar">
        </div>
        <button type="submit" class="btn btn-default btn-agd"><i class="fa fa-search"></i></span></button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header><!-- #masthead -->

<div id="content" class="site-content">
