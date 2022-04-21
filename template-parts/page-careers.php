<?php
/**
 Template Name: careers Page
 */

get_header();
?>

<style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_background'); ?>) no-repeat top center; background-size: cover;
}

@media screen and (max-width: 370px){
 #innerhero{
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_image_tablet'); ?>) no-repeat top center; background-size: cover;
 }
}
</style>
<div class="herotextarea">
	        <div class="container">
		        <div class="row">
			        <div class="col-lg-6 heroleft">
			        	<ul class="custom-breadcrumbs">
                        
			        		<!--<li><a href="#">Home</a></li>
			        		<li><a href="#">Our Company</a></li>-->
			        		<li><span>Careers</span></li>
			        	</ul>
			            <span class="herotitle"><?php the_field('small_header_text');?></span>
			            <h1><?php the_field('large_header_text');?></h1>
			        </div>

		        	<a href="#explore" class="ipadonly"><span class="scrollicon bounce"><img src="https://www.qmerit.com/wp-content/uploads/2021/02/Mobile-scroll.svg" alt="scroll"/></span></a>

		        </div>
	        </div>
        </div>

    </div>
    <!-- /.Careers Hero -->
    
    
    <div class="explore-section" id="explore">
    	<div class="container text-align-center">
    		<h2 class="title-md"><?php the_field('energy_heading');?></h2>
    		<div class="text-container">
    			<?php the_field('energy_content');?>
    		</div>
    		<a target="_blank"  href="<?php the_field('button_url');?>" class="btn-cta"><?php the_field('button_text');?></a>
    	</div>
    </div>

    <div class="reviews-section">
    	<div class="container">
    		<div class="carerres-reviews">
            <?php if( have_rows('reviews') ): ?>
    <?php while( have_rows('reviews') ): the_row(); ?>
    			<div class="carerres-review">
    				<div class="blurb">
    					<?php the_sub_field('content') ?>
    				</div>
    				<div class="review-detail">
    					<div class="review-img">
    						<img src="<?php the_sub_field('image') ?>" alt="">
    					</div>
    					<div class="img-text">
	    					<span><?php the_sub_field('name') ?></span>
	    					<p><?php the_sub_field('position') ?></p>
    					</div>
    				</div>
    			</div>
                <?php endwhile; ?>
			<?php endif; ?>
    			
    		</div>
    	</div>
    </div>

    <div class="joinus-section">
    	<div class="container text-align-center">
    		<h2 class="title-md"><?php the_field('join_us_heading'); ?></h2>
	    	<div class="joinus-items">
             <?php if( have_rows('joins_us_content') ): ?>
    <?php while( have_rows('joins_us_content') ): the_row(); ?>
	    		<div class="joinus-item">
	    			<img src="<?php the_sub_field('join_image') ?>" alt="">
	    			<span><?php the_sub_field('join_heading') ?></span>
	    			<?php the_sub_field('join_content') ?>
	    		</div>
                <?php endwhile; ?>
                <?php endif; ?>
	    		
	    	</div>
	    	<a target="_blank" href="<?php the_field('join_us_button_url'); ?>" class="btn-cta"><?php the_field('join_us_button_text'); ?></a>
    	</div>
    </div>



    <div class="film-strip">
    	<img class="film-strip-desktop" src="<?php the_field('big_image'); ?>">
    	<img class="film-strip-tab" src="<?php the_field('mobile_image'); ?>">
    </div>

<?php
get_footer();
?>