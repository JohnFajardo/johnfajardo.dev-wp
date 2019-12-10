<?php

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
       return '<p class="text-right"><a class="btn btn-primary" href="' . get_permalink() . '">Read More...</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>