<?php
/**
 Template Name: Technology Page
 */

get_header();
?>
<style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_back'); ?>) no-repeat top center; background-size: cover;
}
   #resourcegrowing .betterright{
    background: url(<?php the_field('resgrow_img'); ?>) no-repeat left top 80%;
    background-size: cover;
    min-height: 365px;
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
                                                                        <a href="#advantage" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

</div>

<?php
$advantageimg = get_field('advantage_image');
$callicon = get_field('call_icon');
?>

<section id="advantage">
   <div class="container">
       <div class="row switch">
           <div class="col-sm-6 advantageleft"><img src="<?php echo $advantageimg['url']; ?>" alt="<?php echo $advantageimg['alt']; ?>" /></div>
           <div class="col-sm-6 advantageright">
               <h2><?php the_field('advantage_title'); ?></h2>
               <span class="advantagecontent"><?php the_field('advantage_content'); ?></span>
               <a href="<?php the_field('adv_link'); ?>"><span class="blubtn"><?php the_field('adv_btn_text'); ?></span></a>
           </div>
       </div>
   </div>
</section>
<section id="stafftraining" style="background: url(<?php the_field('staff_back'); ?>) no-repeat top center; background-size: cover;">
       <div class="container">
           <div class="row">
               <div class="col-sm-6">
               <h2><?php the_field('staff_title'); ?></h2>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-12">
               <?php if(get_field('staff_boxes')): ?>
                   <ul>
                   <?php while(have_rows('staff_boxes')): the_row(); ?>
                       <li><span class="stafficon"><img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>" /></span><span class="staffboxtitle"><?php the_sub_field('title'); ?></span></li>
                     <?php endwhile; ?>
                   </ul>
                   <?php endif; ?>
               </div>
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
                        <img src="<?php echo $callicon['url']; ?>" alt="<?php echo $callicon['alt']; ?>" /></span><?php the_field('toll_phone', 'option'); ?></span>
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