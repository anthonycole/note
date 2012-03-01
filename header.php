<!doctype html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title><?php wp_title(' '); ?></title>

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/inuit.css"/>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/grid.inuit.css"/>

		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"/>

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<?php wp_head(); ?>
	</head>

	<body lang="en" class="wrapper">
	
	<div class="grids">
		<div class="grid-6"> 
			<header class="header">
				<hgroup>
					<h1 id="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('title'); ?></a><h1>
					<h2 id="site-description"><?php bloginfo('description'); ?></h2>
				</hgroup>
			</header>
		</div>
		<div class="grid-5">
			<nav id="access">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/about/">Me</a></li>
					<li><a href="/plugins/">Plugins</a></li>
					<li><a href="/contact/">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="about" class="grid-7">
		<p>Hey there, My name's Anthony. How are you? I'm a Melbourne based guy who works on the web - you can talk to me on <a href="http://twitter.com/anthonycole">Twitter</a>, add me on <a href="http://linkedin.com/">LinkedIn</a>, or subscribe to my (occasinal) <a href="<?php echo bloginfo('rss2_url'); ?>">literature</a>.</p>
		</div>
	</div>