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

<div class="container">
    <div class="row">
        <aside class="col-3">
            <?php if( is_active_sidebar('page-sidebar') ) : ?>
                <?php dynamic_sidebar('page-sidebar'); ?>
            <?php endif; ?>
        </aside>

        <main class="col-9">
            <?php get_template_part('includes/section', 'content'); ?>
        </main>
    </div>
</div>



<?php get_footer(); ?>