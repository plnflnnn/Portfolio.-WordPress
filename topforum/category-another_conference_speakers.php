<?php 
    get_header();
?>

    <article class="page">
        <div class="container">
            <h1 class="title">
                Another name of the conference
            </h1>
        </div>
    </article>

    <main>
        <div class="container">
    
            <section class="content">
                <div class="content_wrapper">

                <?php 
                    $my_posts = get_posts( [
                        'numberposts' => -1,
                        'category_name'    => 'another_conference_speakers',
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
