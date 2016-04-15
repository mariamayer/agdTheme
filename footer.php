<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agd
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="col-md-12"><a href="<?php get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png"></a></div>
			<div class="col-md-2">
				<ul class="nav-footer">
					<li><a href="#">Afiliate a agd</a></li>
					<li><a href="#">Institucional</a></li>
					<li><a href="#">Nuestra lucha</a></li>
				</ul>
			</div>
			<div class="col-md-2">
				<ul class="nav-footer">
					<li><a href="#">Servicios</a></li>
					<li><a href="#">Información general</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
			</div>
			<div class="col-md-2">
				<ul class="nav-footer">
					<li><a href="#">Créditos</a></li>				
				</ul>
			</div>
		  	<div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-cta.png"></div>
		  	<div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-conaduh.png"></div>
		  	<div class="col-md-2">
		  		<ul class="footer-contacto">
       			 <li>Chile 2181 CABA </li>
       			 <li>TEL 4941 6311/6337</li>
        		 <li>adg@sociales.uba.ar</li>
      			</ul>
      		</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
