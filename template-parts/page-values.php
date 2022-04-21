<?php
/**
 Template Name: Values Page
 */

get_header();
?>
<style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_back'); ?>) no-repeat center; background-size: cover;
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
                                                <a href="#valuesabout" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>

<section id="valuesabout">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 vaboutleft">
                <span class="vatitle"><?php the_field('va_title_one'); ?></span>
                <span class="vatitle"><?php the_field('va_title_two'); ?></span>
            </div>
            <div class="col-sm-6 vaboutright">
                <?php the_field('va_content'); ?>
            </div>
        </div>
    </div>
</section>
<?php
$devimg = get_field('dev_image');
$environimg = get_field('environ_img');
$socialimg = get_field('social_img');
$governimg = get_field('govern_img');
?>
<section id="development">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 devleft">
                <h3><?php the_field('dev_title'); ?></h3>
                <?php the_field('dev_content'); ?>
            </div>
            <div class="col-sm-6 devright">
            <img src="<?php echo $devimg['url']; ?>" alt="<?php echo $devimg['alt']; ?>" />
            </div>
        </div>
    </div>
</section>
<section id="environment">
    <div class="container">
        <div class="row switch">
            <div class="col-sm-6 environleft deskonly">
                <img src="<?php echo $environimg['url']; ?>" alt="<?php echo $environimg['alt']; ?>" />
            </div>
            <div class="col-sm-6 environright">
                <h2><?php the_field('environ_title'); ?></h2>
                <h3><?php the_field('environ_subtitle'); ?></h3>
                <span class="alignedwith"><?php the_field('environ_aligned'); ?></span>
                                <span class="tabletbaseonly accordimg"><img src="<?php echo $environimg['url']; ?>" alt="<?php echo $environimg['alt']; ?>" /></span>

                <span class="envcontent"><?php the_field('environ_content'); ?></span>
                <?php if(get_field('environ_choices')): ?>
            <?php while(have_rows('environ_choices')): the_row(); ?>
                <details>
                    <summary><?php the_sub_field('title'); ?></summary>
                    <div class="detailsp">
                        <?php the_sub_field('content'); ?>
                    </div>
                </details>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="socialpane">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 socialleft">
                <h2><?php the_field('social_title'); ?><h2>
                <h3><?php the_field('social_subtitle'); ?></h3>
                <span class="alignedwith"><?php the_field('social_aligned'); ?></span>
                                <span class="tabletbaseonly accordimg"><img src="<?php echo $socialimg['url']; ?>" alt="<?php echo $socialimg['alt']; ?>" /></span>

                <span class="socialcontent"><?php the_field('social_content'); ?></span>
                <?php if(get_field('social_choices')): ?>
            <?php while(have_rows('social_choices')): the_row(); ?>
                <details>
                    <summary><?php the_sub_field('title'); ?></summary>
                    <div class="detailsp">
                        <?php the_sub_field('content'); ?>
                    </div>
                </details>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-6 socialright deskonly">
                <img src="<?php echo $socialimg['url']; ?>" alt="<?php echo $socialimg['alt']; ?>" />
            </div>
        </div>
    </div>
</section>
<section id="governance">
    <div class="container">
        <div class="row switch">
            <div class="col-sm-6 governleft deskonly">
                <img src="<?php echo $governimg['url']; ?>" alt="<?php echo $governimg['alt']; ?>" />
            </div>
            <div class="col-sm-6 governright">
                <h2><?php the_field('govern_title'); ?></h2>
                <h3><?php the_field('govern_subtitle'); ?></h3>
                <span class="alignedwith"><?php the_field('govern_aligned'); ?></span>
                <span class="tabletbaseonly accordimg"><img src="<?php the_field('govern_img'); ?>" alt="man points at screen in front of crowd" /></span>

                <span class="governcontent"><?php the_field('govern_content'); ?></span>
                 <?php if(get_field('govern_choices')): ?>
            <?php while(have_rows('govern_choices')): the_row(); ?>
                <details>
                    <summary><?php the_sub_field('title'); ?></summary>
                    <div class="detailsp">
                        <?php the_sub_field('content'); ?>
                    </div>
                </details>
                  <?php endwhile; ?>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</section>
<?php
get_footer();