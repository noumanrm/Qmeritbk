<?php
/**
 Template Name: EVSE OEMs Page
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
                        <a href="#evseabout" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>
<?php
$evseaboutleft = get_field('evseabout_left_image');
$evseaboutright = get_field('evseabout_right_image');
$callicon = get_field('call_icon');
?>
<section id="evseabout">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 passionleft">
                        <div class="pastop">

                <h2><?php the_field('evseabout_title'); ?></h2>
                <?php the_field('evseaboutleft_content'); ?>
                </div>
                <div class="pasbtm">
                <img src="<?php echo $evseaboutleft['url']; ?>" alt="<?php echo $evseaboutleft['alt']; ?>" />
                </div>
            </div>
            <div class="col-sm-6 passionright deskonly">
                <img src="<?php echo $evseaboutright['url']; ?>" alt="<?php echo $evseaboutright['alt']; ?>" />
                <?php the_field('evseaboutright_content'); ?>
            </div>
             <div class="col-sm-6 passionright tabletbaseonly">
                             <?php the_field('evseaboutright_content'); ?>

                <img src="<?php echo $evseaboutright['url']; ?>" alt="<?php echo $evseaboutright['alt']; ?>" />
            </div>
        </div>
    </div>
</section>
<section id="whytrusted">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 trustedleft">
                <h2><?php the_field('partner_title'); ?></h2>
            </div>
            <div class="col-sm-6 trustedright">
                <?php the_field('partner_content'); ?>
            </div>
        </div>
    </div>
</section>
<section id="partnering">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><?php the_field('dyn_title'); ?></h2>
            </div>
        </div>
        <?php if(get_field('choose_boxes')): ?>
        <div class="row">
            <?php while(have_rows('choose_boxes')): the_row(); ?>
            <div class="col-md-3 chooseboxes">
                <div class="choosebox">
                    <span class="chooseicon"><img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>" /></span>
                    <span class="choosetitle"><?php the_sub_field('title'); ?></span>
                    <span class="choosecontent"><?php the_sub_field('content'); ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<section id="evseprotect" style="background: url(<?php the_field('evseprotect_back'); ?>) no-repeat top center; background-size: cover;">
    <div class="container">
        <div class="col-sm-6 evseprotleft">
            <h2><?php the_field('evseprotect_title'); ?></h2>
            <span class="eveseprotcontent"><?php the_field('evseprotect_content'); ?></span>
        </div>
    </div>
</section>

<section id="btmcontact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2><?php the_field('btm_contact_title'); ?></h2>
                <div class="callbox">
                    <span class="calltitle"><?php the_field('call_title'); ?></span>
                    <span class="callnumber"><img src="<?php echo $callicon['url']; ?>" alt="<?php echo $callicon['alt']; ?>" /><a href="tel:<?php the_field('toll_phone', 'option'); ?>"><?php the_field('toll_phone', 'option'); ?></a></span>
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