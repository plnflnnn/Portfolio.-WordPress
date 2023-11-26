<footer class="footer">
    <div class="container">
        <div class="top_sections">

            <div class="left_section">
                <div class="top_forum_section">
                    <p class="top_forum_section main">
                        TOP FORUM
                    </p>
                    <?php 
                    wp_nav_menu( [
                        'menu'            => 'Footer',
                        'container'       => 'false',
                        'menu_class'      => 'top_forum_section',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<div class="top_forum_section">%3$s</div>',
                        'depth'           => 0,
                    ] );
                    ?>
    
                </div>

                <div class="divider_vertical"></div>
    
                <div class="contact_section">
                    <p class="contact_section main">
                        CONTACT
                    </p>
                    <a href="#" >Top Forum Group</a>
                    <p><?php the_field('address', 2); ?></p>

                    <p class="phone_number">
                    <?php the_field('phone_number', 2); ?>
                    </p>

                    <p id="mail" class="mail">
                    <?php the_field('email', 2); ?>
                    </p>
                </div>
            </div>
    
            <div class="right_section">
                <a href="<?php the_field('follow_us_link', 2); ?>" class="follow">
                    FOLLOW US
                </a>
            </div>
    
        </div>

        <div class="divider_horizontal"></div>

        <div class="footer_bottom_section">
            <div class="rights">
                © 2014 Top Forum Group. All rights reserved.
            </div>

            <div class="web">
                <p class="webdev">Website development:</p>
                <div class="webdev_logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/main/mammont.png" alt="web_development">
                </div>
            </div>
        </div>
    </div>
   </footer>


<?php 
    wp_footer();
?>
</body>
</html>