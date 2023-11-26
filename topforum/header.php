<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php 
        wp_head();
    ?>
</head>
<body>
    <nav class="nav">
        <div class="container">
            <div class="nav_menu">
            <?php 
                    wp_nav_menu( [
                        'menu'            => 'First',
                        'container'       => 'false',
                        'menu_class'      => 'nav_menu_items',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="nav_menu_items">%3$s</ul>',
                        'depth'           => 0,
                    ] );
                    ?>
                <a href="<?php echo get_home_url() . '/registration/' ?>" class="nav_btn btn md">TOP FORUM CLUB</a>
            </div>
        </div>
    </nav>

   <header class="header">
        <div class="container">
            <div class="header"> 
                <div class="header_menu_wrapper">

                    <div class="header_logo">
                        <?php the_custom_logo(); ?>
                    </div>
            
                    <div class="header_menu">

                        <div class="header_menu_block">
                            <div class="header_menu_block_img">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/main/cup.png" alt="cup">
                            </div>

                            <?php 
                            wp_nav_menu( [
                                'menu'            => 'Upcoming',
                                'container'       => 'false',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="header_menu_item">%3$s</ul>',
                                'depth'           => 0,
                            ] );
                            ?>
                        </div>
                        <div class="header_menu_block">
                            <div class="header_menu_block_img">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/main/flag.png" alt="flag">
                            </div>
                            <?php 
                            wp_nav_menu( [
                                'menu'            => 'Contacts',
                                'container'       => 'false',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="header_menu_item">%3$s</ul>',
                                'depth'           => 0,
                            ] );
                            ?>
                        </div>
                    </div>
                </div>

                <a href="<?php echo get_home_url() . '/registration/' ?>" class="btn header_btn md">
                    REGISTER NOW
                </a>

                <div class="header_btns_block">
                    <a href="<?php echo get_home_url() . '/registration/' ?>" class="nav_btn btn">
                        TOP FORUM CLUB
                    </a>

                    <a href="<?php echo get_home_url() . '/registration/' ?>" class="btn header_btn">
                        REGISTER NOW
                    </a>
                </div>

            </div>
        </div>
   </header>