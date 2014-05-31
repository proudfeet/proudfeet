<?php get_header(); ?>

<h1>WHATS UP</h1>

	<main class="wrapper" role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>

		<?php get_sidebar(); ?>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
