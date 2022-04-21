<?php
/**
 Template Name: Hire Installer Page
 */

get_header();
?>
<style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_back'); ?>) no-repeat top center; background-size: cover;
}
@media screen and (max-width: 768px){
 #innerhero{
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_image_tablet'); ?>) no-repeat top center; background-size: cover;
 }
}
@media screen and (max-width: 370px){
 #innerhero{
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_image_mobile'); ?>) no-repeat top center; background-size: cover;
 }
}
</style>
<div class="container">
<div class="row">
<div class="col-lg-6 heroleft">

    <span class="breadcrumbs"><?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?></span>
    <span class="herotitle"><?php the_field('large_header_text'); ?></span>
            <h1><?php the_field('small_header_text'); ?></h1>
            </div>
            </div>
                                    <a href="#installercontent" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>
<section id="installercontent">
    <div class="installtabs">
        <div class="container">
            <div class="col-lg-12">
            <h2><?php the_field('tabs_title'); ?></h2>
                <ul class="nav nav-tabs mb-5" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">
                    EV Chargers
                    </a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
                    Energy Storage
                    </a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-3" aria-selected="false">
                    Solar Integration
                    </a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-4" data-mdb-toggle="tab" href="#ex1-tabs-4" role="tab" aria-controls="ex1-tabs-4" aria-selected="false">
                    Emergency Power Generation
                    </a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-5" data-mdb-toggle="tab" href="#ex1-tabs-5" role="tab" aria-controls="ex1-tabs-5" aria-selected="false">
                    Microgrids
                    </a>
                    </li>
                </ul>
                <span class="tablettitle">I need an installer for...</span>
                <select class="mb-5 form-control visible-sm" id="tab_selector">
                    <option value="0">EV Chargers</option>
                    <option value="1"> Energy Storage</option>
                    <option value="2">Solar Integration</option>
                    <option value="3">Emergency Power Generation</option>
                    <option value="4">Microgrids</option>
                </select>
            </div>
        </div>
    </div>
    <div class="tab-content" id="ex1-content">
  <div class="tab-pane active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
     <?php get_template_part('template-parts/content','chargers'); ?>
     </div>
     <div class="tab-pane" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
     <?php get_template_part('template-parts/content','storage'); ?>
     </div>
     <div class="tab-pane" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
     <?php get_template_part('template-parts/content','solar'); ?>
     </div>
     <div class="tab-pane" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
     <?php get_template_part('template-parts/content','emg'); ?>
     </div>
     <div class="tab-pane" id="ex1-tabs-5" role="tabpanel" aria-labelledby="ex1-tab-5">
     <?php get_template_part('template-parts/content','microgrids'); ?>
     </div>
     </div>
       
 
  
   
    

</section>


<?php
get_footer();
?>