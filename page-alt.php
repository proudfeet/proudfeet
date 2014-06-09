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


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="homepage" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
				

				<br class="clear">

			<div class="featuredwork clearfix">
				<h2 class="featuredtitle">Here's some work I've done</h3>
					<div class="third firstproject">
						<a href="/wutangify">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/screenCapWutangify.jpg" alt="Wutangify by Simon Proudfoot a.k.a Proudfeet" title="Wutangify by Simon Proudfoot a.k.a Proudfeet">
						</a>
						<ul class="description">
							<li>This is a small webapp I built to stylize a character list from a requested movie into that of a Wu-Tang Clan poster using <a href="http://www.themoviedb.org">TheMovieDB.org</a>'s API by making several AJAX requests to pull character information about a requested movie.</li>
							<li><span class="technology">Technology used:</span> JavaScript, jQuery, AngularJS, APIs, AJAX</li>
						</ul>
					</div>

					<div class="third secondproject">
						<a href="">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/screenCapHackerYou.jpg" alt="HackerYou website recreation by Simon Proudfoot a.k.a. Proudfeet" title="HackerYou website recreation by Simon Proudfoot a.k.a. Proudfeet">
						</a>
						<ul class="description">
							<li>This is a re-creation of an existing website based on an image given as a design asset. The task was to re-create the webpage based on the image alone, and use creative license to style appropriately for mobile devices.</li>
							<li><span class="technology">Technology used:</span> HTML, CSS, jQuery, responsive design</li>
						</ul>
					</div>

					<div class="third thirdproject">
						<a href="">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/screenCapWheresWaldo.jpg" alt="Where's Waldo pinhole camera effect by Simon Proudfoot a.k.a. Proudfeet" title="Where's Waldo pinhole camera effect by Simon Proudfoot a.k.a. Proudfeet">
						</a>
						<ul class="description">
							<li>This is a small web app/game based on the children's book Where's Waldo. This was my first exploration into using jQuery and jQuery UI, that when combined with creative use of CSS positioning gave the appearance of a pinhole camera.</li>
							<li><span class="technology">Technology used:</span> jQuery, jQuery UI, CSS positioning</li>
						</ul>
					</div>
			</div>

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
