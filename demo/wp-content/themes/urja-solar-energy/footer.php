<?php
/**
 * The template for displaying the footer
 * @package WordPress
 * @subpackage urja-solar-energy
 * @since 1.0
 * @version 0.1
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		</div>
		<div class="clearfix"></div>
		<div class="copyright"> 
			<div class="container">
				<div class="site-info">
				<p>© 2018 KSP Hydro All rights reserved. Designed and Developed by  <a href="https://www.jvatec.in/" target="_blank">JVA TEC Private Limited</a></p>
				</div>
			</div>
		</div>
	</footer>
		
<?php wp_footer(); ?>

</body>
</html>
