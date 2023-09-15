<?php get_header(); ?>

<div class="container-fluid bg-col-dk py-4">
    <p>INDEX</p>

    <?php

        $posts_per_page = 2;

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $posts_per_page,
        );

        $blogposts = new WP_Query($args);

        if ($blogposts->have_posts()):
            $post_counter = 0;
            while ($blogposts->have_posts()):
                $blogposts->the_post();
                $post_counter++;
    ?>

    <a href="<?php the_permalink(); ?>" class="text-decoration-none blog-link">
        <h3 class="text-uppercase section-title">
            <?php the_title(); ?>
        </h3>
    </a>
    <p class="m-0">
        <?php the_excerpt(); ?>
    </p>
    <hr class="<?php if( $post_counter == $posts_per_page ) echo 'last-post'?>">



    <?php 

        endwhile;
    endif;
    // Good practice to reset the query after the loop - avoids problems later
    wp_reset_query();
    
    ?>
</div>

<?php get_footer(); ?>
