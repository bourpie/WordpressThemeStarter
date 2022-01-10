<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<article class="card mb-3">
    <div class="card-body d-flex justify-content-center align-item-center">
        <?php if(has_post_thumbnail()):?> 
            <img 
                src="<?php the_post_thumbnail_url('blog-small'); ?>" 
                alt="<?php the_title(); ?>"
                loading="lazy"
                class="img-fluid img-thumbnail me-4"
            >
            
        <?php else: ?>


            <img 
                src="https://picsum.photos/300/200" 
                loading="lazy"
                alt="" class="img-fluid img-thumbnail me-4">
    
       <?php endif; ?>

        <div class="blog-content">
            <h2><?php the_title();?></h2>
            <?php the_excerpt();?>
            <a class="btn btn-dark" href="<?php the_permalink();?>">Read more</a></p>

        </div>

    </div> 
</article>
<?php endwhile; else : endif;?>