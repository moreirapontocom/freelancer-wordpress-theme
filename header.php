<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php bloginfo('name'); ?> &middot; <?php bloginfo('description'); ?></title>
	<?php wp_head() ?>
</head>

	<?php	
	$page_home = get_page_by_path( 'home' );
	$page_portfolio = get_page_by_path( 'portfolio' );
	$page_about = get_page_by_path( 'about' );
	$page_contact = get_page_by_path( 'contact' );
	?>

	<body id="page-top">

		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top"><?php bloginfo('name'); ?></a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						Menu
						<i class="fa fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#portfolio"><?php echo get_the_title( $page_portfolio ) ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#about"><?php echo get_the_title( $page_about ) ?></a>
							</li>
							<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#contact"><?php echo get_the_title( $page_contact ) ?></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header -->

		<header class="masthead">
			<div class="container">
				<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($page_home, 'full'); ?>" alt="">
				<div class="intro-text">
					<span class="name"><?php echo get_the_title( $page_home ) ?></span>
					<hr class="star-light">
					<span class="skills"><?php echo get_the_excerpt( $page_home ) ?></span>
				</div>
			</div>
		</header>
