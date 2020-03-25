<?php
get_header();
?>

<main id="main" class="site-main ">
	<div class="hero bg-pink text-center">
		<div class="container white">
			<div class="row justify-content-center py-5">
				<div class="col-lg-9 mt-lg-5 mb-lg-4">
					<?php the_field( 'herospace' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container py-5">
		<?php the_field( 'mainContent' ); ?>
	</div>
	<div class="bg-light-grey">
		<div class="container py-5">
			<?php the_field( 'greySection' ); ?>
		</div>
	</div>
	<div class="container py-5">
		<?php the_field( 'thirdSection' ); ?>
	</div>
	
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;
	?>
</main>

<?php
get_footer();
