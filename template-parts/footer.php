<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qmerit-new
 */

?>


<!----OEM LANDING FOOTER---->
<?php if(is_singular('oemlandingpages')){?>
<footer id="colophon " class="site-footer oemlanding_footer" style="background: <?php  the_field('footer_background_color');?>;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 footerlogo">
                    
                    <a href="/"><img src="<?php  //the_field('footer_background_color','options');?>" /></a>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="footer-logo">
            <img src="<?php  the_field('footer_logo');?>" />
            </div>
            </div>
            <style>
			.oemlanding_footer .footerbtn span {
    border-bottom: 1.5px solid <?php the_field('info_icons_colors'); ?>;
}</style>
                <div class="col-sm-4 aboutfooter">
                
                    <div class="footerbtn"><span><?php  the_field('about_us');?></span></div>
                    <span class="footerabout"><?php the_field('about_us_caption'); ?></span>
                    <span class="social mobileonly">
                    <?php $socialurl = get_field('social_icons_color'); ?>
                    	<style>
						.oemlanding_footer .site-info .copyleft .fab, .oemlanding_footer .ficon {
   					 color: <?php echo $socialurl; ?> !important;
					 
} </style>
<style>
.oemlanding_footer .mobileonly a {   
    color: <?php echo $socialurl; ?> !important;
}</style>
                    <a href="<?php the_field('facebook_url'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php the_field('linkedin_url'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?php the_field('twitter_url'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="<?php the_field('instagram_url'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    </span>
                </div>
                <div class="col-sm-8 footerright">
                    <div class="row">
                         <div class="col-sm-5 footerrightleft">
                            <div class="footerbtn"><span><?php the_field('contact_us', 'options'); ?></span></div>
                            <style>.oemlanding_footer .copyleft .fab, .oemlanding_footer .footerrightleft .ficon {
									color: <?php the_field('info_icons_colors'); ?> !important;
								}
 							</style>                           
 <span class="f-phone"><a href="tel:<?php the_field('phone_num'); ?>"><span class="ficon"><i class="fas fa-<?php the_field('phone_icon'); ?>"></i></span><?php the_field('phone_num'); ?></a></span>
                            <span class="f-email"><a href="mailto:<?php the_field('email_info'); ?>"><span class="ficon"><i class="fas fa-<?php the_field('email_icon'); ?>"></i></span><?php the_field('email_info'); ?></a></span>
                            <span class="f-address"><span class="ficon"><i class="fas fa-<?php the_field('address_icon'); ?>"></i></span><span class="addressblock"><?php the_field('address_info'); ?></span></span>
                        </div>
                        <div class="col-sm-7 footerrightright">
                            <div class="footerbtn"><span><?php the_field('helpful_links_head'); ?></span></div>
                            <?php if(get_field('helpful_links_oem')): ?>
                <ul>        
                    <?php while(have_rows('helpful_links_oem')): the_row(); ?>
                                <li><a href="<?php the_sub_field('page_url'); ?>"><?php the_sub_field('page_name'); ?></a></li>
                               
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-info" style="background: <?php  the_field('footer_background_color');?>;">
        <style>
		.oemlanding_footer .site-info .container {
    border-top: 2px solid <?php the_field('info_icons_colors'); ?>;
}
</style>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 copyleft">
                    <span class="desktabonly">
                    <?php $socialurl = get_field('social_icons_color'); ?>
                    	<style>
						
						.oemlanding_footer .site-info .copyleft .fab, .oemlanding_footer .ficon {
   					 color: <?php echo $socialurl; ?> !important;
} </style>
                        <a href="<?php the_field('facebook_url'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php the_field('linkedin_url'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?php the_field('twitter_url'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="<?php the_field('instagram_url'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        </span>
                        <span class="privacy"><a href="<?php the_field('privacy_policy_url'); ?>">Privacy Policy</a> | <a href="<?php the_field('terms_of_use'); ?>">Terms of Use</a></span> 
                    </div>
                    <div class="col-sm-6 copyright">
                       &copy; Copyright <?php echo date('Y'); ?> <?php the_field('copy_right'); ?>
                       <!--<div id="spine">
                           <p><a href="https://www.spinellc.com?utm_source=axisofs.com&amp;utm_medium=client_site&amp;utm_campaign=spine_backlink" target="_blank">
                           <img src="https://www.axisofs.com/wp-content/themes/axisofs/assets/img/spine-logo-medgray.png" width="18" height="18"> <span>a site with SPINE</span> 
                           </a></p>
                    </div> -->
                    </div>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->
<?php  }else { ?>
    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 footerlogo">
                    <?php 
                    $footerlogo = get_field('light_logo', 'options');
                    $mapicon = get_field('map_icon', 'options');
                    $phoneicon = get_field('phone_iconss', 'options'); 
                    $emailicon = get_field('email_iconss', 'options'); 
                    ?>
                    <a href="/"><img src="<?php echo $footerlogo['url']; ?>" alt="<?php echo $footerlogo['alt']; ?>" /></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 aboutfooter">
                    <div class="footerbtn"><span>About Us</span></div>
                    <span class="footerabout"><?php the_field('about_us_text', 'options'); ?></span>
                    <span class="social mobileonly">
                    <a href="<?php the_field('facebook_link', 'options'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php the_field('linkedin_link', 'options'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?php the_field('twitter', 'options'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="<?php the_field('instagram', 'options'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    </span>
                </div>
                <div class="col-sm-8 footerright">
                    <div class="row">
                         <div class="col-sm-5 footerrightleft">
                            <div class="footerbtn"><span>Contact Us</span></div>
                            <span class="f-phone"><a href="tel:<?php the_field('toll_phone', 'options'); ?>"><span class="ficon"><img src="<?php echo $phoneicon['url']; ?>" alt="<?php echo $phoneicon['alt']; ?>" /></span><?php the_field('toll_phone', 'options'); ?></a></span>
                            <span class="f-email"><a href="mailto:<?php the_field('email', 'options'); ?>"><span class="ficon"><img src="<?php echo $emailicon['url']; ?>" alt="<?php echo $emailicon['alt']; ?>" /></span><?php the_field('email', 'options'); ?></a></span>
                            <span class="f-address"><span class="ficon"><img src="<?php echo $mapicon['url']; ?>" alt="<?php echo $mapicon['alt']; ?>" /></span><span class="addressblock"><?php the_field('address', 'options'); ?></span></span>
                        </div>
                        <div class="col-sm-7 footerrightright">
                            <div class="footerbtn"><span>Helpful Links</span></div>
                           
                <ul>  
                
                  <?php if(get_field('helpful_links', 'options')): ?>   
                    <?php while(have_rows('helpful_links', 'options')): the_row(); ?>
                                <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
                               
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 copyleft">
                    <span class="desktabonly">
                        <a href="<?php the_field('facebook_link', 'options'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php the_field('linkedin_link', 'options'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?php the_field('twitter', 'options'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="<?php the_field('instagram', 'options'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        </span>
                        <span class="privacy"><a href="/privacy-policy/">Privacy Policy</a> | <a href="/terms-of-use/">Terms of Use</a></span> 
                    </div>
                    <div class="col-sm-6 copyright">
                       &copy; Copyright <?php echo date('Y'); ?> <?php the_field('copyright_text', 'options'); ?>
                       <!--<div id="spine">
                           <p><a href="https://www.spinellc.com?utm_source=axisofs.com&amp;utm_medium=client_site&amp;utm_campaign=spine_backlink" target="_blank">
                           <img src="https://www.axisofs.com/wp-content/themes/axisofs/assets/img/spine-logo-medgray.png" width="18" height="18"> <span>a site with SPINE</span> 
                           </a></p>
                    </div> -->
                    </div>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->
<?php } ?>
<?php wp_footer(); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/aos.js"></script>
<?php the_field('js'); ?>
<script>
  AOS.init();
</script>
<script>
    $(document).ready(function () {
        <?php if((isset($_REQUEST["blogtab"])) && ($_REQUEST["blogtab"] != "")){
            $blogtab = $_REQUEST["blogtab"];
            ?>
            //scroll to specific ID
            var position = $("#blogtab").offset().top-200;
            $('html, body').animate({
                scrollTop: position
            }, 200, 'linear');
            // get the tab index
            var tab_index = $('.nav-tabs a[href="#<?php echo $blogtab;?>"]').parent().index();
            //check the validation
            if(tab_index<0){
                //on wrong tab activate the first one
                $('.nav-tabs a:first').tab('show');
            }else{
                //Actvate the specific tab
                $('.nav-tabs a[href="#<?php echo $blogtab;?>"]').tab('show');
            }
        <?php } else { ?>
            //Default activate the first tab
            $('.nav-tabs a:first').tab('show');
        <?php } ?>
    });
</script>
<script>
//var url = document.location.toString();
//console.log(url);
//if (url.match('#')) {
    //$('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
//} 

// Change hash for page-reload
//$('.nav-tabs a').on('shown.bs.tab', function (e) {
    //window.location.hash = e.target.hash;
	//$('html,body').scrollTop(300);
//});
//JS for menu view    
    $('#tab_selector').on('change', function (e) {
        $('.nav-tabs li a').eq($(this).val()).tab('show');
    });
        $('#tab_selectortwo').on('change', function (e) {
        $('.nav-tabs li a').eq($(this).val()).tab('show');
    });
	
	//$("#selectors").on("change", function() {
  //$(".tab-pane").hide();
 //$("#" + $(this).val()).show();
//});
</script>
<script>
const nav = document.querySelector('#masthead');
const topOfNav = nav.offsetTop;

function fixNav() {
  if (window.scrollY >= topOfNav) {
    document.body.style.paddingTop = nav.offsetHeight + 'px';
    document.body.classList.add('fixed-nav');
  }
  else {
    document.body.style.paddingTop = 0;
    document.body.classList.remove('fixed-nav');
  }
}

window.addEventListener('scroll', fixNav);
</script>
<script>
$window = $(window);
$(window).scroll(function(){

if($window.scrollTop() > 1050)
    $("#floater").addClass('active');
else    
    $("#floater").removeClass('active');
});
$(window).scroll(function(){

if($window.scrollTop() > 1050)
    $("#floatboxid").addClass('transparentbox');
else    
    $("#floatboxid").removeClass('transparentbox');
});
$(window).scroll(function(){
   if($window.scrollTop() > 1050)
    $(".lidesc").addClass('hiddenbox');
else
$(".lidesc").removeClass('hiddenbox');

});
$(window).scroll(function(){

if($window.scrollTop() < 850)
    $("#floatend").addClass('boxactive');

else    
    $("#floatend").removeClass('boxactive');

});
</script>

                    
    <?php the_field('footer_scripts', 'options'); ?>

                    

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.9.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/custom.js"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.dlmenu.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/slick.min.js"></script>
<script>
            $(function() {
                $( '#dl-menu' ).dlmenu();
            });
        </script>
        <script type="text/javascript">
            $('.carerres-reviews').slick({
            dots: false,
            autoplay: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    arrows: false
                }
                },
                {
                breakpoint: 370,
                settings: {
                    arrows: false
                }
                }
            ]
            });
        
        $('.help-slider').slick({
            dots: false,
            arrows: false,
            speed: 3000,
            autoplay: false,
            infinite: true,
            centerMode: true,
            centerPadding: '160px',
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerPadding: '40px',
                        arrows: false
                    }
                }
            ]
        });
</script>

<script>
    $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 20) {
        $("body").addClass("scroll");
    } else {
        $("body").removeClass("fixed-nav");
    }
});
</script>
 

</body>
</html>
