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
                <span class="breadcrumbs">
					<span class="info"><a class="info" href="<?php echo get_site_url(); ?>">Home</a> / <a class="info" href="/blog">Current Trends</a> / </span>
					<span>
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
					?>
					</span>
				</span>
				<?php
					while ( have_posts() ) :
						the_post(); ?>
						
						</div>
						</div>
						<div class="row">
						<div class="col-lg-8">
						
						<span class="loc-date"> <?php the_field('current_date'); ?></span>
							
						<h2 class="title"><?php the_field('title_post'); ?></h2>
						
							
							<?php if(get_field('post_video')) {?>
							<video controls>
								<source src="<?php the_field('post_video'); ?>" type="video/mp4">
							</video>
							<?php }else{ ?>
                            <img class="featured-image" src="<?php the_field('post_image'); ?>" alt="blog-post-img1" />
                            <?php } ?>
							<?php the_field('detail_post_content'); ?>
						
							<div class="author">
								<img src="<?php the_field('author_image'); ?>"/>
								<span><strong>
									<?php the_field('author_name'); ?>
									</strong>
								<span><?php the_field('author_designation'); ?></span>
								</span>
							</div>
		
						
					
					

				<?php	endwhile; // End of the loop.
					?>
            
            </div>
            <div class="col-12 col-md-4"> 
    <div class="right-sidebar">
    <h3>Subscribe to this blog to stay up to date on all the Current Trends!</h3>
    <?php the_field('contact_form');?>
    </div>
    <?php //echo do_shortcode('[contact-form-7 id="4135" title="Services Form"]'); ?>
    </div>
        </div>
    </div>
</section>
		
<?php
get_footer();
