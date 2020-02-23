<?php
/**
 * The Front-Page for our theme.
 *
 * @package QOD_Starter_Theme
 */
?>


<?php get_header(); ?>




<!-- DIVS CLASS -->

    <div class = "entry-content">

    </div>
<?php
				
    $args = array( 'orderby' => 'rand', 'posts_per_page' => '1' );
    $posts = get_posts( $args ); 
			if ( have_posts() ) : the_post();?>
    <div class = "entry-meta">
<?php the_content()?>
    <h3 class = "author-name-content">
<?php the_title();?>
    </h3>
    <?php
    endif;
		wp_reset_postdata();?>

</div>
<section class = "button-container">
<button class = "button-click" type="button" id="new-quote-button">Show Me Another</button>
</section>





<?php get_footer(); ?>

