<?php 
/*
Template Name: Toys
*/
?>

<?php  
    get_header();
?>

<div class="toys">
    <div class="container">
        <h2 class="subtitle">
            <?php
            $category_id = get_cat_ID( 'Soft toys' );
            $category_link = get_category_link( $category_id );
            ?>
            <a href="<?php echo $category_link; ?>">Soft toys</a>
        </h2>
        <div class="toys__wrapper">

        <?php 
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'soft_toys',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true,
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>
                    <div class="toys__item" style="background-image: url(<?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail_url();
                    } else {
                        echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                    }
                    ?>)">
                        <div class="toys__item-info">
                            <div class="toys__item-title"><?php the_title(); ?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toy_descr'); ?>                         
                            </div>
                            <a href="<?php echo get_permalink(); ?>"><div class="minibutton toys__trigger">More</div></a>
                        </div>
                    </div>
                <?php
            }

            wp_reset_postdata();
        ?>
        </div>


        <h2 class="subtitle">
        <?php
            $category_id = get_cat_ID( 'Educational toys' );
            $category_link = get_category_link( $category_id );
            ?>
            <a href="<?php echo $category_link; ?>">Educational toys</a>    
        </h2>
        <div class="toys__wrapper">

            <?php 
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'educational_toys',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>
                        <div class="toys__item" style="background-image: url(<?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                        }
                        ?>)">
                            <div class="toys__item-info">
                                <div class="toys__item-title"><?php the_title(); ?></div>
                                <div class="toys__item-descr">
                                    <?php the_field('toy_descr'); ?>                         
                                </div>
                                <a href="<?php echo get_permalink(); ?>"><div class="minibutton toys__trigger">More</div></a>
                            </div>
                        </div>
                    <?php
                }

                wp_reset_postdata();
            ?>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <span>Didn't find what you were looking for?</span> Contact us - and we will be happy to create any toy you desire. You can choose everything: size, material, shape...!
                </div>
            </div>
        </div>
    </div>
</div>

<?php  
    get_footer();
?>