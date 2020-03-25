<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wgcw
 */

?>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-dark-grey white py-3">
		<div class="container text-center mt-3 ">
			<p><small>Proud Member of the Carrollwood Area Business Association<br />
				<img style="max-width: 300px;" src="/wp-content/themes/wgcw/images/caba_logo.png" alt="Carrollwood Area Business Association logo" /> 
			</small></p>
			<p><small>&copy;<?php echo date("Y"); ?> Woof Gang Carrrollwood<br />
			<a class="white" href="tel:8132009200">813.200.9200</a> | <a class="white" href="mailto:Carrollwood@woofgangbakery.com">Carrollwood@woofgangbakery.com</a></small></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
