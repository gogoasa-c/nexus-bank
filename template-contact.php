<?php

/*
Template Name: Contact Us
*/
?>

<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <p class="title">
            <?php the_title() ?>
            </p>
            <?php get_template_part("includes/section", "contact")  ?>
        </div>
        <div class="col-lg-6">
            <p class="title">
                Send us a message!
            </p>
            <?php get_template_part("includes/form", "message") ?>
        </div>

</div>
<?php get_footer(); ?>