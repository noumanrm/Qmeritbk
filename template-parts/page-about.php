<?php
/**
 Template Name: About Page
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
                        <a href="#forfront" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>
<section id="forfront">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 forfrontleft">
                <h2><?php the_field('ff_title'); ?></h2>
                <!--<span class="ff-content"><?php the_field('ff_content'); ?></span>-->
            </div>
            <div class="col-sm-6 forfrontright">
            <span class="ff-content"><?php the_field('ff_content'); ?></span>
            <!--<img src="<?php the_field('ff_image'); ?>" alt="<?php the_field('ff_title'); ?>" />-->
            </div>
        </div>
    </div>
</section>
<section id="installation">
    <div class="row">
        
        <div class="col-sm-6 installleft" style="background: url(<?php the_field('install_img'); ?>) no-repeat top center; background-size: cover;">
        </div>
        <div class="col-sm-6 installright">
            <?php the_field('install_content'); ?>
        </div>
    </div>
</section>
<?php 
$dnadeco = get_field('dna_deco');
$dnaimage = get_field('dna_image'); 
$todayimage = get_field('today_image'); 
?>
<section id="dna">
    <div class="row">
        <div class="col-sm-6 dnaleft">
            <h2><?php the_field('dna_title'); ?></h2>
            <div class="dnacontent">
            <img src="<?php echo $dnadeco['url']; ?>" alt="<?php echo $dnadeco['alt']; ?>" class="alignleft" />
            <?php the_field('dna_content'); ?>
            </div>
        </div>
        <div class="col-sm-6 dnaright">
            <img src="<?php echo $dnaimage['url']; ?>" alt="<?php echo $dnaimage['alt']; ?>" />
        </div>
    </div>
</section>
<section id="today-tomorrow">
    <div class="container">
        <div class="row switch">
            <div class="col-sm-6 todayleft">
                <h2><?php the_field('today_title'); ?></h2>
                <span class="todaycontent"><?php the_field('today_content'); ?></span>
                <a href="<?php the_field('raven_link'); ?>" target="_blank"><span class="wht-btn"><?php the_field('today_btn_text'); ?></span></a>
            </div>
            <div class="col-sm-6 todayright">
                <img src="<?php echo $todayimage['url']; ?>" alt="<?php $todayimage['alt']; ?>" />
            </div>
        </div>
        <hr class="midline" />
        <div class="row">
            <div class="col-sm-6 tomorrowleft">
               <img src="<?php the_field('limerock'); ?>" alt="Lime Rock New Energy" />
            </div>
            <div class="col-sm-6 tomorrowright">
                <?php the_field('tomorrow_content'); ?>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();