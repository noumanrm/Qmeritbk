<?php
/**
 Template Name: EV charging Installation 
 */
get_header();
?>

  <style>
#innerhero{
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_background'); ?>) no-repeat ; background-size: cover;
    background-position:  center;
}

@media screen and (max-width: 768px){
 #innerhero{
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_background'); ?>) no-repeat top center; background-size: cover;
 }
}
@media screen and (max-width: 370px){
 #innerhero{
     background: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.0)), url(<?php the_field('hero_background'); ?>) no-repeat top center; background-size: cover;
 }
}
</style>  

<style>
	/**custom fonts for heading**/
	<?php
	$file2 = get_field('upload_font_heading') ;
		if( $file2 ) { ?>
	@font-face {
     font-family: "<?php echo $file2['filename']; ?>";
     src: url("<?php echo $file2['url']; ?>") ;
     font-weight: normal;
     font-style: normal;
}
	.single-oemlandingpages .herotitle {
    font-family: "<?php echo $file2['filename']; ?>"!important;
}
.single-oemlandingpages h2{
	font-family: "<?php echo $file2['filename']; ?>"!important;
}
.single-oemlandingpages h1{
		font-family: '<?php echo $file2['filename']; ?>'!important;
}
.single-oemlandingpages h3{
		font-family: '<?php echo $file2['filename']; ?>'!important;
}
.single-oemlandingpages h4{
		font-family: '<?php echo $file2['filename']; ?>'!important;
}
.single-oemlandingpages h5{
		font-family: '<?php echo $file2['filename']; ?>'!important;
}
.single-oemlandingpages h6{
		font-family: '<?php echo $file2['filename']; ?>'!important;
}

	<?php } else { ?>
	.single-oemlandingpages .herotitle {
    font-family: 'Muli';
}
	.single-oemlandingpages h2{
	font-family: 'Muli';
}
.single-oemlandingpages h1{
		font-family: 'Muli';
}
.single-oemlandingpages h3{
		font-family: 'Muli';
}
.single-oemlandingpages h4{
		font-family: 'Muli';
}
.single-oemlandingpages h5{
		font-family: 'Muli';
}
.single-oemlandingpages h6{
		font-family: 'Muli';
}
<?php } ?>
	/** custom fonts for body**/
	<?php 
$file = get_field('upload_font_file');

	if( $file ) { ?>
	@font-face {
     font-family: "<?php echo $file['filename']; ?>";
     src: url("<?php echo $file['url']; ?>") ;
     font-weight: normal;
     font-style: normal;
}
.single-oemlandingpages p{
		font-family: '<?php echo $file['filename']; ?>'!important;
}
.single-oemlandingpages li{
		font-family: '<?php echo $file['filename']; ?>'!important;
}
.single-oemlandingpages a{
		font-family: '<?php echo $file['filename']; ?>'!important;
} 
	<?php } else { ?>
.single-oemlandingpages p{
		font-family: 'Muli';
}
.single-oemlandingpages li{
		font-family: 'Muli';
}
.single-oemlandingpages a{
	font-family: 'Muli';
	}
<?php } ?>
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
                <h1><span class="herotitle"><?php the_field('hero_heading'); ?></span></h1>
            </div>
        </div>
        <a href="#forfront" class="ipadonly"><span class="scrollicon bounce"><img src="<?php the_field('scroll_icon', 'options'); ?>" alt="scroll" /></span></a>

    </div>
</div>

<!-- Welcom section -->
<?php if(have_rows('flexible_section') ): 
		while(have_rows('flexible_section')): the_row();
?>
<?php if(get_row_layout() == 'welcome_section') :?>
<div class="welcom_mian">
	<div class="welcome_left">
			<h4>
			<?php the_sub_field('welcome_heading'); ?>
		</h4>
		<?php the_sub_field('welcome_content'); ?>
	</div>
	<div class="welcome_right">
	   <img src="<?php the_sub_field('car_image'); ?>" alt="welcome">
	</div>
</div>
<?php endif; ?>

<!-- how does its work -->
<?php if(get_row_layout() == 'how_work') :?>
<div class="works_mian">
	<div class="container">
		<div class="works_upper_txt">
			<h4>
			<?php the_sub_field('how_work_heading'); ?>
		    </h4>
		<h2>
			 <?php the_sub_field('how_work_heading_two'); ?>
		</h2>
		<?php the_sub_field('how_work_content'); ?>
		</div>
		<div class="steps_main">
			<h2>
				<?php the_sub_field('estimate_heading'); ?>
			</h2>
<ul>
												<li>
					<div class="setpup">
						<div class="setup_img">
							<img src="<?php the_sub_field('estimate_image_one'); ?>" alt="step">
							<span class="step_number">1</span>
						</div>
						<p>
						<?php the_sub_field('estimate_caption_text_one'); ?>	
						</p>
					</div>
				</li>
												<li>
					<div class="setpup">
						<div class="setup_img">
							<img src="<?php the_sub_field('estimate_image_two'); ?>" alt="step" >
							<span class="step_number">2</span>
						</div>
						<p>
						<?php the_sub_field('estimate_caption_text_two'); ?>	
						</p>
					</div>
				</li>
												<li>
					<div class="setpup">
						<div class="setup_img">
							<img src="<?php the_sub_field('estimate_image_three'); ?>" alt="step" >
							<span class="step_number">3</span>
						</div>
						<p>
						<?php the_sub_field('estimate_caption_text_three'); ?>
						</p>
					</div>
				</li>
							</ul>
			<h3>
				<?php the_sub_field('bottom_heading'); ?>	
			</h3>
			<p>
				<?php the_sub_field('bottom_text_area'); ?>	
			</p>
			<?php if(get_sub_field('control_visibility') == true){ ?>
			<a class="btn_anchor" href="<?php the_sub_field('estimate_btn_url') ?>"><?php the_sub_field('estimate_btn_text') ?></a>
			<?php } ?>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- why qmerit -->
<?php if(get_row_layout() == 'why_qmerit') :?>
<div class="why_qmeritMain">
	<div class="container">
		<div class="why_qmeritTxt">
			<h4>
				<?php the_sub_field('why_qmerit_heading_one'); ?>
			</h4>
			<h2>
				<?php the_sub_field('why_qmerit_heading_two'); ?>
			</h2>
			<?php the_sub_field('why_qmerit_content'); ?>
		</div>
		<ul>					
			<li>
				<div class="leader_box">
					<img src="<?php //the_sub_field('icon_one'); ?>">
                    <?php the_sub_field('icon_one_copy',false,false); ?>
					<h3>
						<?php the_sub_field('heading_one'); ?></h3>
					<p>
						<?php the_sub_field('caption_one'); ?></p>
				</div>
			</li>
					
			<li>
				<div class="leader_box">
					<img src="<?php //the_sub_field('icon_two'); ?>">
                    <?php the_sub_field('icon_two_copy',false,false); ?>
					<h3><?php the_sub_field('heading_two'); ?></h3>
					<p>
						<?php the_sub_field('caption_two'); ?></p>
				</div>
			</li>
					
			<li>
				<div class="leader_box">
					<img src="<?php //the_sub_field('icon_three'); ?>">
                    <?php the_sub_field('icon_three_copy',false,false); ?>
					<h3>
						<?php the_sub_field('heading_three'); ?></h3>
					<p>
						<?php the_sub_field('caption_three'); ?></p>
				</div>
			</li>
					
			<li>
				<div class="leader_box">
					<img src="<?php //the_sub_field('icon_four'); ?>">
                    <?php the_sub_field('icon_four_copy',false,false); ?>
					<h3>
						<?php the_sub_field('heading_four'); ?></h3>
					<p>
						<?php the_sub_field('caption_four'); ?></p>
				</div>
			</li>
					</ul>
			<?php if(get_sub_field('control_estimate_btn') == true){ ?>
			<a class="btn_anchor" href="<?php the_sub_field('button_url') ?>"><?php the_sub_field('button_text') ?></a>
			<?php } ?>		
	</div>
</div>

<?php endif; ?>
<?php 
endwhile;
endif; ?>
<!---outer loop end--->
<div class="container">
<div class="trusred_partner_mian">

        <h2><?php the_field('trusted_partner_heading'); ?></h2>
        <!---outer loop--->
			<?php if(have_rows('premier_brands_logos_row') ){ 
                    while(have_rows('premier_brands_logos_row')){ the_row();
            ?>
            <ul class="partner_row">
            <?php 

			if( get_sub_field('number_of_logos_to_show') == '1' ){
			if(have_rows('logo_first_option') ){
					while(have_rows('logo_first_option')){ the_row();
			?>
                <li>
                    <div class="partner_log">
                        <img src="<?php the_sub_field('add_logo_for_first_option'); ?>" alt="">
                    </div>
                </li>
                <!---Inner loop end--->
				<?php } ?><!---Inner while loop end--->
                <?php } ?><!---Inner if end--->
                <?php } elseif(get_sub_field('number_of_logos_to_show') == '2' ){ ?>
                <?php
				if(have_rows('logo_second_option') ){
						while(have_rows('logo_second_option')){ the_row();
				?>
                <li>
                    <div class="partner_log">
                        <img src="<?php the_sub_field('add_logo_for_second_option'); ?>" alt="">
                    </div>
                </li>
                 <!---Inner loop end--->
                <?php } ?><!---Inner while loop end--->
                <?php } ?><!---Inner if end--->
                <?php }elseif(get_sub_field('number_of_logos_to_show') == '3' ){ ?>
                <?php
				if(have_rows('logo_third_option') ){
						while(have_rows('logo_third_option')){ the_row();
				?>
                <li>
                    <div class="partner_log">
                        <img src="<?php the_sub_field('add_logo_for_third_option'); ?>" alt="">
                    </div>
                </li>
                <!---Inner loop end--->
				<?php } ?><!---Inner while loop end--->
                <?php } ?><!---Inner if end--->
                <?php }elseif(get_sub_field('number_of_logos_to_show') == '4' ){ ?>
                <?php
				if(have_rows('logo_fourth_option') ){
						while(have_rows('logo_fourth_option')){ the_row();
				?>
                <li>
                    <div class="partner_log">
                       <img src="<?php the_sub_field('add_logo_for_fourth_option'); ?>" alt="">
                    </div>
                </li>
                 <!---Inner loop end--->
                <?php } ?><!---Inner while loop end--->
                <?php } ?><!---Inner if end--->
                <?php }elseif(get_sub_field('number_of_logos_to_show') == '5' ){ ?>
                <?php
				if(have_rows('logo_fifth_option') ){
						while(have_rows('logo_fifth_option')){ the_row();
				?>
                <li>
                    <div class="partner_log">
                         <img src="<?php the_sub_field('add_logo_for_fifth_option'); ?>" alt="">
                    </div>
                </li>
                <!---Inner loop end--->
				<?php } ?><!---Inner while loop end--->
                <?php } ?><!---Inner if end--->
                <?php }elseif(get_sub_field('number_of_logos_to_show') == '6' ){ ?>
                <?php
				if(have_rows('logo_sixth_option') ){
						while(have_rows('logo_sixth_option')){ the_row();
				?>
                <li>
                    <div class="partner_log">
                        <img src="<?php the_sub_field('add_logo_for_sixth_option'); ?>" alt="">
                    </div>
                </li>
                                <!---Inner loop end--->
                <?php } ?><!---Inner while loop end--->
                <?php } ?><!---Inner if end--->
                <?php }elseif(get_sub_field('number_of_logos_to_show') == '7' ){ ?>
                <?php
				if(have_rows('logo_seventh_option') ){
						while(have_rows('logo_seventh_option')){ the_row();
				?>
                <li>
                    <div class="partner_log">
                        <img src="<?php the_sub_field('add_logo_for_seventh_option'); ?>" alt="">
                    </div>
                </li>
                                <!---Inner loop end--->
                <?php } ?><!---Inner while loop end--->
                <?php } ?><!---Inner if end--->
                <?php } ?>
            </ul>
            <?php 
				}
				} ?>
                
                <ul class="partner_tablet">
                <?php if(have_rows('tablet_logo') ){ 
                    while(have_rows('tablet_logo')){ the_row();
            ?>
                <li>
                    <div class="partner_log">
                        <img src="<?php the_sub_field('brand_logo'); ?>" alt="">
                    </div>
                </li>
                <?php 
				}
				} ?>
                
            </ul>
    </div>
    </div>
          
<ul class="this-tab">					
                    
                    <?php                     
                    $args = array(
                            'hide_empty' => '0',
                            'post_type' => 'currenttrendsblog', 
                           'taxonomy' => 'blog_categories',
                           'order'   => 'ASC'
                       );
                     $categories = get_categories($args);
                     foreach ($categories as $category) {  
						 if ($category->count > 0){
                        ?>
                    <li>
                        <a href="https://qmerit.spinegreen.com/blog#<?php echo $category->slug ?>" ><?php echo $category->cat_name; ?></a>
                    </li>
                   <?php 
                   } 
					 }?>
                   <!--  <li>
                        <a href="#blog_tab3" data-toggle="tab">Energy Storage</a>
                    </li>
                    <li>
                        <a href="#blog_tab4" data-toggle="tab">Microgrids </a>
                    </li> -->
                </ul>
  
<?php get_footer(); ?>