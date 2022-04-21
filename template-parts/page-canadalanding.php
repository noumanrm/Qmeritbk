<?php
/**
 Template Name: Canada Landing Page
 */

get_header();
?>
<style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_back'); ?>) no-repeat  center; background-size: cover;
}
@media screen and (max-width: 1024px){
 #innerhero{
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_background_tablet'); ?>) no-repeat  center; background-size: cover;
 }
}
@media screen and (max-width: 420px){
 #innerhero{
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_background_mobile'); ?>) no-repeat  center; background-size: cover;
 }
}
</style>
<div class="container">
<div class="row">
<div class="col-lg-6 heroleft">

    <span class="herotitle"><?php the_field('large_header_text'); ?></span>
    <h1><?php the_field('sub_french_head'); ?></h1>
    <img src="<?php the_field('banner_logo'); ?>" />
            </div>
            
            </div>
                        <a href="#electrification" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>

</div>

<div class="container">
    <div class="canada_txt_section">
        <div class="ct_inner">
            <span class="ct_category">
                <img src="<?php the_field('english_logo'); ?>" alt="">
                English
            </span>
            <h3><?php the_field('english_heading'); ?> </h3>
            <?php the_field('english_bottom_content'); ?>
            <a href="<?php the_field('button_url'); ?>"><?php the_field('button_text'); ?></a>
        </div>

        <div class="ct_inner">
            <span class="ct_category">
                <img src="<?php the_field('french_logo'); ?>" alt="">
                French
            </span>
            <h3> 
                <?php the_field('french_heading'); ?>
            </h3>
            <?php the_field('french_bottom_content'); ?>
            <a href="<?php the_field('fr_button_url'); ?>"><?php the_field('fr_button_text'); ?></a>
        </div>
    </div>
    </div>


<?php
get_footer();