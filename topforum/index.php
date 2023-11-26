<?php 
    get_header();
?>

   <div class="promo" style="background:url('<?php the_field('main_image');?>') center center/cover no-repeat;height:440px">
    <div class="container">
        <div class="promo_wrapper">

            <div class="promo_slider_wrapper">

                <button class="promo_left_arrow">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/left-arrow.png" alt="left-arrow">
                </button>
    
                <div class="promo_slider">
                <?php 
                        $main_slider = get_posts( [
                            'numberposts' => -1,
                            'category_name'   => 'main_slider',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true,
                        ] );

                        foreach( $main_slider as $post ){
                            setup_postdata( $post );

                            ?>

                        <div>
                            <div class="promo_block_wrapper">
                                <div class="promo_block">
                                    <div class="promo_block_date">
                                        <?php the_field('conference_date');?>
                                    </div>
                                    <div class="promo_block_descr">
                                        <h2 class="promo_block_title">
                                            <?php the_field('conference_name');?>
                                        </h2>
                                        <p class="promo_block_text">
                                            <?php the_field('conference_description');?>
                                        </p>
                                        <p class="promo_block_location">
                                            <?php the_field('conference_location');?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        
                        wp_reset_postdata();
                    ?>

                </div>
    
                <button class="promo_right_arrow">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/right-arrow.png" alt="right-arrow">
                </button>
            </div>


        </div>
 
    </div>
   </div>

   <div class="about">
    <div class="container">
        <div class="about_descr">
            <?php 
                the_field('about_company_text');
            ?>
        </div>
    
        <div class="about_descr_blocks">
            <div class="about_descr_block">
                <div class="about_descr_block_img">
                    <img src="<?php the_field('company_description_image_1');?>" alt="about_img">
                </div>
                <div class="about_descr_block_text_block">
                    <h4 class="about_descr_block_title" ><?php the_field('company_first_description_block_title'); ?></h4>

                    <p class="about_descr_block_text"> 
                        <?php 
                            the_field('company_description_text_1');
                        ?>
                    </p>
                </div>

                <?php 
                $btn = get_field('learn_more_btn');
                if ($btn == 'on') {
                    ?>

                    <a href="<?php the_field('learn_more_btn_link'); ?>" class="btn_sm">
                        Learn more
                    </a>

                    <?php
                }
                ?>
    
                <div class="about_descr_subtitle">
                    <?php the_field('about_first_block_subtitle'); ?>
                </div>
            </div>

            <div class="about_descr_block">
                <div class="about_descr_block_img">
                    <img src="<?php the_field('company_description_image_2');
                ?>" alt="about_img">
                </div>
                <div class="about_descr_block_text_block">
                    <h4 class="about_descr_block_title"><?php the_field('company_second_description_block_title'); ?></h4>
                    <p class="about_descr_block_text">
                        <?php 
                            the_field('company_description_text_2');
                        ?>
                    </p>
                </div>
    
                <?php 
                $btn = get_field('learn_more_btn');
                if ($btn == 'on') {
                    ?>

                    <a href="<?php the_field('learn_more_btn_link'); ?>" class="btn_sm">
                        Learn more
                    </a>

                    <?php
                }
                ?>
    
                <div class="about_descr_subtitle">
                    <?php the_field('about_second_block_subtitle'); ?>
                </div>
            </div>

            <div class="about_descr_block">
                <div class="about_descr_block_img">
                    <img src="<?php the_field('company_description_image_3');
                ?>" alt="about_img">
                </div>
                <div class="about_descr_block_text_block">
                    <h4 class="about_descr_block_title"><?php the_field('company_third_description_block_title'); ?></h4>
                    <p class="about_descr_block_text">
                        <?php 
                            the_field('company_description_text_3');?>
                    </p>
                </div>

                <?php 
                $btn = get_field('learn_more_btn');
                if ($btn == 'on') {
                    ?>

                    <a href="<?php the_field('learn_more_btn_link'); ?>" class="btn_sm">
                        Learn more
                    </a>

                    <?php
                }
                ?>

                <div class="about_descr_subtitle">
                    <?php the_field('about_third_block_subtitle'); ?>
                </div>
            </div>
        </div>
    
        <div class="about_btns">
            <a href="<?php echo get_home_url() . '/registration/' ?>" class="btn btn_about">REGISTER NOW</a>
            <button class="btn btn_about subscribe">SUBSCRIBE</button>
        </div>
    </div>
   </div>


   <section class="reviews">
    <div class="container">
        <h2 class="title">
            CUSTOMER REVIEWS
        </h2>

            <div class="reviews_wrapper">
                <button class="review_btn_left">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow-left.png" alt="left-arrow">
                </button>

                <div class="reviews_slider">
                    <?php 
                        $reviews_slider = get_posts( [
                            'numberposts' => -1,
                            'category_name'   => 'reviews_slider',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'post_status' => 'publish',
                            'suppress_filters' => true,
                        ] );

                        foreach( $reviews_slider as $post ){
                            setup_postdata( $post );

                            ?>

                                <div>
                                    <div class="review">
                                        <div class="review_img">
                                            <img src="<?php 
                                            $photo = get_field('customer_photo');

                                            if(!$photo) {
                                                echo bloginfo('template_url') . '/assets/img/customers/customer_unknown.png';
                                            } else {
                                                the_field('customer_photo'); 
                                            }
                                            ?>" alt="customer_img">
                                        </div>
                                        <div class="review_wrapper">
                                            <div class="customer_name"><?php the_field('customer_name'); ?></div>
                                            <div class="review_date"><?php the_field('review_date'); ?></div>
                                            <div class="review_text"><?php the_field('review_text'); ?></div>
                                        </div>
                                    </div>
                                </div>

                            <?php
                        }
                        
                        wp_reset_postdata();
                    ?>
                </div>

                <button class="review_btn_right">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/arrow-right.png" alt="right-arrow">
                </button>
            </div>

    </div>
   </section>
    

   <section class="video_promo">
        <div class="container">
            <h2 class="title">
                PROMO VIDEO
            </h2>

            <iframe class="video" 
            src="<?php the_field('promo_video_link'); ?>" 
            title="YouTube video player" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>
            
        </div>
   </section>

    
   <section class="our_clients">
    <div class="container">
        <h2 class="title">
            OUR CLIENTS
        </h2>

        <div class="clients_wrapper">

            <button class="clients_btn_left">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow-left.png" alt="left-arrow">
            </button> 

            <div class="clients_slider">

                <div class="client_img">
                    <img src="<?php the_field('client_1'); ?>" alt="client_img">
                </div>

                <div class="client_img">
                    <img src="<?php the_field('client_2'); ?>" alt="client_img">
                </div>

                <div class="client_img">
                    <img src="<?php the_field('client_3'); ?>" alt="client_img">
                </div>

                <div class="client_img">
                    <img src="<?php the_field('client_4'); ?>" alt="client_img">
                </div>

                <div class="client_img">
                    <img src="<?php the_field('client_5'); ?>" alt="client_img">
                </div>

                <div class="client_img">
                    <img src="<?php the_field('client_6'); ?>" alt="client_img">
                </div>
            </div>

            <button class="clients_btn_right">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow-right.png" alt="right-arrow">
            </button> 
        </div>
            
    </div>
   </section>



   <div class="subscribe overlay" id="subscribe">
    <div class="subscribe_modal">
        <div class="subscribe_close">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/close.png" alt="close">
        </div>
        <div class="subscribe_subtitle">SUBSCRIBE</div>
        <div class="subscribe_descr">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </div>
        <div class="subscribe_form">
            <?php echo do_shortcode('[contact-form-7 id="6b6a79d" title="Subscribe form"]'); ?>
        </div>
    </div>
   </div>


<?php 
    get_footer();
?>
