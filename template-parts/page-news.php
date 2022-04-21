 <?php
/**
 Template Name: News Page
 */

get_header();
?>
 
                  <?php $loop = new WP_Query( array( 'post_type' => 'news', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '1', 'category_name' => 'Featured')); ?>
			<?php while( $loop->have_posts() ) : $loop->the_post(); 
                        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
                        ?>
<div id="innerhero" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; ">
    
	<header id="masthead" class="site-header">
		  <div class="container">
            <div class="row">
                <div class="col-md-2 logoarea">
                <a href="/">
                       <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 135 40" style="enable-background:new 0 0 135 40;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#3963FE;}
</style>
<g>
	<circle class="st0" cx="116.6" cy="5.4" r="2.6"/>
	<path class="st0" d="M64.3,10.9c-1.5,0-2.8,0.3-4.1,0.8c-1.1,0.5-2.1,1.2-2.8,2.1c-0.1,0.1-0.3,0.1-0.3,0c-0.6-0.9-1.4-1.6-2.4-2.1
		c-1.1-0.5-2.3-0.8-3.8-0.8c-1.3,0-2.5,0.2-3.5,0.7c-0.9,0.4-1.6,0.9-2.3,1.5c-0.1,0.1-0.4,0.1-0.4-0.1v-0.1c0-1-0.8-1.8-1.8-1.8
		h-1.6c-0.5,0-0.9,0.4-0.9,0.9v16.2c0,1,0.8,1.8,1.8,1.8H44c0.5,0,0.9-0.4,0.9-0.9v-8.7c0-1.8,0.4-3.2,1.3-4.2
		c0.9-1,2.1-1.4,3.6-1.4c1.4,0,2.4,0.4,3.1,1.3c0.7,0.8,1.1,2.1,1.1,3.7v8.5c0,1,0.8,1.8,1.8,1.8h1.8c0.5,0,0.9-0.4,0.9-0.9v-8.7
		c0-1.8,0.4-3.2,1.3-4.2c0.9-1,2.1-1.5,3.6-1.5c1.4,0,2.4,0.4,3.1,1.3c0.7,0.8,1.1,2.1,1.1,3.7v8.5c0,1,0.8,1.8,1.8,1.8h1.8
		c0.5,0,0.9-0.4,0.9-0.9v-9.9c0-2.7-0.7-4.8-2.1-6.2C68.6,11.6,66.7,10.9,64.3,10.9z"/>
	<path class="st0" d="M117,11.1h-1.8c-0.5,0-0.9,0.4-0.9,0.9v16.2c0,1,0.8,1.8,1.8,1.8h1.8c0.5,0,0.9-0.4,0.9-0.9V12.9
		C118.8,11.9,118,11.1,117,11.1z"/>
	<path class="st0" d="M134.9,28.2L134.9,28.2c-0.4-1.1-1.6-1.8-2.8-1.6c-0.2,0-0.4,0-0.6,0c-0.8,0-1.5-0.2-1.9-0.7
		c-0.5-0.5-0.7-1.2-0.7-2.1v-9h2.4c1.5,0,2.6-1.2,2.6-2.6c0-0.5-0.4-0.9-0.9-0.9h-4.2V8.7c0-1-0.8-1.8-1.8-1.8h-1.8
		c-0.5,0-0.9,0.4-0.9,0.9v16c0,2.1,0.6,3.6,1.7,4.7s2.7,1.6,4.8,1.6c0.8,0,1.6-0.1,2.3-0.3c0.5-0.1,0.9-0.3,1.3-0.5
		C134.9,29.2,135.1,28.7,134.9,28.2z"/>
	<path class="st0" d="M108.7,11c-2.6,0.2-4.5,1.1-5.7,2.8h-0.1v-0.9c0-1-0.8-1.8-1.8-1.8h-1.6c-0.5,0-0.9,0.4-0.9,0.9v16.2
		c0,1,0.8,1.8,1.8,1.8h1.8c0.5,0,0.9-0.4,0.9-0.9v-8.2c0-1.9,0.5-3.3,1.4-4.3c0.7-0.8,1.7-1.2,2.8-1.4c1.1-0.2,2.2-1.1,2.2-2.6V12
		C109.5,11.3,109.2,11,108.7,11z"/>
	<path class="st0" d="M90.5,12.1c-1.4-0.8-3.1-1.2-4.9-1.2c-1.9,0-3.5,0.4-5,1.2s-2.6,2-3.5,3.4c-0.8,1.5-1.3,3.1-1.3,5
		s0.4,3.5,1.3,5s2.1,2.6,3.6,3.4c1.6,0.8,3.4,1.2,5.5,1.2c1.6,0,3.1-0.3,4.4-0.8c1-0.4,1.9-1,2.6-1.7c0.3-0.3,0.4-0.9,0-1.3L93,26.1
		c-0.8-0.9-2.1-1.2-3.2-0.6c-1,0.6-2.2,0.8-3.5,0.8c-1.6,0-3-0.4-4.1-1.2c-1-0.8-1.7-1.8-2-3c0-0.1,0.1-0.3,0.2-0.3h13.7
		c0.5,0,0.9-0.4,0.9-0.8c0-0.2,0-0.3,0-0.5c0-1.9-0.4-3.6-1.2-5.1C93.1,14.1,91.9,13,90.5,12.1z M90.6,19H80.5
		c-0.1,0-0.2-0.1-0.2-0.3c0.2-1.3,0.8-2.3,1.7-3.1c1-0.8,2.2-1.3,3.6-1.3s2.6,0.4,3.6,1.3c0.9,0.8,1.5,1.8,1.7,3
		C90.9,18.9,90.8,19,90.6,19z"/>
	<path class="st0" d="M37.2,35.1c-2.8-0.4-5.3-2-6.9-4.2c-0.2-0.3-0.2-0.8,0.1-1.1c3.4-3.5,5.3-8.4,4.8-13.8
		c-0.8-8.6-8-15.5-16.6-16C8-0.5-0.7,8.3,0,18.9c0.6,7.9,6.6,14.6,14.4,16c2.7,0.5,5.3,0.3,7.7-0.3c1-0.3,2.1,0.1,2.8,0.9
		c1,1.3,2.3,2.5,3.7,3.5c1.5,1.1,3.4,1.2,5.1,0.5c1.6-0.7,2.9-1.7,4-3C38.2,36.1,37.9,35.2,37.2,35.1z M17.6,28.2
		C11.8,28.2,7,23.5,7,17.6C7,11.8,11.7,7,17.6,7s10.6,4.7,10.6,10.6S23.5,28.2,17.6,28.2z"/>
</g>
</svg>
                <!--<img src="<?php the_field('logo', 'options'); ?>" alt="QMerit" />--></a>
                </div>
                <div class="col-md-10 menuarea">
                     <?php 
                    wp_nav_menu( array(
				        'theme_location'  => 'primary',
				        'container'       => 'nav',
						'container_class' => 'navbar-collapse collapse',
						'menu_class'	  => 'nav navbar-nav',
					));
                ?>
                </div>
                <div class="col-md-9 mobilemenuarea">
                     <?php get_template_part('template-parts/content','mobilemenu'); ?>
                </div>
              </div>
            </div>
            
	   </header><!-- #masthead -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 featurednews">

            <span class="breadcrumbs">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>
            </span>
          <?php $smallimg = get_field('small_image'); ?>
           <span class="featuretitle">Featured Article</span>
           <span class="featureimg"><img src="<?php echo $smallimg['url']; ?>" alt="<?php echo $smallimg['alt']; ?>" />
           <h1><?php the_title(); ?></h1>
           <span class="subtitle"><?php the_field('subtitle'); ?></span>
           
           <?php if ( get_field( 'press_release' ) ): ?>
<a href="<?php the_permalink() ?>"><span class="readmore"><i class="fas fa-chevron-right"></i> Read More</span></a>
<?php else: ?>
<a href="<?php the_field('article_url'); ?>" target="_blank"><span class="readmore"><i class="fas fa-chevron-right"></i> See Full Article</span></a>
<?php endif; ?>
                        

               
                


                
    
    
            </div>
            
                      

            </div>
              <span class="photocredit"><?php the_field('credits'); ?></span>
                          <?php
                    endwhile; ?>
           <?php wp_reset_postdata(); ?>
                                    <a href="#installercontent" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>
<section id="newscontent">
    <div class="installtabs">
        <div class="container">
            <div class="col-lg-8">
            
                <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">
                    All News
                    </a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
                    Press Releases
                    </a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-3" aria-selected="false">
                    Qmerit in the News
                    </a>
                    </li>
                   
                </ul>
                
                <select class="mb-3 form-control visible-sm" id="tab_selector">
                    <option value="0">All News</option>
                    <option value="1">Press Releases</option>
                    <option value="2">Qmerit in the News</option>
                 
                </select>
            </div>
        </div>
    </div>
    <div class="tab-content" id="ex1-content">
  <div class="tab-pane active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
     <?php get_template_part('template-parts/content','allnews'); ?>
     </div>
     <div class="tab-pane" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
     <?php get_template_part('template-parts/content','press'); ?>
     </div>
     <div class="tab-pane" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
     <?php get_template_part('template-parts/content','qmeritnews'); ?>
     </div>
    
     </div>
     </div>
    
       
        
 
  
   
    

</section>


<?php
get_footer();