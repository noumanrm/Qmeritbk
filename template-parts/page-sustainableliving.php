<?php
/**
 Template Name: Sustainable Living Page
 */

get_header();
?>
<style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_back'); ?>) no-repeat top center; background-size: cover;
}
    .susemtopimg{
        background: url('<?php the_field('susem_top_img'); ?>') no-repeat top center; background-size: cover;
    }
     .susembtmimg{
        background: url('<?php the_field('susem_btm_img'); ?>') no-repeat top center; background-size: cover;
    }
    .resimgleft{
                background: url('<?php the_field('res_left_img'); ?>') no-repeat top center; background-size: cover;

    }
    .resimgright{
                background: url('<?php the_field('res_right_img'); ?>') no-repeat top center; background-size: cover;

    }
    .btmctaback{
        background: url('<?php the_field('btm_cta_back'); ?>') no-repeat top center; background-size: cover;
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
                                    <a href="#sustainableliving" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

            </div>
</div>
<section id="sustainableliving">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 susleft">
               <h2><?php the_field('susliv_title'); ?></h2>
            </div>
            <div class="col-sm-4 susmid">
                <?php the_field('susliv_content_one'); ?>
            </div>
            <div class="col-sm-4 susright">
                <?php the_field('susliv_content_two'); ?>
            </div>
        </div>
    </div>
</section>
<section id="susemissions">
    <div class="container">
        <div class="col-sm-6 susemleft">
            <h2><?php the_field('susem_title'); ?></h2>
           <?php the_field('susem_content'); ?>
        </div>
        <div class="col-sm-6 susemright deskonly">
           
            <div class="susemtopimg">
                 <div class="row">
                <div class="col-sm-6">
                <span class="topnum"><?php the_field('topimg_num'); ?></span>
                <span class="toptitle"><?php the_field('topimg_title'); ?></span>
                <span class="topdesc"><?php the_field('topimg_desc'); ?></span>
                </div>
            </div>
            </div>
            <div class="susembtmimg">
                 <div class="row">
                     <div class="col-sm-6"></div>
                <div class="col-sm-6">
                <span class="btmnum"><?php the_field('btmimg_num'); ?></span>
                <span class="btmdesc"><?php the_field('btmimg_desc'); ?></span>
                </div>
            </div>
                
            </div>
        
        </div>
        <div class="col-sm-6 susemright tabletbaseonly">
           
            <div class="susemtopimg">
                 <div class="row">
                <div class="col-sm-6">
                <span class="topnum"><?php the_field('topimg_num'); ?></span>
                <span class="toptitle"><?php the_field('topimg_title'); ?></span>
                <span class="topdesc"><?php the_field('topimg_desc'); ?></span>
                </div>
            </div>
            </div>
            <a onclick="toggle_visibility('foo');"><span class="hiddencontent">Show more</span></a>
                <div id="foo" style="display:none;" class="expandedcontent">
            <div class="susembtmimg">
                 <div class="row">
                     <div class="col-sm-6"></div>
                <div class="col-sm-6">
                <span class="btmnum"><?php the_field('btmimg_num'); ?></span>
                <span class="btmdesc"><?php the_field('btmimg_desc'); ?></span>
                </div>
            </div>
                </div>
            </div>
        
        </div>
    </div>
</section>
<section id="suscounter">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 suscountleft">
               <?php the_field('counter_content'); ?>
            </div>
             <div class="col-sm-6 suscountleft">
                <?php the_field('counter'); ?>
            </div>
        </div>
      
    </div>
</section>
<section id="susmoney">
    <div class="container">
        <div class="row deskonly">
            <div class="col-sm-4 susmonleft">
                <h2><?php the_field('susmon_title'); ?></h2>
            </div>
            <div class="col-sm-4 susmonmid ">
               <?php the_field('susmon_mid'); ?>
            </div>
            <div class="col-sm-4 susmonright">
               <?php the_field('susmon_right'); ?>
            </div>
        </div>
        <div class="row tabletbaseonly">
            <div class="col-sm-4 susmonleft">
                <h2><?php the_field('susmon_title'); ?></h2>
            </div>
            <div class="col-sm-4 susmonmid ">
               <?php the_field('susmon_mid'); ?>
            </div>
            <a onclick="toggle_visibility('money');"><span class="hiddencontent">Show more</span></a>
                <div id="money" style="display:none;" class="expandedcontent">
            <div class="col-sm-4 susmonright">
               <?php the_field('susmon_right'); ?>
            </div>
            <section id="susbtmcta">
    <div class="container">
        <?php if(get_field('cta_boxes')): ?>
        <div class="row btmctaback">
            <?php while(have_rows('cta_boxes')): the_row(); ?>
            <div class="col-sm-4">
                <div class="susbtmctabox">
                    <span class="susctatitle"><?php the_sub_field('number'); ?></span>
                    <span class="susctadesc"><?php the_sub_field('desc'); ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
            </div>
        </div>
    </div>
</section>
<section id="susbtmcta" class="deskonly">
    <div class="container">
        <?php if(get_field('cta_boxes')): ?>
        <div class="row btmctaback">
            <?php while(have_rows('cta_boxes')): the_row(); ?>
            <div class="col-sm-4">
                <div class="susbtmctabox">
                    <span class="susctatitle"><?php the_sub_field('number'); ?></span>
                    <span class="susctadesc"><?php the_sub_field('desc'); ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<section id="susresiliency">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 resleft">
                <h2><?php the_field('res_title'); ?></h2>
               <?php the_field('res_content'); ?>
            </div>
            <div class="col-sm-6 resright deskonly">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="resimgleft">
                        <span class="resimgnum"><?php the_field('resleft_num'); ?></span>
                        <span class="resimgtitle"><?php the_field('resleft_title'); ?></span>
                        <span class="resimgdesc"><?php the_field('resleft_desc'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="resimgright">
                        <span class="resimgnum"><?php the_field('resright_num'); ?></span>
                        <span class="resimgtitle"><?php the_field('resright_title'); ?></span>
                        <span class="resimgdesc"><?php the_field('resright_desc'); ?></span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 resright tabletbaseonly">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="resimgleft">
                        <span class="resimgnum"><?php the_field('resleft_num'); ?></span>
                        <span class="resimgtitle"><?php the_field('resleft_title'); ?></span>
                        <span class="resimgdesc"><?php the_field('resleft_desc'); ?></span>
                        </div>
                    </div>
                     <a onclick="toggle_visibility('resiliency');"><span class="hiddencontent">Show more</span></a>
                <div id="resiliency" style="display:none;" class="expandedcontent">
                    <div class="col-sm-6">
                        <div class="resimgright">
                        <span class="resimgnum"><?php the_field('resright_num'); ?></span>
                        <span class="resimgtitle"><?php the_field('resright_title'); ?></span>
                        <span class="resimgdesc"><?php the_field('resright_desc'); ?></span>
                    </div>
                    </div>
                    <section id="susresiliencybtm">
    <div class="container">
        <div class="row">
            
                
                <div class="col-sm-6 susrelbtmright">
                   <?php the_field('susrelbtmcontent'); ?>
                </div>
                <div class="col-sm-6 susrelbtmleft" style="background: url(<?php the_field('susrelbtmimg'); ?>) no-repeat top center; background-size: cover;">
                    <div class="row">
                        <div class="col-sm-6 susimgleft">
                            <span class="susnum"><?php the_field('sus_number'); ?></span>
                            <span class="sustitle"><?php the_field('sus_title'); ?></span>
                            <span class="susdesc"><?php the_field('sus_desc'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="susresiliencybtm" class="deskonly">
    <div class="container">
        <div class="row">
            
                <div class="col-sm-6 susrelbtmleft" style="background: url(<?php the_field('susrelbtmimg'); ?>) no-repeat top center; background-size: cover;">
                    <div class="row">
                        <div class="col-sm-6 susimgleft">
                            <span class="susnum"><?php the_field('sus_number'); ?></span>
                            <span class="sustitle"><?php the_field('sus_title'); ?></span>
                            <span class="susdesc"><?php the_field('sus_desc'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 susrelbtmright">
                   <?php the_field('susrelbtmcontent'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="supitems">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if(get_field('resources')): ?>
                <ul>
                    <?php while(have_rows('resources')): the_row(); ?>
                    <li><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('item'); ?></a></li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
               
                  
            </div>
        </div>
    </div>
</section>




<?php
get_footer();