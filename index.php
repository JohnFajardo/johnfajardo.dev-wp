<?php get_header(); ?>

<div class="container-fluid h-100 px-0">

    <?php get_sidebar(); ?>

    <div class="col-12 col-lg-9 offset-lg-3 mt-sm-3 py-0 my-0 px-lg-5 main-content">
        <h1>Latest Posts</h1>

        <hr class="separator" />

        <?php while ( have_posts() ) : the_post(); ?>
        <article class="post"">
            <h2><a class="link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><span class="icon-calendar"></span> 23 Sep 2019 -  <span class="icon-user"> </span>  John</p>
            <p>Posted on <?php the_date();?> - <?php the_author();?></p>                        
            <?php the_excerpt(); ?>
        </article>
        <hr class="separator" />
        <?php endwhile; ?>
        <?php get_footer(); ?>
            
    </div>
    
</div><!-- End Container-->