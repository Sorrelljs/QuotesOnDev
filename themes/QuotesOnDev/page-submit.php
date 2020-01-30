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
            
            <?php if (is_user_logged_in()) : ?>

                <?php echo do_shortcode('[contact-form-7 id="228" title="Submit Quote"]'); ?>

            <?php else : ?>

                <div class = "not-logged-in">Sorry, You must be logged in to submit a quote!</div>

                <button class = "login-link"> Click here to login.</button>

            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
