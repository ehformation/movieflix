<?php get_header(); ?>
<main class="container">    
    <?php while ( have_posts() ) : the_post(); ?>

        <h1 class="col_red"><?php echo get_the_title(); ?></h1>
        <div>
            <?php echo get_the_content(); ?>
        </div>

    <?php endwhile; ?>
</main>    
<?php get_footer(); ?>
