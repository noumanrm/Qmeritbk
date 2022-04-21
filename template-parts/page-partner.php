<?php
/**
 Template Name: Partner Page
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

                <span class="breadcrumbs">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                    ?>
                </span>
                <h1><span class="herotitle"><?php the_field('large_header_text'); ?></span></h1>
            </div>
        </div>
        <a href="#forfront" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

    </div>
</div>

<section id="forfront" class="partner-row1">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 partner-text">
                <h2><?php the_field('ff_title'); ?></h2>
                <span class="ff-content"><?php the_field('ff_content'); ?></span>
            </div>
        </div>
    </div>
</section>

<section class="ecosystem-graphics">
    <div class="container">
        <div class="ecosystem-graphic-inner">
            <div class="ecosysytem-graphic-image">
                <?php 
                $image = get_field('ff_image');
                $mobileimage = get_field('mobile_image');
                ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <img class="for-mobile" src="<?php echo esc_url($mobileimage['url']); ?>" alt="<?php echo esc_attr($mobileimage['alt']); ?>" />
            </div>
            <?php 
            $m  =   1;
            $k = 0;
           
            if( have_rows('choose_boxes') ):
            
             while ( have_rows('choose_boxes') ) : the_row();
             ?>
             <?php
              if($m==1):
              $class    =   'item1';
              elseif($m==2):
              $class    =   'item2';
              elseif($m==3):
              $class    =   'item3';
              elseif($m==4):
              $class    =   'item4';
              elseif($m==5):
              $class    =   'item5';
             
              else:
              $class    =   'item1';
              endif;

              if($k==0):
              $slide    =   '4';
              elseif($k==1):
              $slide    =   '0';
              elseif($k==2):
              $slide    =   '3';
              elseif($k==3):
              $slide    =   '2';
              elseif($k==4):
              $slide    =   '1';
             
              else:
              $slide    =   '4';
              endif;
              ?>
            <div class="graphic-text-item <?php echo $class; ?>">
                <span>
                    <?php 
                $icon = get_sub_field('icon');
                $mobileicone = get_sub_field('mobile_icon');
                ?>
                    <a href="#we-help-you" data-slide="<?php echo $slide; ?>" class="gs">
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        <img class="for-mobile" src="<?php echo esc_url($mobileicone['url']); ?>" alt="<?php echo esc_attr($mobileicone['alt']); ?>" />                    
                        <?php the_sub_field('title'); ?>
                    </a>
                </span>
                <p><?php the_sub_field('content'); ?> </p>
                <a class="learn-more" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('btn_text'); ?></a>
            </div>
            <?php 
            
            $m++;
            $k++;
            endwhile;
        endif;
            ?>
            
        </div>  

    </div>
</section>

<section class="we-help-you" id="we-help-you">
    <h2 class="title">How Can Partnering with Qmerit Help You?</h2>
    <div class="help-you-inner">
        <div class="help-slider">
            <?php 
            $n  =   1;
           
            if( have_rows('tablet_mobile_boxes') ):
            
             while ( have_rows('tablet_mobile_boxes') ) : the_row();
             ?>
             <?php
              if($n==1):
              $num    =   '1';
              elseif($n==2):
              $num    =   '2';
              elseif($n==3):
              $num    =   '3';
              elseif($n==4):
              $num    =   '4';
              elseif($n==5):
              $num    =   '5';
             
              else:
              $num    =   '1';
              endif;
              ?>
            <div class="item" id="tab-item<?php echo $num; ?>">
                <div class="item-inner">
                    <div class="item-inner-image">
                        <?php 
                        $sliderimg = get_sub_field('image');
                        $slidericon = get_sub_field('icon');
                        ?>
                        <a href="#">
                            <img src="<?php echo esc_url($sliderimg['url']); ?>" alt="<?php echo esc_attr($sliderimg['alt']); ?>" />
                        </a>
                    </div>
                    <div class="item-inner-text item-text-<?php echo $num; ?>">
                        <div class="item-title">
                            <img src="<?php echo esc_url($slidericon['url']); ?>" alt="<?php echo esc_attr($slidericon['alt']); ?>" />
                            <span><?php the_sub_field('title'); ?></span>
                        </div>
                        <p>
                            <?php the_sub_field('content'); ?>
                        </p>
                        <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('btn_text'); ?></a>
                    </div>
                </div>
            </div>
            <?php 
            $n++;
            endwhile;
            endif;
            ?>
            
        </div>
    </div>
</section>


<?php
get_footer();
?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".gs").click(function(e){
//             e.preventDefault();
            slideIndex = $(this).data("slide");
            console.log("slideIndex");
            // $( '.help-slider' ).slickGoTo( parseInt(slideIndex) );
            $('.help-slider').slick('slickGoTo', parseInt(slideIndex));
        });
    });
</script>

<script>
    $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $("body").addClass("scroll");
    } else {
        $("body").removeClass("fixed-nav");
    }
});
</script>
<script>    
var wWidth = $(window).width();
if(wWidth > 1024) {
    $('.gs').on('click', function(e) {  
        e.preventDefault();
     });    
}else{
    $('.gs').on('click', function() {  
        $('html, body').animate({scrollTop: $(this.hash).offset().top - 70}, 0 );
        return false;
     });    
}
</script>