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

		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<?php wp_head(); ?>

		<style type="text/css">
		<?php 
		$users = get_users();
		foreach ($users as $user ) : ?>
			.avatar-<?php echo $user->user_login; ?> {
				background: url(<?php echo note_get_avatar($user->user_email); ?>);
			}
		<?php endforeach; ?>
		</style>

	</head>

	<body lang="en" <?php echo body_class('wrapper'); ?>>
	
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
				<?php wp_nav_menu(); ?>
			</nav>
		</div>
	</div>
	<div id="about" class="grid-7">
		<p><?php echo note_option('header_text'); ?></p>
		</div>
	</div>