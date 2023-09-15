<?php get_header(); ?>

<div class="container-fluid bg-col-dk">

    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
        );

        $blogposts = new WP_Query($args);

        if ($blogposts->have_posts()):
            while ($blogposts->have_posts()):
                $blogposts->the_post();
    ?>

    <a href="<?php the_permalink(); ?>" class="text-decoration-none blog-link">
        <h3 class="text-uppercase section-title">
            <?php the_title(); ?>
        </h3>
    </a>
    <p class="m-0">
        <?php the_excerpt(); ?>
    </p>


    <?php 

        endwhile;
    endif;
    // Good practice to reset the query after the loop - avoids problems later
    wp_reset_query();
    
    ?>
</div>

<?php get_footer(); ?>
