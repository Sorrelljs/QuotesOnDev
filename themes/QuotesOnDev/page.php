<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'template-parts/content-archive', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>


		
	
<!-- <section class = "button-container">
<button type="button" id="new-quote-button">Show Me Another</button>
</section> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
