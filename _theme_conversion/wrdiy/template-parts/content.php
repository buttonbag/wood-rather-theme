<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wrdiy
 */

?>

<div class="row mb-4 align-items-center">
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-12" data-aos="fade-up">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
			?>
	</header><!-- .entry-header -->
	</div>



<div class="site-section pb-0">
		<div class="row align-items-stretch">
		<div class="col-md-8" data-aos="fade-up">
			<?php wrdiy_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wrdiy' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wrdiy' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

		
	</div>
	
		<div class="col-md-3 mt-5 mt-md-0" data-aos="fade-up" data-aos-delay="200">
			<?php dynamic_sidebar('page-sidebar');?>
		</div>
	</div> 	
</div>	


	<footer class="entry-footer">
		<?php wrdiy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

	</div>
	