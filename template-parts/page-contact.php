<?php
/**
 Template Name: Contact Page
 */

get_header();
?>
<section id="contactarea">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 contactleft">
                <span class="contactbreadcrumbs"><?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?></span>
<h1><span class="pagetitle"><?php the_field('page_title'); ?></span></h1>
<span class="officetitle"><?php the_field('offices_title'); ?></span>
<div class="officebox">
    <div class="row">
        <div class="col-sm-4 officeleft">
            <span class="smallofficetitle"><?php the_field('corporate_title'); ?></span>
        </div>
        <div class="col-sm-8 officeright">
                <span class="f-phone"><a href="tel:<?php the_field('toll_phone', 'options'); ?>"><span class="ficon"><img src="<?php the_field('phone_icon_dark', 'options'); ?>" alt="8882720090" /></span><?php the_field('toll_phone', 'options'); ?></a></span>
                            <span class="f-email"><a href="mailto:<?php the_field('email', 'options'); ?>"><span class="ficon"><img src="<?php the_field('email_icon_dark', 'options'); ?>" alt="email" /></span><?php the_field('email', 'options'); ?></a></span>
                            <span class="f-address"><span class="ficon"><img src="<?php the_field('map_icon_dark', 'options'); ?>" alt="Address" /></span><span class="addressblock"><?php the_field('address', 'options'); ?></span></span>
        </div>
    </div>
</div>
<span class="officetitle"><?php the_field('cs_title'); ?></span>
<div class="officebox">
    <div class="row">
        <div class="col-sm-4 officeleft">
            <span class="smallofficetitle"><?php the_field('cs_small_title'); ?></span>
        </div>
        <div class="col-sm-8 officeright">
                <span class="f-phone"><a href="tel:<?php the_field('toll_phone', 'options'); ?>"><span class="ficon"><img src="<?php the_field('phone_icon_dark', 'options'); ?>" alt="8882720090" /></span><?php the_field('toll_phone', 'options'); ?></a></span>
                            <span class="f-email"><a href="mailto:<?php the_field('email', 'options'); ?>"><span class="ficon"><img src="<?php the_field('email_icon_dark', 'options'); ?>" alt="email" /></span><?php the_field('cs_email', 'options'); ?></a></span>
        </div>
    </div>
    <div class="row btmbox">
        <div class="col-sm-4 officeleft">
            <span class="smallofficetitle"><?php the_field('partner_services_title'); ?></span>
        </div>
        <div class="col-sm-8 officeright">
                <span class="f-phone"><a href="tel:<?php the_field('toll_phone', 'options'); ?>"><span class="ficon"><img src="<?php the_field('phone_icon_dark', 'options'); ?>" alt="8882720090" /></span><?php the_field('toll_phone', 'options'); ?></a></span>
                            <span class="f-email"><a href="mailto:<?php the_field('email', 'options'); ?>"><span class="ficon"><img src="<?php the_field('email_icon_dark', 'options'); ?>" alt="email" /></span><?php the_field('email', 'options'); ?></a></span>
        </div>
    </div>
</div>
            </div>
            <div class="col-lg-6 contactright">
                <?php $contactimg = get_field('contactimg'); ?>
            <img src="<?php echo $contactimg['url']; ?>" alt="<?php echo $contactimg['alt']; ?>" />
            </div>
        </div>
    </div>
</section>




<?php
get_footer();