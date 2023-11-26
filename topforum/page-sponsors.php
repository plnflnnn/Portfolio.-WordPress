<?php 
/*
Template Name: Sponsors page
*/
?>


<?php 
    get_header();
?>


    <article class="page">
        <div class="container">
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
            <div class="page_descr">
                <?php the_content(); ?>
            </div>
        </div>
    </article>

    <main>
        <div class="container">

            <div class="conference_block" name="conference" id="conference">
                <h3 class="select_title">
                    please select a conference
                </h3>

                <div class="conferences">

                <?php
                    $category_id = get_cat_ID( 'Israel2016 sponsors' );
                    $category_link = get_category_link( $category_id );

                    $category_id_1 = get_cat_ID( 'Another conference sponsors' );
                    $category_link_1 = get_category_link( $category_id_1 );
    
                    $category_id_2 = get_cat_ID( 'Another conference 2016 sponsors' );
                    $category_link_2 = get_category_link( $category_id_2 );
                ?>
                    
                    <a class="conference_link" href="<?php echo $category_link; ?>">Wealth TOP FORUM Israel 2016</a>
                    
                    <a class="conference_link" href="<?php echo $category_link_1; ?>">Another name of the conference</a>

                    <a class="conference_link" href="<?php echo $category_link_2; ?>">Another name of the conference 2016</a>
                    
                </div>
            </div>
    
            <section class="content">
                <div class="content_wrapper center">

                    <?php 
                    $my_posts = get_posts( [
                        'numberposts' => -1,
                        'category_name'    => 'sponsor',
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ] );

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );

                        ?>

                            <div class="content_block">
                                <h2 class="content_title">
                                    <?php the_field('sponsor_type'); ?>
                                </h2>
                                <div class="content_img">
                                    <img src="<?php the_field('organization_image'); ?>" alt="content_img">
                                </div>
                                <div class="content_subtitle" data-conference="<?php the_field('conferences');?>">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_field('organization_name');?></a>
                                 
                                </div>
                                <div class="content_descr">
                                 <?php the_field('organization_descr'); ?>
                                </div>
                                <a href="<?php echo get_permalink(); ?>" class="btn_sm">Learn more</a>
                            </div>
                        <?php
                    }

                    wp_reset_postdata();
                    ?>


                </div>
            </section>
        </div>
    </main>

    <?php 
    get_footer();
    ?>
