<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wgcw
 */

get_header();
?>

<?php if ( ! is_front_page() ) { ?>
	<div class="bg-pink">
		<div class="container py-4 ">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<a href="/"><img class="img-fluid" src="/wp-content/themes/wgcw/images/woof-gang-logo-white.png"></a>
				</div>
			</div>			
		</div>
	</div>
<?php } ?>

<div id="primary" class="container ">
	<main id="main" class="site-main py-4">
		<h1 class="h2 pink"><?php echo get_the_title() ?></h1>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<div class="bg-light-grey">
	<div class="container">
		<?php the_field( 'section_2' ); ?>
	</div>
</div>
<?php if( get_field( 'section_3' ) ) { ?>
	<div class="container">
		<?php the_field( 'section_3' ); ?>
	</div>
<?php } ?>

<?php
get_sidebar();
get_footer();
