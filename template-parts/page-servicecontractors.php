<?php
/**
 Template Name: Service Contractors Page
 */

get_header();
?>
<style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_back'); ?>) no-repeat top center; background-size: cover;
}
    #didyouknow{
            background: url(<?php the_field('dyk_back'); ?>) no-repeat top center; background-size: cover;

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
    <h1><span class="herotitle"><?php the_field('large_header_text'); ?></span></h1>
            </div>
            </div>
                                                            <a href="#nexgen" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>
<?php
$nexgenimg = get_field('nexgen_image');
$leadingwayimg = get_field('leadingway_image');
$callicon = get_field('call_icon');
?>
<section id="nexgen">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 nextgenleft">
                <h2><?php the_field('nexgen_title'); ?></h2>
                <?php the_field('nexgen_content'); ?>
            </div>
            <div class="col-sm-6 nextgenright">
                <img src="<?php echo $nexgenimg['url']; ?>" alt="<?php echo $nexgenimg['alt']; ?>" />
            </div>
            
        </div>
    </div>
</section>
<section id="leadingtheway"><!-- same as <section id="whyelectric">-->
<div class="container">
    <div class="row">
        <div class="col-sm-6 lwleft">
            <img src="<?php echo $leadingwayimg['url']; ?>" alt="<?php echo $leadingwayimg['alt']; ?>" />
        </div>
        <div class="col-sm-6 lwright">
            <h2><?php the_field('leadingway_title'); ?></h2>
            <?php the_field('leadingway_content'); ?>
            <div class="whitebox">
                <span class="lwicon"><img src="<?php the_field('lw_icon'); ?>" alt="<?php the_field('lw_box_title'); ?>" /></span>
                <span class="lwboxtitle"><?php the_field('lw_box_title'); ?></span>
                <?php if(get_field('lw_box_list')): ?>
                    <ul class="lwlist">
            <?php while(have_rows('lw_box_list')): the_row(); ?>
                        <li><?php the_sub_field('item'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="otherbenefits">
    <div class="container">
       <div class="row">
        <div class="col-md-4 chooseboxes">
            <div class="infobox">
                <h2><?php the_field('ea_title'); ?></h2>
            </div>
            
        </div>
         <?php if(get_field('ea_boxes')): ?>
        
            <?php while(have_rows('ea_boxes')): the_row(); ?>
            <div class="col-md-4 chooseboxes">
                <div class="choosebox cspbox">
                    <span class="chooseicon"><img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>" /></span>
                    <a href="<?php the_sub_field('link'); ?>"><span class="choosetitle"><i class="fas fa-chevron-right"></i> <?php the_sub_field('title'); ?></span></a>
                    <span class="choosecontent"><?php the_sub_field('content'); ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<section id="didyouknow">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php the_field('dyn_title'); ?></h2>
            </div>
        </div>
         <?php if(get_field('know_boxes')): ?>
        <div class="row">
            <?php while(have_rows('know_boxes')): the_row(); ?>
            <div class="col-sm-4">
                <div class="knowbox">
                    <span class="knowboxnum"><?php the_sub_field('number'); ?></span>
                    <span class="knowboxnumtitle"><?php the_sub_field('amount'); ?></span>
                    <span class="knowboxdesc"><?php the_sub_field('desc'); ?></span>
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
                        <img src="<?php echo $callicon['url']; ?>" alt="<?php echo $callicon['alt']; ?>" /></span><a href="tel:<?php the_field('toll_phone', 'option'); ?>"><?php the_field('toll_phone', 'option'); ?></a></span>
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