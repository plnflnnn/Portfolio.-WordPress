<?php 
/*
Template Name: Privacy Policy page
*/
?>

<?php 
    get_header();
?>

<main>
    <div class="container">
        <div class="content">
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
            <div class="page_descr" style="margin-bottom:50px">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>


<?php 
    get_footer();
?>