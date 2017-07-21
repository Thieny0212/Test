<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/style.mobile.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
	<!-- drawer.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/assets/custom.js"></script>
	
	<?php wp_head(); ?>
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' |'; } ?> <?php bloginfo( 'name' ); ?></title>
</head>
<body class="drawer drawer--right drawer--navbar">
	<div class="overlay"></div>
	<div class="bg_cover">
		<div class="header_menu">
			<div class="logo">
				<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></h1>
			</div>
			<div class="logo_moblie">
				<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_mobile.png" alt=""></a></h1>
			</div>
			<div class="drawer-navbar nav_menu">
				<!-- <a href="#"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a> -->
				<button type="button" class="drawer-toggle drawer-hamburger">
			      <span class="sr-only">toggle navigation</span>
			      <span class="drawer-hamburger-icon"></span>
			    </button>
			    <?php pixta_header_menu(); ?>
				<!-- <ul class="drawer-nav">
					<li><a href="#">おすすめ医学部予備校ランキング<br/><span>Ranking</span></a></li>
					<li><a href="#">新着コラム<br/><span>Latest Column</span></a></li>
				</ul> -->
			</div>
			<div class="clear"></div>
		</div>
	</div>