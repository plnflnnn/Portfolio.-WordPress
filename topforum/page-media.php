<?php 
/*
Template Name: Media page
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
    
            <section class="content">
                <div class="content_wrapper media">
                <?php 
                    $my_posts = get_posts( [
                        'numberposts' => -1,
                        'category_name'    => 'media',
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ] );

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );

                        ?>

                            <div class="content_block media">
                                <div class="content_img">
                                    <img src="<?php
                                        if(has_post_thumbnail()) {
                                            the_post_thumbnail_url();
                                        } else {
                                            echo get_template_directory_uri() . '/assets/img/not-found.png';
                                        }
                                    ?>" alt="content_img">
                                </div>
                                <h2 class="content_subtitle">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_field('event_name');?></a>
                                </h2>
                                <div class="content_descr">
                                    <?php the_field('event_description');?>
                                </div>
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
