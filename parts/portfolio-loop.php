<?php
while ( have_posts() ) :
    the_post(); ?>

        <div class="col-sm-3 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal<?php echo get_the_ID() ?>" data-toggle="modal">
                <div class="caption">
                    <div class="caption-content">
                        <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="<?php the_post_thumbnail_url('full') ?>" alt="">
            </a>
        </div>

        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo get_the_ID() ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2><?php echo get_the_title() ?></h2>

                                    <hr class="star-primary">

                                    <p>
                                        <?php echo get_the_content() ?>
                                    </p>
                                    
                                    <?php
                                    $meta_client = get_post_meta( get_the_ID(), 'client' );
                                    $meta_stack = get_post_meta( get_the_ID(), 'stack' );
                                    ?>

                                    <ul class="list-inline item-details">
                                        <li>
                                            Client:
                                            <strong>
                                                <?php echo $meta_client[0]; ?>
                                            </strong>
                                        </li>
                                        <li>
                                            Stack:
                                            <strong>
                                                <?php echo $meta_stack[0]; ?>
                                            </strong>
                                        </li>
                                    </ul>

                                    <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
endwhile; ?>

<?php
	echo get_the_posts_pagination(
		array(
			'mid_size' => 50,
			'prev_text' => __( 'Página anterior', 'textdomain' ),
			'next_text' => __( 'Próxima página', 'textdomain' ),
		)
    );
?>