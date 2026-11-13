<?php
/**
 * Front page template.
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

		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

	<?php } ?>

	<a href="<?php echo esc_url( get_post_type_archive_link( 'service' ) ); ?>">
		See all treatments
	</a>
</main>

<?php
get_footer();
