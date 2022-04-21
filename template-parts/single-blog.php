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
					<span class="info">Home : Current Trends : </span>
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
							
							<?php global $post; 
	
	$cat = get_the_category($post->ID);
	
	if ( ! empty( $cat ) ) {
       echo esc_html( $cat [0]->cat_name );   
    } ?>
						<h2 class="title"><?php the_field('title_post'); ?></h2>
							<?php the_field('content_post'); ?>
							<img class="featured-image" src="<?php the_field('post_image'); ?>" alt="blog-post-img1" />
							<video controls>
								<source src="/wp-content/uploads/2021/05/sample-mp4.mp4" type="video/mp4">
							</video>
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
        </div>
    </div>
</section>
		
<?php
get_footer();
