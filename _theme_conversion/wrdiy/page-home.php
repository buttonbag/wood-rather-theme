<?php
/**
	Template Name: Home Page
 */

get_header();
?>

	<main id="main">
	
	<!-- works -->
	<?php get_template_part('content', 'works'); ?>

<!-- about -->
<?php /* get_template_part('content', 'about'); */ ?>

	</main><!-- #main -->

<?php
get_footer();
?>