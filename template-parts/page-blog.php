 <?php
/**
 Template Name: Blog
 */

get_header();

ini_set( 'error_log', WP_CONTENT_DIR . '/debug.log' );

?>
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('.nav-tabs li a').click(function (e) {
       //  e.preventDefault();
        // e.stopImmediatePropagation();
        var scrollHeight = jQuery(document).scrollTop();

        jQuery(this).tab('show');

        setTimeout(function() {
            jQuery(window).scrollTop(scrollHeight );
        }, 5);
    });

});

</script>
   <style>
   /*
.page-template-page-blog #innerhero {
    background: url("<?php the_field('featured_image_desktop'); ?>") no-repeat center top;
    background-size: cover;
}
*/
</style>               
    <div class="blog-banner-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 featuredtext">
                    <div class="inner-content">
                        <span class="breadcrumbs">
                    <span class="info">Current Trends</span>
                    
                </span>
                        <?php
                        
                         $loop = new WP_Query( array( 'post_type' => 'currenttrendsblog', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '-1' )); ?>
                        <?php
                        $featuredShown = false;
                        while( $loop->have_posts() ) : $loop->the_post(); 
                            $featuredPostID = get_the_id();
                            if ($featuredShown) {
                                break;
                            }

                         $graphicvvalue = get_field('featured_posts');
                         if($graphicvvalue['0'] == 'featuredpost') {

                            $featuredShown = true;


                            $featImageID = get_post_meta($featuredPostID, 'featured_image_desktop', true);
                            $featuredURL = wp_get_attachment_url($featImageID);


                            $featImageMobileID = get_post_meta($featuredPostID, 'featured_image_tablet', true);
                            $featuredURLMobile = wp_get_attachment_url($featImageMobileID);
                        
                        ?>
                        
                        <style type="text/css">
                        @media screen and (min-width: 1025px) {
                            .page-template-page-blog #innerhero {
                                background: url("<?php echo $featuredURL;  ?>") no-repeat center top !important;
                                background-size: cover !important;
                            }
                        }
                        </style>  
                        <?php
                         $blogDate = get_post_meta($featuredPostID, 'current_date', true);
                         //   $blogDate = get_the_field('current_date', $postID);
                         $myDateTime = DateTime::createFromFormat('Ymd', $blogDate);
                         $blogDate = $myDateTime->format('m/d/Y');
                         ?>

                        <span class="featuretitle">Featured Blog Post</span>
                        <span class="feature-date"><?php echo $blogDate; ?></span>
                        <h1 class="herosub"><?php the_field('title_post');?></h1>
                        <div class="for-tablet">
                            <img src="<?php echo $featuredURLMobile; ?>" alt="blog-image-tab" />
                           <?php
                           /*
                            <a href="#" class="mobile-icon">
                                <img src="/wp-content/uploads/2021/05/mobile-drop-icon.png" alt="mobile-drop-icon" />
                            </a>
                            */
                            ?>
                        </div>
                        <span class="subtitle"><?php the_field('content_post');?></span>
                
                        <a href="<?php echo get_the_permalink(); ?>" target="_blank">
                            <span class="readmore"><i class="fas fa-chevron-right"></i> Read More</span>
                        </a>

                         <?php
                        } ?>
                   <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                        <div class="icon-for-tablet">
                            <a href="#"><img src="/wp-content/uploads/2021/05/drop-icon.png" alt="drop-icon" /></a>
                        </div>
                    </div>                        
                </div>             

            </div>
        </div>
    </div>

</div>



<section class="blog-tabs-area">
    <div class="container">
    <div class="row"> 
    <div class="col-12">
    <div class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li>
                        <a class="active" href="#blog_tab1" data-toggle="tab">All Posts </a>
                    </li>
                    <?php 
                    
                    $args = array(
                            'hide_empty' => '0',
                            'post_type' => 'currenttrendsblog', 
                           'taxonomy' => 'blog_categories',
                           'order'   => 'ASC'
                       );
                     $categories = get_categories($args);
                     foreach ($categories as $category) {  
                        if ($category->count > 0){
                        ?>
                    <li>
                        <a href="#blog_tab<?php echo $category->slug ?>" data-toggle="tab"><?php echo $category->cat_name; ?></a>
                    </li>
                   <?php 
                   } 
                } ?>
                   <!--  <li>
                        <a href="#blog_tab3" data-toggle="tab">Energy Storage</a>
                    </li>
                    <li>
                        <a href="#blog_tab4" data-toggle="tab">Microgrids </a>
                    </li> -->
                </ul>
                         <div class="filter-posts tablet">
                    <h5>Filter Posts by:</h5>
                    <div class="select-post">
                        <select class="mb-3" id="tab_selector">
                            <option value="0">All Posts</option>
                            <?php 
                    
                            $args = array(
                            'hide_empty' => '0',
                            'post_type' => 'currenttrendsblog', 
                           'taxonomy' => 'blog_categories',
                           'order'   => 'ASC'
                       );
                     $categories = get_categories($args);
                     foreach ($categories as $category) {  
                        if ($category->count > 0){
                        ?>
                            <option value="<?php echo $category->slug ?>"><?php echo $category->cat_name; ?></option>
                            <?php } } ?>
                            <!-- <option value="2">Energy Storage</option>
                            <option value="3">Microgrids</option> -->
                        </select>
                    </div>
                </div>
                </div>
					<div class="col-12 col-md-8">
                <div class="tab-content">
                    <div class="tab-pane active" id="blog_tab1">
                        <div class="blog-posts-list">
                            <?php 
                            wp_reset_postdata();
                            $query_args = array(
                                'post_type' => 'currenttrendsblog',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'orderby' => 'meta_value',
                                'posts_per_page' => '-1',
                                'meta_key' => 'current_date',
                            );
                            $the_query = new WP_Query( $query_args );
                            ?>
                             <?php while( $the_query->have_posts() ) {
                                $the_query->the_post(); 
                                
                             $postID = get_the_id();
                             $blogDate = get_post_meta($postID, 'current_date', true);
                           //   $blogDate = get_the_field('current_date', $postID);
                           $myDateTime = DateTime::createFromFormat('Ymd', $blogDate);
                           $blogDate = $myDateTime->format('m/d/Y');
                          ?>
                            <div class="blog-post-item">
                                <div class="blog-item-image test">
                                    <?php 
                                    $permalink = get_permalink();?>
                                    
                                    <a href="<?php echo $permalink;?>">
                                        <img src="<?php the_field('post_image_thumbnail'); ?>" alt="blog-post-img1" />
                                    </a>
                                </div>
                                <div class="blog-item-text">
                                    <span class="blog-item-date"><?php echo $blogDate; ?></span>
                                    <h3>
                                        <?php the_field('title_post'); ?>
                                    </h3>
                                    <?php 
                                   
                                    $contentPost = get_post_meta($postID, 'content_post', true);
                                    $contentPost = str_replace('<a', '<a style="position: relative;
                                    display: inline-block;
                                    bottom: auto;
                                    font-size: inherit;" ', $contentPost);
                                    echo wpautop($contentPost);
                                   
                                    ?>
                                    <?php 
                                    $permalink = get_permalink();?>
                                    <a href="<?php echo $permalink;?>">
                                        <span class="readmore"><i class="fas fa-chevron-right"></i> Read More</span>
                                    </a>
                                </div>
                            </div>
                            <?php }
                           //  echo 'end while';
                            ?>
                        <?php wp_reset_postdata(); ?>
                            
                        </div>
                    </div>
                    <?php 
                         $categories = get_categories($args);
                         foreach ($categories as $category) {  
                           // if ($category->count > 0){
                            ?>
                    <div class="tab-pane" id="blog_tab<?php echo $category->slug ?>">
                    <div class="blog-posts-list">
                        <?php $loop = new WP_Query( array( 'post_type' => 'currenttrendsblog', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => '-1' , 'blog_categories' => $category->slug) ); ?>
                            <?php while( $loop->have_posts() ) : $loop->the_post();?>
                            <div class="blog-post-item">
                                <div class="blog-item-image">
                                    <a href="<?php the_permalink();?>">
                                        <img src="<?php the_field('post_image_thumbnail'); ?>" alt="blog-post-img1" />
                                    </a>
                                </div>
                                <div class="blog-item-text">
                                    
                                    <span class="blog-item-date"><?php the_field('current_date');?></span>
                                    <h3>
                                        <?php the_field('title_post'); ?>
                                    </h3>
                                    <?php //the_field('content_post'); ?>
                                    <?php 
                                   
                                    $contentPost = get_post_meta($postID, 'content_post', true);
                                    $contentPost = str_replace('<a', '<a style="position: relative;
                                    display: inline-block;
                                    bottom: auto;
                                    font-size: inherit;" ', $contentPost);
                                  echo wpautop($contentPost);
                                   
                                    ?>
                                    <?php 
                                    $permalink1 = get_permalink();?>
                                    <a href="<?php echo $permalink1;?>">
                                        <span class="readmore"><i class="fas fa-chevron-right"></i> Read More</span>
                                    </a>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php } 

                  //  echo 'after categories';

                    // } ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4"> 
    <div class="right-sidebar">
    <h3>Subscribe to this blog to stay up to date on all the Current Trends!</h3>
    <?php the_field('blog_sidebar_form');?>
    </div>
    <?php //echo do_shortcode('[contact-form-7 id="4135" title="Services Form"]'); ?>
    </div>
    </div>
        

    </div>
</section>

<?php
get_footer();