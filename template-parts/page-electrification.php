<?php
/**
 Template Name: Electrification Page
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
    <h1><span class="herotitle"><?php the_field('large_header_text'); ?></span></h1>
            </div>
            </div>
                        <a href="#electrification" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>

</div>
<?php
$eleimage = get_field('ele_image'); 
$weimage = get_field('we_image');
?>
<section id="electrification">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 eleleft">
               <h2><?php the_field('ele_title'); ?></h2>
               <span class="eletext"><?php the_field('ele_text'); ?></span>
            </div>
            <div class="col-sm-6 eleright">
                <img src="<?php echo $eleimage['url']; ?>" alt="<?php echo $eleimage['alt']; ?>" />
            </div>
        </div>
    </div>
</section>
<section id="whyelectric">
    <div class="row">
        <div class="col-sm-6 we-left">
            <img src="<?php echo $weimage['url']; ?>" alt="<?php echo $weimage['alt']; ?>" />
        </div>
        <div class="col-sm-6 we-right">
            <h2><?php the_field('we_title'); ?></h2>
            <span class="wecontent"><?php the_field('we_content'); ?></span>
            <?php if(get_field('we_items')): ?>
            <ul>
            <?php while(have_rows('we_items')): the_row(); ?>
                <li><span class="weicon"><img src="<?php the_sub_field('we_icon'); ?>" alt="<?php the_sub_field('we_text'); ?>" /></span><span class="wetext"><?php the_sub_field('we_text'); ?></span></li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="whatlook">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 lookleft">
                <h2><?php the_field('look_title'); ?></h2>
            </div>
            <div class="col-lg-6 lookright">
            <?php the_field('look_content'); ?>
            </div>
        </div>
        <?php if(get_field('work_boxes')): ?>
            <div class="row workboxes">
                 <?php while(have_rows('work_boxes')): the_row(); ?>
                <div class="col-lg-3">
                    <div class="workbox">
                        <span class="workimg"><img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('img_alt'); ?>" /></span>
                        <span class="worknum"><?php the_sub_field('number'); ?></span>
                        <span class="worktitle"><?php the_sub_field('title'); ?></span>
                        <span class="workdesc"><?php the_sub_field('desc'); ?></span>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="readyhire">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 rhleft">
                <h2><?php the_field('ready_hire_left_title'); ?></h2>
                <span class="rhtext"><?php the_field('ready_hire_left_content'); ?></span>
                <a href="<?php the_field('hire_link'); ?>" target="_blank"><span class="rhbutton"><?php the_field('hire_btn_text'); ?></span></a>
            </div>
            <div class="col-sm-6 rhright">
                <h2><?php the_field('planning_title'); ?></h2>
                <span class="rhtext"><?php the_field('planning_content'); ?></span>
                <a href="<?php the_field('planning_link'); ?>"><span class="rhbutton"><?php the_field('planning_btn_text'); ?></span></a>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();