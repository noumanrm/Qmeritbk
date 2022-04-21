<?php
/**
 Template Name: Purchasing Page
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
                                                <a href="#raiven" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

</div>


<?php $raivenimg = get_field('raiven_img'); ?>
<section id="raiven">
   <div class="container">
       <div class="row">
           <div class="col-sm-6 raivenleft">
               <img src="<?php echo $raivenimg['url']; ?>" alt="<?php echo $raivenimg['alt']; ?>" />
           </div>
           <div class="col-sm-6 raivenright">
               <?php the_field('raiven_content'); ?>
           </div>
       </div>
   </div>
</section>
<hr />
<section id="suppliers">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <span class="suppliertitle"><?php the_field('suppliers_title'); ?></span>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-12">
           <?php if(get_field('supplier_logos')): ?>
               <ul class="logoslider">
               <?php while(have_rows('supplier_logos')): the_row(); ?>
                   <li><img src="<?php the_sub_field('logo'); ?>" alt="Raiven marketplace Suppliers" /></li>
                   <?php endwhile; ?>
               </ul>
               <?php endif; ?>
           </div>
       </div>
       </section>
       <section id="waystosave">
           <div class="row">
               <div class="col-sm-6 saveleft" style="background: url(<?php the_field('save_image'); ?>) no-repeat top center; background-size: cover;"></div>
               <div class="col-sm-6 saveright">
                   <h2><?php the_field('save_title'); ?></h2>
                   <?php the_field('save_content'); ?>
               </div>
           </div>
       </section>
        <?php $materials = get_field('materials_image');
       $streamline = get_field('streamline_image'); ?>
       <section id="streamline">
           <div class="row switch">
               <div class="col-sm-6 streamlineleft">
               <h2><?php the_field('streamline_title'); ?></h2>
                   <?php the_field('streamline_content'); ?>
               </div>
               <div class="col-sm-6 streamlineright">
                   <img src="<?php echo $streamline['url']; ?>" alt="<?php echo $streamline['alt']; ?>" />
               </div>
           </div>
       </section>
      
       <section id="materials">
           <div class="row">
               <div class="col-sm-6 materialsleft">
               <img src="<?php echo $materials['url']; ?>" alt="<?php echo $materials['alt']; ?>" />
               </div>
               <div class="col-sm-6 materialsright">
                   <h2><?php the_field('materials_title'); ?></h2>
                   <?php the_field('materials_content'); ?>
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