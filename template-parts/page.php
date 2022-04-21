<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package qmerit-new
 */

get_header();
?>
<section id="defaultcontent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php the_title(); ?></h1>
                 <?php
		while ( have_posts() ) :
			the_post(); ?>
                    <?php the_content(); ?>
                    <?php 	endwhile; // End of the loop.
		?>
        
	
        </div>
        </div>
        </div>
        </section>

	



<?php
get_footer();
