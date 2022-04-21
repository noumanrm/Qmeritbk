<?php
/**
 Template Name: Leadership Page
 */

get_header();
?>
<style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_back'); ?>) no-repeat top center; background-size: cover;
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
    <h1><span class="herotitle">Corporate Leadership</span></h1>
            </div>
            </div>
                                    <a href="#forfront" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>
<section id="meetcontent">
    <div class="container">
        <div class="row">
            <div class="col-md-6 meetleft">
                <h2><?php the_field('intro_title'); ?></h2>
            </div>
            <div class="col-md-6 meetright">
            <?php the_field('intro'); ?>
            </div>
        </div>
    </div>
</section>
<section id="teamfeed">
    <div class="container">
         <?php if(get_field('top_two_leaders')): ?>
        <div class="row toplist">
            <?php while(have_rows('top_two_leaders')): the_row(); ?>
            <div class="col-md-6 teambox">
                 <a href="<?php the_sub_field('link'); ?>"><div class="indteambox" style="background: url(<?php the_sub_field('image'); ?>) no-repeat top center; background-size: cover;">
                    <div class="teaminfo">
                        <span class="teamname"><?php the_sub_field('name'); ?></span>
                        <span class="teamtitle"><?php the_sub_field('title'); ?></span>
                    </div>
                </div>
                </a>
                
            </div>
            <?php endwhile; ?>
            
        </div>
        <?php endif; ?>
        <?php if(get_field('leaders')): ?>
        <div class="row btmlist">
            <?php while(have_rows('leaders')): the_row(); ?>
            <div class="col-md-4 teambox">
                 <a href="<?php the_sub_field('link'); ?>"><div class="indteambox" style="background: url(<?php the_sub_field('image'); ?>) no-repeat top center; background-size: cover;">
                    <div class="teaminfo">
                        <span class="teamname"><?php the_sub_field('name'); ?></span>
                        <span class="teamtitle"><?php the_sub_field('title'); ?></span>
                    </div>
                </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>




<?php
get_footer();