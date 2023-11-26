<?php 
    get_header();
?>

    <main>
        <div class="container">
    
            <section class="single">

                <h1 class="title">
                    <?php the_title(); ?>
                </h1>

                <div class="content">
                    <?php the_content(); ?>
                </div>

            </section>

        </div>
    </main>

 <?php 
    get_footer();
?>