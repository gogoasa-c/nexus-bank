<?php
if(have_posts()){
    $args = array(
        'post_type' => 'post',
        'post_per_page' => -1,
        'post_status' => 'publish',
        'category_name' => 'career-opportunities'
    );

    $arr_posts = new WP_Query($args);

    if($arr_posts->have_posts()){
        while($arr_posts->have_posts()){

            $arr_posts->the_post();
            echo "<h2><b>";
            the_title();
            echo "</h2></b>";


            the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-success" id="readmore-button">Read more...</a>
            <br />
            <br />
            <br />
            <?php
        }
    }
}