<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri() ?>/img/icons/socks.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
      </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header class="header clear" role="banner">
		
			<!-- wrapper -->
			<div class="wrapper">

				<!-- logo -->
				<div class="logo">
					
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<h2 class="titletag">
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo('title') ?>">Proudfeet.</a>
					</h2>
					
				</div>
				<!-- /logo -->

				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>
				<!-- /nav -->

			</div>
			<!-- /wrapper -->

			<h2 class="menubutton">
				<a href="#">&#x2261;</a>
			</h2>

		</header>
		<!-- /header -->
