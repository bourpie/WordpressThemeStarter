<?php get_header(); ?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <?php the_title();?>
                </h1>
            </div>
        </div>
    </div>
</header>

<main>

    <?php get_template_part('includes/section', 'content'); ?>

</main>

<?php get_footer(); ?>