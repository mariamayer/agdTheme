<?php
/**
* Category Template
*/

get_header(); ?> 

<?php 
$i=1;
?>

<div class="container body categoria">

	<div class="col-md-12" id="cat">
		<?php if ( have_posts() ) : ?>
			<h3 class="subtitulo lucha"> Nuestra Lucha </h3>
			<h1 class="titulo-pag"><?php echo single_cat_title( '', false ); ?></h1>

			<?php
			 if ( category_description() ) : ?>
			<?php echo category_description(); ?>
		<?php endif; ?>
	</div>

	<div class="col-md-12" id="grilla">
		<?php
		while ( have_posts() && $i<3 ) : the_post(); ?>
		<div class="col-md-4 bloque">
			<div class="col-md-12 titulo">
				<a class="subtitulo" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
			</div>
			<div class="col-md-12 img">
				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full') );?>">
			</div>
		</div>
		<?php endwhile; ?>

		<?php endif; ?>
	</div>

</div>

<?php get_footer(); ?>