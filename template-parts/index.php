<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package qmerit-new
 */

get_header();

 if ( get_post_type() === 'news' ) { 
    
     get_template_part('template-parts/content','news'); 
     
} else { 
    
get_template_part('template-parts/content','blog'); 

 } 

get_footer();
