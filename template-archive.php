<?php
/*
 * Template Name: Archive
 */
?>
<?php get_header(); ?>

<div class="container">
    <h1>
        <?php the_title(); ?>
    </h1>
    <br />

    <?php get_template_part("includes/section", "archive"); ?>
    <br />

<?php get_footer() ?>
