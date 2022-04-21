<?php
/**
 Template Name: Installation Services Page
 */

get_header();
?>
<style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_background'); ?>) no-repeat center; background-size: cover;
}
@media screen and (max-width: 768px){
 #innerhero{
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.62), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_background_tablet_&_mobile' ); ?>) no-repeat center; background-size: cover;
 }
}
@media screen and (max-width: 370px){
 #innerhero{
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.62), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_background_tablet_&_mobile' ); ?>) no-repeat center; background-size: cover;
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
    <span class="herotitle"><?php the_field('hero_heading'); ?></span>
            <h1><?php the_field('hero_sub_title'); ?></h1>
            </div>
            </div>
                                    <a href="#installercontent" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>
<div class="container">
        <div class="go_electriv_outer">
            <div class="go_electriv_txt">
                <h2>
                    <?php the_field('section_heading'); ?>
                </h2>
                <?php the_field('section_content'); ?>
            </div>
        </div>
    </div>
    
    <!-- text_section end -->

    <!-- electric help section -->
    <div class="container">
        <div class="electric_help">
            <h2><?php the_field('installation_services_heading'); ?></h2>
            <ul>
					<?php if(have_rows('installation_service') ): 
                while(have_rows('installation_service')): the_row();
				?>
                <li>
                    <div class="electric_detail">
                        <span class="eD_img">
                            <img src="<?php the_sub_field('services_image'); ?>" alt="">
                        </span>
                        <h3><?php the_sub_field('service_heading'); ?></h3>
                        <?php the_sub_field('service_content'); ?>
                    </div>
                </li>
                <?php endwhile;
						endif; ?> 
            </ul>
        </div>
    </div>
    <!-- electric help section end -->

    <!-- form section -->
    <div class="electric_form">
        <div class="container">
        <div class="row">
            <div class="ef_inner">
                <div class="efi_left">
                    <h2>
                        <?php the_field('section_heading1'); ?>
                    </h2>
                </div>
                <div class="efi_right">
                
                <?php the_field('contact_form'); ?>
                    <!--<form action="">
                        <div class="efi_form_DIV">
                            <div class="efif_inner">
                                <label>First Name*</label>
                                <input type="text">
                            </div>
                            <div class="efif_inner">
                                <label>Last Name*</label>
                                <input type="text">
                            </div>
                        </div>

                        <div class="efi_form_DIV">
                            <div class="efif_inner">
                                <label>Email*</label>
                                <input type="email">
                            </div>
                            <div class="efif_inner">
                                <label>Zip Code*</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="efi_form_DIV">
                            <div class="efif_inner efif_full_width">
                                <label>I am a/an*</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="efif_checkbox">
                            <p>I’m interested in the following services:</p>
                            <label class="efif_label">EV Charging Stations
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="efif_label">Energy Storage Systems
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="efif_label">Solar Integration
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="efif_label">Emergency Power Generation
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="efif_label">Microgrids
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <a href="#">Schedule Your Installation</a>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
 </div>

    <!-- form section end -->
    

<?php
get_footer();
?>
