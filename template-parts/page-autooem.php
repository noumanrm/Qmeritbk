<?php
/**
 Template Name: Auto OEM Page
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
                        <a href="#passion" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>
<?php 
$passionleftimg = get_field('passion_left_image');
$passionrightimg = get_field('passion_right_image');
$simpleimg = get_field('simple_img');
$simpleimgtwo = get_field('simple_img_two');
$simpleimgthree = get_field('simple_img_three');
$simpleimgfour = get_field('simple_img_four');
$completedimg = get_field('completed_img');
$exceptionalimg = get_field('exceptional_img');
$callicon = get_field('call_icon');
    ?>

<section id="passion">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 passionleft">
            <div class="pastop">
                <h2><?php the_field('passion_title'); ?></h2>
                <?php the_field('passionleft_content'); ?>
                </div>
                <div class="pasbtm">
                <img src="<?php echo $passionleftimg['url']; ?>" alt="<?php echo $passionleftimg['alt']; ?>" />
                </div>
            </div>
            <div class="col-sm-6 passionright deskonly">
                <img src="<?php echo $passionrightimg['url']; ?>" alt="<?php echo $passionrightimg['alt']; ?>" />
                <?php the_field('passionright_content'); ?>
            </div>
            <div class="col-sm-6 passionright tabletbaseonly">
            <?php the_field('passionright_content'); ?>
                <img src="<?php echo $passionrightimg['url']; ?>" alt="<?php echo $passionrightimg['alt']; ?>" />
                
            </div>
        </div>
    </div>
</section>
<section id="whytrusted">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 trustedleft">
                <h2><?php the_field('trusted_title'); ?></h2>
            </div>
            <div class="col-sm-6 trustedright">
                <?php the_field('trusted_content'); ?>
            </div>
        </div>
    </div>
</section>
<section id="simplicity" class="deskonly">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 simpleleft">
                <span class="simpdefault"><img src="<?php echo $simpleimg['url']; ?>" alt="<?php echo $simpleimg['alt']; ?>" /></span>
                <span id="simpleone"><img src="<?php echo $simpleimg['url']; ?>" alt="<?php echo $simpleimg['alt']; ?>" /></span>
                <span id="simpletwo"><img src="<?php echo $simpleimgtwo['url']; ?>" alt="<?php echo $simpleimgtwo['alt']; ?>" /></span>
                <span id="simplethree"><img src="<?php echo $simpleimgthree['url']; ?>" alt="<?php echo $simpleimgthree['alt']; ?>" /></span>
                <span id="simplefour"><img src="<?php echo $simpleimgfour['url']; ?>" alt="<?php echo $simpleimgfour['alt']; ?>" /></span>
            </div>
            <div class="col-sm-6 simpleright">
                <h2><?php the_field('simple_title'); ?></h2>
                <?php if(get_field('simple_list')): ?>
            <?php while(have_rows('simple_list')): the_row(); ?>
                <details>
                    <summary class="<?php the_sub_field('sumclass') ?>"><?php the_sub_field('title'); ?></summary>
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
<section id="simplicity" class="tabletbaseonly">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 simpleright">
                <h2><?php the_field('simple_title'); ?></h2>
                <?php if(get_field('simple_list')): ?>
            <?php while(have_rows('simple_list')): the_row(); ?>
                <details>
                    <summary class="<?php the_sub_field('sumclass') ?>"><?php the_sub_field('title'); ?></summary>
                    <div class="detailsp">
                        <?php the_sub_field('content'); ?>
                        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_field('simple_title'); ?>" />
                    </div>
                </details>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
</section>
<section id="completed">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 completedleft">
                <?php the_field('completed_content'); ?>
            </div>
            <div class="col-sm-6 completedright">
                <img src="<?php echo $completedimg['url']; ?>" alt="<?php echo $completedimg['alt']; ?>" />
            </div>
        </div>
    </div>
</section>
<section id="exceptional" style="background: url(<?php the_field('exceptional_back'); ?>) no-repeat top center; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 exceptionalleft">
              <h2><?php the_field('exceptional_title'); ?></h2>
                <?php the_field('exceptional_content'); ?>
            </div>
            <div class="col-sm-4 exceptionalright">
                 <span class="eximg"><img src="<?php echo $exceptionalimg['url']; ?>" alt="<?php echo $exceptionalimg['alt']; ?>" /></span>
                <span class="exceptimgdesc"><?php the_field('ex_img_desc'); ?></span>
                 
            </div>
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