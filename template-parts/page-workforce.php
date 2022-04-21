<?php
/**
 Template Name: Workforce Page
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
<div class="row">
<div class="col-sm-6 heroleft">
<div class="heroleftwhite">

    <span class="breadcrumbs"><?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?></span>
    <h1><span class="herotitle"><?php the_field('large_header_text'); ?></span></h1>
    <span class="herosub"><?php the_field('medium_header_text'); ?></span>
    <?php the_field('hero_intro'); ?>
    </div>
            </div>
    <div class="col-sm-6 heroright">
    </div>
            </div>
                                    <a href="#installercontent" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

</div>
<section id="installercontent">
    <div class="installtabs">
        <div class="container">
            <div class="col-lg-12">
                <ul class="nav nav-tabs mb-4" id="ex2" role="tablist">
                    <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex2-tab-6" data-mdb-toggle="tab" href="#ex2-tabs-6" role="tab" aria-controls="ex2-tabs-6" aria-selected="true">
                    Training
                    </a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-7" data-mdb-toggle="tab" href="#ex2-tabs-7" role="tab" aria-controls="ex2-tabs-7" aria-selected="false">
                    Recruiting
                    </a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-8" data-mdb-toggle="tab" href="#ex2-tabs-8" role="tab" aria-controls="ex2-tabs-8" aria-selected="false">
                    Consulting
                    </a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-9" data-mdb-toggle="tab" href="#ex2-tabs-9" role="tab" aria-controls="ex2-tabs-9" aria-selected="false">
                    Management Tools
                    </a>
                    </li>
                    
                </ul>
                <span class="tablettitle">I need an installer for...</span>
                <select class="mb-4 form-control visible-sm" id="tab_selectortwo">
                    <option value="0">Training</option>
                    <option value="1">Recruiting</option>
                    <option value="2">Consulting</option>
                    <option value="3">Management Tools</option>
                </select>
            </div>
        </div>
    </div>
    <div class="tab-content" id="ex2-content">
  <div class="tab-pane active" id="ex2-tabs-6" role="tabpanel" aria-labelledby="ex2-tab-6">
     <?php get_template_part('template-parts/content','training'); ?>
     </div>
     <div class="tab-pane" id="ex2-tabs-7" role="tabpanel" aria-labelledby="ex2-tab-7">
     <?php get_template_part('template-parts/content','staffing'); ?>
     </div>
     <div class="tab-pane" id="ex2-tabs-8" role="tabpanel" aria-labelledby="ex2-tab-8">
     <?php get_template_part('template-parts/content','consulting'); ?>
     </div>
     <div class="tab-pane" id="ex2-tabs-9" role="tabpanel" aria-labelledby="ex2-tab-9">
     <?php get_template_part('template-parts/content','managetools'); ?>
     </div>
    
     </div>

</section>
<section id="otherbenefits">
    <div class="container">
       <div class="row">
        <div class="col-md-4 chooseboxes">
            <div class="infobox">
                <h2><?php the_field('benefit_title'); ?></h2>
            </div>
            
        </div>
         <?php if(get_field('benefit_boxes')): ?>
        
            <?php while(have_rows('benefit_boxes')): the_row(); ?>
            <div class="col-md-4 chooseboxes">
                <div class="choosebox cspbox">
                    <span class="chooseicon"><img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>" /><span class="current"><?php the_sub_field('current'); ?></span></span>
                    <a href="<?php the_sub_field('link'); ?>"><span class="choosetitle"><i class="fas fa-chevron-right"></i> <?php the_sub_field('title'); ?></span></a>
                    <span class="choosecontent"><?php the_sub_field('content'); ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>




<section id="btmcontact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2><?php the_field('btm_contact_title'); ?></h2>
                <div class="callbox">
                    <span class="calltitle"><?php the_field('call_title'); ?></span>
                    <span class="callnumber">
                        <span class="ficon">
                        <img src="<?php the_field('call_icon'); ?>" alt="<?php the_field('call_title'); ?>" /></span><?php the_field('toll_phone', 'option'); ?></span>
                </div>
            </div>
            <div class="col-sm-6">
                <?php the_field('form'); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();