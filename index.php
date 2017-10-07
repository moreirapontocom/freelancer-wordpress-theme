<?php get_header(); ?>

	<!-- Portfolio Grid Section -->
	<section id="portfolio">
		<div class="container">
			<h2 class="text-center">Portfolio</h2>

			<hr class="star-primary">

			<div class="row">

				<?php
				$query_args = array(
					'post_type' => 'portfolio',
					'posts_per_page' => get_option( 'posts_per_page' ),
					'orderby' => 'date',
					'paged' => ( ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1 )
				);
				query_posts( $query_args );

				get_template_part('parts/portfolio-loop');

				wp_reset_query(); ?>

			</div>
		</div>
	</section>

	<?php get_template_part('parts/about') ?>
	
	<?php get_template_part('parts/contact') ?>

    <?php get_footer(); ?>