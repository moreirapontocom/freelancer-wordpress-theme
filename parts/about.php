<!-- About Section -->

<?php
query_posts( 'post_type=page&pagename=about' );
while ( have_posts() ) : the_post(); ?>

    <section class="success" id="about">
        <div class="container">
            <h2 class="text-center"><?php echo get_the_title() ?></h2>

            <hr class="star-light">

            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p>
                        <?php echo get_the_excerpt() ?>
                    </p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p>
                        <?php echo get_the_content() ?>
                    </p>
                </div>

                <?php
                $meta_label = get_post_meta( get_the_ID(), 'button_label' );
                $meta_link = get_post_meta( get_the_ID(), 'button_link' );
                ?>

                <div class="col-lg-8 mx-auto text-center">
                    <a href="<?php echo $meta_link[0] ?>" class="btn btn-lg btn-outline" target="_blank">
                        <i class="fa fa-download"></i>
                        <?php echo $meta_label[0] ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; wp_reset_query(); ?>
