<?php
/*
Template name: Home
*/
get_header(); ?>

<div class="container body">
	<div class="col-md-12 bloque">
		<ul class="rslides">

	<?php $home_loop = get_posts( array('numberposts' => 3 ) );
		$ids = array();
		if( $home_loop ) foreach( $home_loop as $post ) { 
			setup_postdata($post); ?>
				  <li>
				  	<div class="col-md-7 noticia">
				  		<h3 class="cat-destacado"> noticias </h3>
						<a href="<?php echo the_permalink(); ?>"><h2 class="titulo-destacado"><?php echo the_title(); ?></h2></a>
				  		<p class="cuerpo-destacado"><?php echo get_the_excerpt(); ?></p>
				  	</div>
				  	<div class="col-md-5 noticia">
				  		<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full') );?>">
				  	</div>
				  </li>
		<?php 
		array_push($ids,$post->ID);
		}
		wp_reset_postdata(); ?>

		</ul>
	</div>

	<?php $home_loop = get_posts( array('numberposts' => 9 ) );
    if( $home_loop ) foreach( $home_loop as $post ) { 
	setup_postdata($post); 
		if(!in_array($post->ID, $ids)){
		?>

		<div class="col-md-4 bloque">
			<div class="col-md-12 noticia titulo">
			  	<a href="<?php echo the_permalink(); ?>"><h2 class="titulo-widget"><?php echo the_title(); ?></h2></a>
		  		<p class="cat-widget">
		  		<?php 
				    $post_categories = wp_get_post_categories($post->ID);					     
					foreach($post_categories as $c){
					    $cat = get_category( $c );
					    echo $cat->name.' ';
					}
				?>
				</p>
		  	</div>
		  	<div class="col-md-12 noticia img">
		  		<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full') );?>">
		  	</div>
		</div>

		<?php 
		}
		}
		wp_reset_postdata(); ?>
	<div class="col-md-8 bloque">
		<ul class="rslides">
		  <li>
		  	<div class="col-md-7 sub-noticia">
		  		<h3 class="cat-video"> Videos y entrevistas </h3>
				<h2 class="titulo-video">Entrevistas</h2>
		  		<p class="cuerpo-video">Santiago Gandara, secretario de prensa de AGD UBA, en el corte de calle y movilizacion a rectorado de becarios y la asamblea de medicina. </p>
		  	</div>
		  	<div class="col-md-5 sub-noticia">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/prueba.png">
		  	</div>
		  </li>
		  <li>
			  <div class="col-md-7 sub-noticia">
		  		<h3 class="cat-video"> Videos y entrevistas </h3>
				<h2 class="titulo-video">Entrevistas</h2>
		  		<p class="cuerpo-video">Santiago Gandara, secretario de prensa de AGD UBA, en el corte de calle y movilizacion a rectorado de becarios y la asamblea de medicina. </p>
		  	</div>
		  	<div class="col-md-5 sub-noticia">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/prueba.png">
		  	</div>
		  </li>
		  <li>
		  	<div class="col-md-7 sub-noticia">
		  		<h3 class="cat-video"> Videos y entrevistas </h3>
				<h2 class="titulo-video">Entrevistas</h2>
		  		<p class="cuerpo-video">Santiago Gandara, secretario de prensa de AGD UBA, en el corte de calle y movilizacion a rectorado de becarios y la asamblea de medicina. </p>
		  	</div>
		  	<div class="col-md-5 sub-noticia">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/prueba.png">
		  	</div>
		  </li>
		  
		</ul>
	</div>
	<div class="col-md-4 bloque">
		<div class="col-md-12 bloque noticia link" style="padding:0px">
			<h3 class="cat-video"> Encuestas y petitorios </h3>
			<a href="<?php echo get_home_url();?>/grilla-salarial/" class="titulo-video">Grilla salarial</a>
		</div>
		<div class="col-md-12 bloque noticia" style="padding:0px">
			<h3 class="cat-video"> Resúmenes </h3>
			<a href="#" class="titulo-video"> Convenio colectivo</a>
		</div>
	</div>

</div>

<?php get_footer(); ?>