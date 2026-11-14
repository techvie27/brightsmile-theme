<?php
/**
 * Doctors page template.
 *
 * @package BrightSmile
 */

get_header();
?>

<main>
	<h1><?php the_title(); ?></h1>

	<?php
	$brightsmile_doctors = new WP_Query(
		array(
			'post_type'      => 'doctor',
			'posts_per_page' => -1,
		)
	);

	while ( $brightsmile_doctors->have_posts() ) :
		$brightsmile_doctors->the_post();
		?>

		<article>
			<h2><?php the_title(); ?></h2>

			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium' ); ?>
			<?php endif; ?>

			<div class="doctor-bio">
				<?php the_content(); ?>
			</div>

			<p>
				Speciality:
				<?php echo esc_html( get_field( 'doctor_speciality' ) ); ?>
			</p>

			<p>
				Experience:
				<?php echo esc_html( get_field( 'doctor_experience' ) ); ?> years
			</p>
		</article>

		<?php
	endwhile;

	wp_reset_postdata();
	?>
</main>

<?php
get_footer();
