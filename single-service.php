<?php
/**
 * Single Service template.
 *
 * @package BrightSmile
 */

get_header();
?>

<main>
	<?php
	while ( have_posts() ) {
		the_post();
		?>

		<article>
			<h1><?php the_title(); ?></h1>

			<div class="service-content">
				<?php the_content(); ?>
			</div>

			<?php
			$service_price = get_field( 'service_price' );

			if ( $service_price ) {
				?>
				<p>
					Price: Rs. <?php echo esc_html( $service_price ); ?>
				</p>
				<?php
			}
			?>
		</article>

	<?php } ?>

	<a href="<?php echo esc_url( get_post_type_archive_link( 'service' ) ); ?>">
		Back to all treatments
	</a>
</main>

<?php
get_footer();
