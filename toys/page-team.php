<?php 
/*
Template Name: Our Team
*/
?>

<?php  
    get_header();
?>

<div class="specialists">
    <div class="container">
        <div class="title"><?php the_field('team_title'); ?></div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php 
                    $teamimg = get_field('team_image');

                    if (!empty($teamimg)): ?>

                    <img class="specialists__img" 
                    src="<?php echo $teamimg['url']; ?>" 
                    alt="<?php echo $teamimg['alt']; ?>">
                    <?php endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php  
    get_footer();
?>