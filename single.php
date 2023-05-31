<?php get_header(); ?>

<div class="container">
    <h1>
        <?php the_title(); ?>
    </h1>
    <br />

    <?php get_template_part("includes/section", "content"); ?>
    <br />
    <a href="https://www.linkedin.com" class="btn btn-success" id="readmore-button">Apply!</a>
    <a href="javascript:history.go(-1)" class="btn btn-success" id="readmore-button">Go Back</a>
</div>

<?php get_footer(); ?>
