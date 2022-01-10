<?php get_header(); ?>

<main>
    <div class="container">

        <h1 class="mb-5">
            Search results for '<?php the_search_query(); ?>'
        </h1>

        <?php get_template_part('includes/section', 'searchresults'); ?>

        <!-- <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?> -->

        <?php

        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
        ) );
        ?>


    </div>
</main>

<?php get_footer(); ?>