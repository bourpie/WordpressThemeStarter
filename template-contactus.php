<?php get_header(); ?>


<header>
    <?php get_template_part('includes/section', 'top'); ?>
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                Form container
            </div>
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'content'); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>