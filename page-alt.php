<?php
/*
Template Name: Home Page
*/
 get_header(); ?>


	<!-- Photo by Rafael Fabricio Chiti -->
 	<div class="banner">
 		<div class="titlebox">
 			<h1>Proudfeet</h1>
 			<h3>Front-end web developer working line by line to make the web a better place</h3>
 		</div>

 	</div>



	<main class="contenthere" role="main">
		<!-- section -->
		<section class="wrapper">


		<p id="headline" class="headline"> Hi, I'm Simon, but you might know me as Proudfeet.</p>



		<div class="featuredwork clearfix">
			<h2 class="featuredtitle">Featured Projects</h3>
				<div class="third firstproject">
					<a href="">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/screenCapWutangify.jpg" alt="Wutangify by Simon Proudfoot a.k.a Proudfeet" title="Wutangify by Simon Proudfoot a.k.a Proudfeet">
					</a>
				</div>

				<div class="third secondproject">
					<a href="">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/screenCapHackerYou.jpg" alt="HackerYou website recreation by Simon Proudfoot a.k.a. Proudfeet" title="HackerYou website recreation by Simon Proudfoot a.k.a. Proudfeet">
					</a>
				</div>

				<div class="third thirdproject">
					<a href="">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/screenCapWheresWaldo.jpg" alt="Where's Waldo pinhole camera effect by Simon Proudfoot a.k.a. Proudfeet" title="Where's Waldo pinhole camera effect by Simon Proudfoot a.k.a. Proudfeet">
					</a>
				</div>
		</div>




		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="homepage" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
