<?php
/**
 Template Name: Leads Page
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
                        <a href="#logoscroller" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

</div>
<section id="logoscroller" style="visibility: hidden;">
    <div class="row">
        <div class="col-lg-12">
            <?php if(get_field('logos')): ?>
        <ul class="logoslider">
            <?php while(have_rows('logos')): the_row(); ?>
        
            <li><img src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('name'); ?>" /></li>
            <?php endwhile; ?>
        </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="quality">
    <div class="row">
        <div class="col-sm-6 qualityleft" style="background: url(<?php the_field('quality_image'); ?>) no-repeat top center; background-size: cover;"></div>
        <div class="col-sm-6 qualityright">
        <h2><?php the_field('quality_title'); ?></h2>
            <?php the_field('quality_content'); ?>
        </div>
    </div>
</section>
<section id="revenuestreams">
    <div class="row switch">
        <div class="col-sm-6 revstreamleft">
        <h2><?php the_field('revstream_title'); ?></h2>
            <?php the_field('revstream_content'); ?>
        </div>
        <div class="col-sm-6 revstreamright" style="background: url(<?php the_field('revstream_image'); ?>) no-repeat top center; background-size: cover;"></div>
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
                        <img src="<?php the_field('call_icon'); ?>" alt="<?php the_field('call_title'); ?>" /></span><a href="tel:<?php the_field('toll_phone', 'option'); ?>"><?php the_field('toll_phone', 'option'); ?></a></span>
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
?>
<script>jQuery( document ).ready(function() {
setTimeout(function(){ document.getElementById("logoscroller").style.visibility = "visible"; }, 2000);
});</script>