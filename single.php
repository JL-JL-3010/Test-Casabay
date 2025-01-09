<?php
/**
 * The template for displaying the single
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package Wordpress
 * @subpackage WCL Single Page
 * @since 1.0.0
 */

get_header();

while(have_posts()): the_post();
    the_title();
    the_content();
endwhile;

get_footer();
?>

