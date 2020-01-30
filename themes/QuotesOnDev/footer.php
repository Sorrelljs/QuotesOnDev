<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="site-info">
				<?php wp_nav_menu(array(
    		'menu_class'   => 'ul-class',
    
			 )); ?>

				<ul class = "menu-footer">

					<a class = "copyright" href="<?php echo esc_url( 'https://wordpress.org/' );
					 ?>">
					 
					 <span class = "color-change"> Brought to you by </span>  RED Academy</a>
					 </ul>
				</div><!-- .site-info -->
			
		</div><!-- #page -->
		</footer><!-- #colophon -->
		<?php wp_footer(); ?>

	</body>
</html>
