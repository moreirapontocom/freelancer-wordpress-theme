<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <h2 class="text-center"><?php echo get_the_title( $page_portfolio ) ?></h2>

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

        <br>

        <hr class="star-primary star-small">

        <br>
        <br>

        <?php query_posts( 'post_type=stack' ); ?>
        <?php if ( have_posts() ) : ?>

            <div class="row skills">

                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="col col-xs-12 col-sm-2">
                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() , 'full') ?>" alt="">
                    </div>

                <?php endwhile; ?>

            </div>
        <?php endif; ?>
    </div>
</section>