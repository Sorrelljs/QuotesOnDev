<?php
/**
 * The quote submit page.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; // End of the loop. ?>
            
            <?php if (is_user_logged_in()) {

                echo do_shortcode('[contact-form-7 id="228" title="Submit Quote"]'); 

            }

            else {

                

            }

            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
