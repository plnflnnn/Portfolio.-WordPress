<?php 
/*
Template Name: Speakers page
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
                    $category_id = get_cat_ID( 'Israel2016 speakers' );
                    $category_link = get_category_link( $category_id );

                    $category_id_1 = get_cat_ID( 'Another conference speakers' );
                    $category_link_1 = get_category_link( $category_id_1 );
    
                    $category_id_2 = get_cat_ID( 'Another conference 2016 speakers' );
                    $category_link_2 = get_category_link( $category_id_2 );
                ?>
                    
                    <a class="conference_link" href="<?php echo $category_link; ?>">Wealth TOP FORUM Israel 2016</a>
                    
                    <a class="conference_link" href="<?php echo $category_link_1; ?>">Another name of the conference</a>

                    <a class="conference_link" href="<?php echo $category_link_2; ?>">Another name of the conference 2016</a>
                    
                </div>
            </div>
    
            <section class="content">
                <div class="content_wrapper">

                <?php 
                    $my_posts = get_posts( [
                        'numberposts' => -1,
                        'category_name'    => 'speaker',
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ] );

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );

                        ?>
                            <div class="content_block">
                                <div class="content_img">
                                    <img src="<?php the_field('speaker_photo'); ?>" alt="content_img">
                                </div>
                                <h2 class="content_subtitle">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_field('speaker_name');?></a>
                            
                                </h2>
                                <div class="content_descr">
                                    <?php the_field('speaker_information'); ?>
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
