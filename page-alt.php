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
				<h2 class="featuredtitle">Here's some work I've done</h2>

				<div class="section clearfix">

					<div class="portfolio__item columns desk-six mobile-twelve">
						<a href="https://www.borntobeweird.com" title="Born to be Weird">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/proudfeetBTBWScreenshot.jpg" alt="Born to be Weird">
						</a>
						<ul class="description">
							<li>This is a personal webstore built on the Shopify platform as an experiment in starting an online store from the bottom-up. It's still chugging along, and it's served as an exceptional lesson in understanding business relationships from the client's perspective</li>
							<li><span class="technology">Technology used:</span> Shopify API, Liquid, JavaScript</li>
						</ul>
					</div>

					<div class="portfolio__item columns desk-six mobile-twelve">
						<a href="http://www.fitjunkies.ca" title="Fit Junkies app by Simon Proudfoot and Robyn Larsen">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/proudfeetFitJunkiesScreenshot.jpg" alt="FitJunkies app by Simon Proudfoot and Robyn Larsen">
						</a>
						<ul class="description">
							<li>This is a web app built as a way of learning Ruby on Rails by tracking various workouts and fitness metrics. My focus was primarily on understanding and implementing the back-end technology, while a partner I was working with focused on creating the UI.</li>
							<li><span class="technology">Technology used:</span> Ruby on Rails, jQuery, Heroku, Git</li>
						</ul>
					</div>
					
				</div>

				<div class="section clearfix">

					<div class="portfolio__item columns desk-four tablet-twelve">
						<a href="/conversationstarter" title="Conversation Starter app by Simon Proudfoot">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/proudfeetConversationStarterScreenshot.jpg" alt="Conversation Starter app by Simon Proudfoot a.k.a. Proudfeet">
						</a>
						<ul class="description">
							<li>This is a web app built using the Reddit API to give you phrases and questions to use to keep the conversation moving. This was also a great way of becoming acquainted with JavaScript ES6 features for me.</li>
							<li><span class="technology">Technology used:</span> jQuery, ES6, Babel, APIs, AJAX</li>
						</ul>
					</div>

					<div class="portfolio__item columns desk-four tablet-six mobile-twelve">
						<a href="/wutangify" title="Wu-Tangify by Proudfeet">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/screenCapWutangify.jpg" alt="Wutangify by Simon Proudfoot a.k.a Proudfeet" title="Wutangify by Simon Proudfoot a.k.a Proudfeet">
						</a>
						<ul class="description">
							<li>This is a small web app I built to stylize a character list from a requested movie into that of a Wu-Tang Clan poster. I used <a href="http://www.themoviedb.org" title="TheMovieDB.org">TheMovieDB.org</a>'s API to make several AJAX requests to pull character information about a requested movie.</li>
							<li><span class="technology">Technology used:</span> JavaScript, jQuery, AngularJS, APIs, AJAX</li>
						</ul>
					</div>

					<div class="portfolio__item columns desk-four tablet-six mobile-twelve">
						<a href="/whereswaldo" title="Where's Waldo by Proudfeet">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/screenCapWheresWaldo.jpg" alt="Where's Waldo pinhole camera effect by Simon Proudfoot a.k.a. Proudfeet" title="Where's Waldo pinhole camera effect by Simon Proudfoot a.k.a. Proudfeet">
						</a>
						<ul class="description">
							<li>This is a small web app/game based on the children's book Where's Waldo. This was my first exploration into using jQuery and jQuery UI, that when combined with creative use of CSS positioning gave the appearance of a pinhole camera.</li>
							<li><span class="technology">Technology used:</span> jQuery, jQuery UI, CSS positioning</li>
						</ul>
					</div>	
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
