<?php
/**
 Template Name: Home Page
 */

get_header();
?>
<section id="reasons">
    <div class="container">
        <div class="row deskonly">
            <div class="col-sm-6 reasonleft">
                <h2><?php the_field('reason_title'); ?></h2>
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 reasontext">
                     <?php if(get_field('reasons_list')): ?>
                <ul>        
                    <?php while(have_rows('reasons_list')): the_row(); ?>
                    <li><?php the_sub_field('reason'); ?></li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                    </div>
                </div>
                <?php 
                $imageone = get_field('image_one');
                $imagetwo = get_field('image_two'); 
                $imagethree = get_field('image_three'); 
                ?>
                <span class="reasonimgone"><img src="<?php echo $imageone['url']; ?>" alt="<?php echo $imageone['alt']; ?>" /></span>
                <span class="reasonimgtwo"><img src="<?php echo $imagetwo['url']; ?>" alt="<?php echo $imagetwo['alt']; ?>" /></span>
                <span class="reasonimgthree"><img src="<?php echo $imagethree['url']; ?>" alt="<?php echo $imagethree['alt']; ?>" /></span>
            </div>
            <div class="col-sm-6 reasonfloat">
           
                <div class="floatbox" id="floatboxid">
                    <span class="bluespan solutionstitle">
                        <h4><?php the_field('install_solutions_title'); ?></h4>
                    </span>
                    <?php if(get_field('install_solutions')): ?>
                        <ul>
                             <?php while(have_rows('install_solutions')): the_row(); ?>
                             <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?> <i class="fas fa-arrow-right"></i></a>
                                <span class="lidesc" id="hiddenfloat"><?php the_sub_field('desc'); ?></span></li>
                            <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                      <div  id="floater">
                    <span class="bluespan parttitle"><h4><?php the_field('partner_with_title'); ?></h4></span>
                    <?php if(get_field('partner_with')): ?>
                        <ul>
                             <?php while(have_rows('partner_with')): the_row(); ?>
                             <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?> <i class="fas fa-arrow-right"></i></a></li>
                            <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                      </div>
                </div>
            </div>
           
        </div>
        <div class="row tabletonly">
            <div class="col-sm-6 reasonleft">
             <?php
                $tabletone = get_field('tablet_image_one'); 
                $tablettwo = get_field('tablet_image_two'); 
                $tabletthree = get_field('tablet_image_three');
                ?>
                <span class="reasonimgone"><img src="<?php echo $tabletone['url']; ?>" alt="<?php echo $tabletone['alt']; ?>" /></span>
                <span class="reasonimgtwo"><img src="<?php echo $tablettwo['url']; ?>" alt="<?php echo $tablettwo['alt']; ?>" /></span>
                <span class="reasonimgthree"><img src="<?php echo $tabletthree['url']; ?>" alt="<?php echo $tabletthree['alt']; ?>" /></span>
               
            </div>
            <div class="col-sm-6 reasonright">
                <h2><?php the_field('reason_title'); ?></h2>
                 <?php if(get_field('reasons_list')): ?>
                <ul>        
                    <?php while(have_rows('reasons_list')): the_row(); ?>
                    <li><?php the_sub_field('reason'); ?></li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
        <div class="mobileonly">
        <h2><?php the_field('reason_title'); ?></h2>
        <div class="row reasonrow">
            <div class="reasonleft">
                <span class="reason"><?php the_field('mobile_reason_one'); ?></span>
            </div>
            <div class="reasonright">
            <?php 
                $mobileone = get_field('mobile_image_one');
                $mobiletwo = get_field('mobile_image_two'); 
                $mobilethree = get_field('mobile_image_three');
                ?>
                <span class="reasonimg"><img src="<?php echo $mobileone['url']; ?>" alt="<?php echo $mobileone['alt']; ?>" /></span>
            </div>
        </div>
        <div class="row reasonrow">
            <div class="reasonleft">
                <span class="reasonimg"><img src="<?php echo $mobiletwo['url']; ?>" alt="<?php echo $mobiletwo['alt']; ?>" /></span>
            </div>
            <div class="reasonright">
                <span class="reason"><?php the_field('mobile_reason_two'); ?></span>
            </div>
        </div>
        <div class="row reasonrow">
            <div class="reasonleft">
                <span class="reason"><?php the_field('mobile_reason_three'); ?></span>
            </div>
            <div class="reasonright">
                 <span class="reasonimg"><img src="<?php echo $mobilethree['url']; ?>" alt="<?php echo $mobilethree['alt']; ?>" /></span>
            </div>
        </div>
       
        </div>
    </div>
</section>
<section id="goals">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 goalsleft">
                <h2><?php the_field('goal_title_one'); ?><?php the_field('goal_title_two'); ?></h2>
                <span class="goalcontent"><?php the_field('goal_content'); ?></span>
            </div>
            <div class="col-sm-8 goalsright">
            <div class="floatboxbig" id="floatend">
               <div class="row">
               
                    <div class="col-sm-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    
                        <span class="bluespan parttitle"><h4><?php the_field('partner_with_title'); ?></h4></span>
                        <?php if(get_field('partner_with')): ?>
                        <ul>
                             <?php while(have_rows('partner_with')): the_row(); ?>
                             <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?> <i class="fas fa-arrow-right"></i></a>
                                <span class="lidesc hiddenbox"><?php the_sub_field('desc'); ?></span></li>
                            <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                   </div>
                   <div class="col-sm-6">
                   
                   </div>
                     </div>
                </div>
            </div>
        </div>
        <div class="floaterlinks tabletonly">
    <span class="bluespan solutionstitle">
                        <h4><?php the_field('install_solutions_title'); ?></h4>
                    </span>
                    <?php if(get_field('install_solutions')): ?>
                        <ul>
                             <?php while(have_rows('install_solutions')): the_row(); ?>
                             <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?> <i class="fas fa-arrow-right"></i></a>
                                <span class="lidesc"><?php the_sub_field('desc'); ?></span></li>
                            <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                       <span class="bluespan parttitle"><h4><?php the_field('partner_with_title'); ?></h4></span>
                    <?php if(get_field('partner_with')): ?>
                        <ul>
                             <?php while(have_rows('partner_with')): the_row(); ?>
                             <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?> <i class="fas fa-arrow-right"></i></a>
                              <span class="lidesc"><?php the_sub_field('desc'); ?></span></li>
                            <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                      </div>
                        <div class="floaterlinks mobileonly">
    <span class="bluespan solutionstitle">
                        <h4><?php the_field('install_solutions_title'); ?></h4>
                    </span>
                    <?php if(get_field('install_solutions')): ?>
                        <ul>
                             <?php while(have_rows('install_solutions')): the_row(); ?>
                             <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?> <i class="fas fa-arrow-right"></i></a>
                                <span class="lidesc"><?php the_sub_field('desc'); ?></span></li>
                            <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                       <span class="bluespan parttitle"><h4><?php the_field('partner_with_title'); ?></h4></span>
                    <?php if(get_field('partner_with')): ?>
                        <ul>
                             <?php while(have_rows('partner_with')): the_row(); ?>
                             <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?> <i class="fas fa-arrow-right"></i></a>
                              <span class="lidesc"><?php the_sub_field('desc'); ?></span></li>
                            <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                      </div>
    </div>
    
</section>








<?php
get_footer();