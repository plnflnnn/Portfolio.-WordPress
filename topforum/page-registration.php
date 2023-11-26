<?php 
/*
Template Name: Registration page
*/
?>

<?php 
    get_header();
?>

    <div class="registration">
        <div class="container">

            <div class="title">
                2  EASY STEPS TO REGISTER
            </div>

            <div class="registration_instructions">
                <div class="registration_instruction">
                    FILL IN THE FORM IN ENGLISH
                </div>
                <div class="registration_instruction_divider">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/select-arrow.png" alt="arrow">
                </div>
                <div class="registration_instruction">
                    READ THOROUGHLY TERMS&CONDITIONS
                </div>
            </div>

            <div class="registration_form_wrapper">
                <div class="registration_form">

                <div class="labels">
                        <label for="conference">Please, choose a conference:
                        </label>

                        <label for="packages">
                            Please choose delegate package:
                        </label>
                        <label for="client-name">
                            Name:
                        </label>
                        <label for="surname">
                            Surname:
                        </label>
                        <label for="company">
                            Company Name:
                        </label>
                        <label for="area">
                            Business Area:
                        </label>
                        <label for="position">
                            Position:
                        </label>
                        <label for="email_org">
                            E-mail (for organizers):
                        </label>
                        <label for="email_sponsor">
                            E-mail (for sponsors):
                        </label>
                        <label for="tel">
                            Mobile Number (for organizers):
                        </label>
                        <label for="country">
                            Country:
                        </label>
                        <label for="website">
                            Web-site:
                        </label>
                        <label for="payment">
                            Method of payment
                        </label>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="3c4c85a" title="Registration"]'); ?>
                    <a class="checkbox_label" href="<?php echo get_home_url() . '/privacy-policy/' ?>">I accept Terms&Conditions</a>
                </div>

                <div class="registration_form sm">
                    <?php echo do_shortcode('[contact-form-7 id="7701441" title="Registration small"]'); ?>
                    <a class="checkbox_label" href="<?php echo get_home_url() . '/privacy-policy/' ?>">I accept Terms&Conditions</a>
                </div>

            </div>
        </div>
    </div>

    <?php 
    get_footer();
    ?>
