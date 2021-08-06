<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wrdiy
 */

get_header();
?>

<main id="main">

<section class="section">
  <div class="container">

	<?php
	while ( have_posts() ) :
		the_post();

	get_template_part( 'template-parts/content', get_post_type() ); 
	?>
  </div>
</section>

<section class="m-5">
  <div class="container">
	<div class="col-md-12">
		<?php
		$prevThumb = get_the_post_thumbnail(get_previous_post()->ID, array(300,200));
		$nextThumb = get_the_post_thumbnail(get_next_post()->ID, array(300,200));

		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-title">%title</span>' . '<div class="img-fluid">' . $prevThumb . '</div>',

				'next_text' => '<span class="nav-title">%title</span>' . '<div class="img-fluid">' . $nextThumb . '</div>'
				)
			);?>
	</div>
  </div>
</section>

<section class="m-5">
  <div class="container">
	<div class="col-md-12">
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
	
		endwhile; // End of the loop.
		?>
	</div>
  </div>
</section>
	

</main><!-- #main -->

<?php
/* get_sidebar(); */
get_footer();
