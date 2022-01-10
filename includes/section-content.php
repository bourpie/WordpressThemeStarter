<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<div class="container">
    <div class="row">
            <div class="col-12">
                <?php the_content();?>
            </div>
        </div>
    </div> 
<?php endwhile; else : endif;?>