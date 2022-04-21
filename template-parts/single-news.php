<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package qmerit-new
 */
get_header();
?>

<section id="singlenews">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="breadcrumbs"><?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?></span>
	<?php
		while ( have_posts() ) :
			the_post(); ?>
			
			<span class="release"><?php the_field('release'); ?></span>
			<h1><?php the_title(); ?></h1>
			</div>
			</div>
			<div class="row">
			<div class="col-lg-8">
			<?php if(get_field('bullet_points')): ?>
			<span class="bulletlist">
			 
			 <ul>
            <?php while(have_rows('bullet_points')): the_row(); ?>
			<li><?php the_sub_field('item'); ?></li>
			<?php endwhile; ?>
			</ul>
			
			</span>
			<?php endif; ?>
			<span class="loc-date"><?php the_field('location'); ?> - <?php the_field('date'); ?></span>  <?php the_content(); ?>
			
			<div class="aboutarticle">
			    <?php the_field('about_text'); ?>
			</div>
			<div class="media">
			<?php the_field('contact_area'); ?>
			</div>
			 
		
		

	<?php	endwhile; // End of the loop.
		?>
            
            </div>
            <div class="col-lg-4">
             <div class="right-sidebar single-news">
    <h3> to this blog to stay up to date on all the Current Trends!</h3>
             <?php the_field('news_sidebar_form'); ?>
             </div>
             </div>
        </div>
    </div>
</section>
		
<?php
get_footer();
