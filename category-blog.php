<?php get_header(); ?>

<main>
    
    <div class="container">
    <?php the_archive_title(false); ?>
        <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
        <?php get_template_part('includes/section', 'archive'); ?>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>


</main>

<?php get_footer(); ?>