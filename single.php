<?php get_header(); ?>

<header>
    <?php if(has_post_thumbnail()):?> 
                <img 
                    src="<?php the_post_thumbnail_url(); ?>" 
                    alt="<?php the_title(); ?>"
                    loading="lazy"
                    class="img-fluid img-thumbnail mb-4"
                >
                
            <?php else: ?>


                <img 
                    src="https://picsum.photos/1920/800" 
                    loading="lazy"
                    alt="" class="img-fluid img-thumbnail mb-4">
        
        <?php endif; ?>
    <?php get_template_part('includes/section', 'top'); ?>
</header>

<main>
    <div class="container">
        <?php get_template_part('includes/section', 'blogcontent'); ?>
        
    </div>
</main>

<?php get_footer(); ?>