<?php
/**
 * The template for displaying all single posts.
 *
 */

get_header(); ?>
	
	<div class="container body noticia-single">
		<?php
		while ( have_posts() ) : the_post();
			setlocale(LC_ALL,"es_ES"); ?>
				<div class="col-md-9" id="post">
					<?php setlocale(LC_TIME, "es_ES"); ?>
					<h4 class="subtitulo"><?php echo strftime("%A %d de %B de %Y",get_the_time('U')); ?></h4>
					<div class="col-md-12 entry-header">
						<?php the_title( '<h1 class="titulo-pag">', '</h1>' );?>
						<?php the_excerpt(); ?>
					</div>
					<div class="col-md-12 img">
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full') );?>">
					</div>
					<div class="col-md-9">
							<p>Foto:<?php echo get_post_meta( get_the_ID(), 'Foto', true ); ?></p>
					</div>
					<div class="col-md-3 social">
						<a href="#"><i class="fa fa-whatsapp"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<div class="col-md-12">
						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					</div>
					<div class="col-md-12 related">
					<h2 class="titulo-pag">Notas relacionadas</h2>
					<?php
					$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
					if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?>
						<div class="col-md-6 bloque">
					  		<a href="<?php echo the_permalink(); ?>"><h2 class="subtitulo"><?php echo the_title(); ?></h2></a>
					  		<ul class="cats">
							    <?php 
							    $post_categories = wp_get_post_categories($post->ID);					     
								foreach($post_categories as $c){
								    $cat = get_category( $c );
								    echo '<li>'.$cat->name.'</li>';
								}
							    ?>
							</ul>
						</div>
					<?php }
					wp_reset_postdata(); ?>
					</div>

				</div>
				<div class="col-md-3" id="sidebar">
				<?php 
					$current_post = $post;
					for($i = 1; $i <= 3; $i++):
						$post = get_previous_post(); 
						setup_postdata($post);
						if($post!=""){ ?>
							<div class="col-md-12 bloque">
						  		<a href="<?php echo the_permalink(); ?>"><h2 class="subtitulo"><?php echo the_title(); ?></h2></a>
								<ul class="cats">
								    <?php 
								    $post_categories = wp_get_post_categories($post->ID);					     
									foreach($post_categories as $c){
									    $cat = get_category( $c );
									    echo '<li>'.$cat->name.'</li>';
									}
								    ?>
								</ul>
							</div>
						<?php }      
					endfor;
					$post = $current_post;
			    ?> 
				</div>

		<?php endwhile; // End of the loop. ?>
	</div>

<?php
get_footer();