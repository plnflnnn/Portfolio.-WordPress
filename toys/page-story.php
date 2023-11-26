<?php 
/*
Template Name: Our Story
*/
?>

<?php  
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('story_title'); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('first_story_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('first_story_text'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="specialists__img"  
                src="<?php the_field('first_story_image'); ?>" 
                alt="about the company">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" 
                src="<?php the_field('second_story_image'); ?>" 
                alt="the world of childhood">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('second_story_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('second_story_text'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('third_story_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('third_story_text'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" 
                src="<?php the_field('third_story_image'); ?>" 
                alt="the world of childhood">
            </div>
        </div>
    </div>
</div>


<?php  
    get_footer();
?>