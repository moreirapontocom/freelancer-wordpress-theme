<!-- Contact Section -->

<?php
query_posts( 'post_type=page&pagename=contact' );
while ( have_posts() ) : the_post(); ?>

    <section id="contact">
        <div class="container">
            <h2 class="text-center"><?php echo get_the_title() ?></h2>

            <hr class="star-primary">

            <?php
            $meta_name = get_post_meta( get_the_ID(), 'input_name' );
            $meta_email = get_post_meta( get_the_ID(), 'input_email' );
            $meta_phone = get_post_meta( get_the_ID(), 'input_phone' );
            $meta_message = get_post_meta( get_the_ID(), 'textarea_message' );
            $meta_button = get_post_meta( get_the_ID(), 'button_label' );
            ?>

            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label><?php echo $meta_name[0] ?></label>
                                <input class="form-control" id="name" type="text" placeholder="<?php echo $meta_name[0] ?>" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label><?php echo $meta_email[0] ?></label>
                                <input class="form-control" id="email" type="email" placeholder="<?php echo $meta_email[0] ?>" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label><?php echo $meta_phone[0] ?></label>
                                <input class="form-control" id="phone" type="tel" placeholder="<?php echo $meta_phone[0] ?>" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label><?php echo $meta_message[0] ?></label>
                                <textarea class="form-control" id="message" rows="5" placeholder="<?php echo $meta_message[0] ?>" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <br>

                        <div id="success"></div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton"><?php echo $meta_button[0] ?></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

<?php endwhile; wp_reset_query(); ?>