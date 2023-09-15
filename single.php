<?php get_header(); ?>

<?php

if (have_posts()):
    while (have_posts()):
        the_post();

?>

        <h2><?php the_title(); ?></h2>

        <p>Posted By: <?php the_author(); ?></p>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Thumbnail image for post: <?php the_title(); ?>">
        <?php the_content(); comment_form(); ?>


<?php 

    endwhile;
endif;

?>

<?php get_footer(); ?>
