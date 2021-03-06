<?php get_header(); ?>

	<main class="contenthere" role="main">
		<!-- section -->
		<section class="wrapper">

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article  class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="pagetitle"><?php the_title(); ?></h1>

				<?php the_content(); ?>



				<br class="clear">

				

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
