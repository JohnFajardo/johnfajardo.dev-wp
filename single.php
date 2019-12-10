<?php get_header(); ?>

<div class="container-fluid h-100 px-0">

    <?php get_sidebar(); ?>
            <div class="col-12 col-lg-7 offset-lg-4 mt-sm-3 p-lg-3 main-content"> <!-- Post container -->
            <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'content', 'single' );
                endwhile;
            ?>
    </div>
    
</div><!-- End Container-->