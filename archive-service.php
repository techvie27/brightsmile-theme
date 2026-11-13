<?php
/**
 * Archive Service template.
 *
 * @package BrightSmile
 */

get_header();
?>

<main>
	<h1>Our Treatments</h1>

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			?>

			<article>
				<h2>
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php the_title(); ?>
					</a>
				</h2>

				<p>
					Price: Rs. <?php echo esc_html( get_field( 'service_price' ) ); ?>
				</p>
			</article>

			<?php
		}
	} else {
		?>
		<p>No treatments found.</p>
		<?php
	}
	?>
</main>

<?php
get_footer();
