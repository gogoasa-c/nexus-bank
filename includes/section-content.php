<?php

if(have_posts()){
    while(have_posts()){
        the_post();
        echo "<h2><b>";
        the_title();
        echo "</h2></b><br />";
        the_content();
    }
}