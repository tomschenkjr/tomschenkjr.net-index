<html>
	<head>
		<title>Tom Schenk Jr.</title>
		<link rel="stylesheet" type="text/css" href="http://tomschenkjr.net/wordpress/wp-content/themes/invisible-assassin/assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="http://tomschenkjr.net/wordpress/wp-content/themes/invisible-assassin/style.css">
		<link rel="stylesheet" type="text/css" href="http://tomschenkjr.net/wordpress/wp-content/themes/invisible-assassin/assets/frameworks/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="http://tomschenkjr.net/wordpress/wp-content/themes/invisible-assassin/front-page.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Quicksand">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-32325320-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>

	<body>
		<!-- Testing header -->
		<?php global $option_setting; ?>
		<div id="top-bar">
			<div class="container">
				<?php if($option_setting['enable-social-icons']) : ?>
				<nav id="site-navigation" class="main-navigation col-md-9 col-sm-12" role="navigation">
					<?php else : ?>
					<nav id="site-navigation" class="main-navigation col-md-12" role="navigation">
						<?php endif; ?>
						<h1 class="menu-toggle"><?php _e( 'Menu', 'invisible-assassin' ); ?></h1>
						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'invisible-assassin' ); ?></a>			
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
					<!-- 	<?php if($option_setting['enable-social-icons']) : ?>
					<div id="social-icons" class="col-md-3 col-sm-12">
						<?php get_template_part('social', 'soshion'); ?>
					</div> -->
				<?php endif; ?>
			</div><!--.container-->
		</div><!--#top-bar-->

		<div class="center">
			<div class="name">Tom Schenk Jr.</div>
				<p class="aboutme">I work with data. My work has been using data to impact and improve the daily life of people. I am currently the Chief Data Officer for the City of Chicago. I write on my <a href="http://tomschenkjr.net/blog">blog</a> about my current focus on open data, research, and data visualization and also write at <a href="www.datanouveau.net">Data Nouveau</a>, a site dedicated to data visualization. You can find me at the following sites.</p>
				<ul id="iconify">
					<li id="blog"><a href="http://tomschenkjr.net/blog"></a></li>
					<li id="twitter"><a href="http://twitter.com/tomschenkjr"></a></li>
					<li id="contact"><a href="http://tomschenkjr.net/contact"></a></li>
					<li id="linkedin"><a href="https://www.linkedin.com/profile/view?id=330468838&trk=spm_pic"></a></li>
					<li id="google-plus"><a href="https://plus.google.com/+TomSchenkJr"></a></li>
					<li id="github"><a href="http://github.com/tomschenkjr"></a></li>
					<li id="datanouveau"><a href="http://datanouveau.net"></a></li>
					<li id="picasa"><a href="https://plus.google.com/+TomSchenkJr/photos"></a></li>
				</ul>
			</div>
		</div>
	</body>
</html>
