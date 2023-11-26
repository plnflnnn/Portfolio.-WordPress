<?php 
/*
Template Name: Contacts page
*/
?>

<?php 
    get_header();
?>

    <main class="contacts">
        <div class="container">

            <div class="contacts_wrapper">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1853.8569940213624!2d17.149152081433655!3d48.16465846454276!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8ed00f935e21%3A0xcb9c726bd2b3cf6b!2sTrnavsk%C3%A1%20cesta%20177%2F82%2C%20821%2002%20Bratislava%2C%20Slovakia!5e0!3m2!1sen!2skr!4v1700137704708!5m2!1sen!2skr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
    
                <div class="info_block">
                    <div class="info">
                        <h4 class="info_title">
                            <?php the_field('info_title'); ?>
                        </h4>
                        <p class="info_subtitle">
                            <?php the_field('contact_name'); ?>
                        </p>
                        <div class="info_mail">
                            E: <?php the_field('contact_email'); ?> 
                        </div>
                        <p class="info_phone">
                            P: <?php the_field('contact_phone'); ?>
                        </p>
                    </div>


                    <div class="info">
                        <h4 class="info_title">
                            <?php the_field('info_title_1'); ?>
                        </h4>
                        <p class="info_subtitle">
                            <?php the_field('contact_name_1'); ?>
                        </p>
                        <div class="info_mail">
                            E: <?php the_field('contact_email_1'); ?> 
                        </div>
                        <p class="info_phone">
                            P: <?php the_field('contact_phone_1'); ?>
                        </p>
                    </div>

                    <div class="info">
                        <h4 class="info_title">
                            <?php the_field('info_title_2'); ?>
                        </h4>
                        <p class="info_subtitle">
                            <?php the_field('contact_name_2'); ?>
                        </p>
                        <div class="info_mail">
                            E: <?php the_field('contact_email_2'); ?> 
                        </div>
                        <p class="info_phone">
                            P: <?php the_field('contact_phone_2'); ?>
                        </p>
                    </div>

                    <div class="info">
                        <h4 class="info_title">
                            <?php the_field('info_title_3'); ?>
                        </h4>
                        <p class="info_subtitle">
                            <?php the_field('contact_name_3'); ?>
                        </p>
                        <div class="info_mail">
                            E: <?php the_field('contact_email_3'); ?> 
                        </div>
                        <p class="info_phone">
                            P: <?php the_field('contact_phone_3'); ?>
                        </p>
                    </div>
    
                </div>
            </div>


        </div>
    </main>


    <section class="feedback">
        <div class="container">
            <h1 class="title">
                FEEDBACK
            </h1>
    
            <div class="feedback_wrapper">
                <div class="feedback_form">
                    <?php echo do_shortcode('[contact-form-7 id="1d0137b" title="Feedback form"]'); ?>
                </div>
    
                <div class="feedback_descr">
                    <p>You can also ask questions by phone of a hot line:</p>
                    <br>
                    <span><?php the_field('phone_number', 2); ?></span> <br>
                    The answers to many questions already in our <a href="#">FAQ</a> <br>
                    All suggestions and comments are considered mandatory!
                </div>
    
            </div>
        </div>
    </section>

    <?php 
    get_footer();
    ?>
