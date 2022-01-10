<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<p>
    <?php the_author_meta('first_name'); ?>
    <?php the_author_meta('last_name'); ?>,
    <?php the_date(); ?>
</p>

<?php
$posttags = get_the_tags();
if ($posttags) { ?> 
<div class="mb-4">
    <?php foreach($posttags as $tag) { ?>
        <a 
        class="badge bg-success text-decoration-none" 
        href="<?php echo get_tag_link($tag->term_id); ?>">
            <?php echo $tag->name; ?>
            </a>
    <?php } ?>
 </div>
<?php } 

?>

<?php the_content();?>
<?php wp_link_pages(); ?>

<?php
$categories = get_the_category();
foreach($categories as $category) {
    echo '<a 
    class="badge 
    bg-success text-decoration-none" 
    href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
}
?>

<?php comments_template(); ?>

<?php endwhile; else : endif;?>
