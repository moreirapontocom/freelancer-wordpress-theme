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
								<a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#about">About</a>
							</li>
							<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header -->
		<header class="masthead">
			<div class="container">
				<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="">
				<div class="intro-text">
					<span class="name">It's me.</span>
					<hr class="star-light">
					<span class="skills"><?php bloginfo('description'); ?></span>
				</div>
			</div>
		</header>