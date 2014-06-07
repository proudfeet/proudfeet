<?php get_header(); ?>


	<main class="contenthere" role="main">
		<!-- section -->
		<section class="wrapper blogposts">

			<h1 class="blogtitle"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>

		<!-- /section -->
	</main>


<?php get_footer(); ?>
