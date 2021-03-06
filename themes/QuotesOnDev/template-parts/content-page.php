<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		 <?php the_title( '<h1 class="entry-about-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<p class = "about-content"> <?php the_content(); ?></p>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
