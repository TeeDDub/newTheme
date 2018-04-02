<?php
/**
 * Template Name: No Title Page
 *
 * @package WordPress
 * @subpackage Press_Impress
 */
 get_header(); ?>
 <div id="primary" class="content-area">
 	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
	 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<?php
			// Author bio.
			if ( is_single() && get_the_author_meta( 'description' ) ) :
				get_template_part( 'author-bio' );
			endif;
		endwhile;
		?>

		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'pressimpress' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
