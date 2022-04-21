<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package qmerit-new
 */
get_header();
?>

    

<style>

	/**custom fonts for heading**/
	<?php
	$file2 = get_field('upload_font_heading') ;
		if( $file2 ) { ?>
	@font-face {
    font-family: '<?php echo $file2['filename']; ?>';
    src: url('<?php echo $file2['url']; ?>') format('woff2'),
         url('<?php echo $file2['url']; ?>') format('woff');
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
#qmerit_banner {
    background: linear-gradient(to bottom,rgba(0,0,0,.52),rgba(0,0,0,.0)) , url(<?php the_field('hero_background'); ?>) no-repeat center;
    background-size: cover;
}</style>
<div class="qmerit_banner_txt">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 heroleft heroleftoem">
				<span class="herotitle"><?php the_field('hero_heading'); ?></span>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Welcom section -->
<?php if(have_rows('flexible_section') ): 
		while(have_rows('flexible_section')): the_row();
?>
<?php if(get_row_layout() == 'welcome_section') :?>
<div class="container">
<div class="welcom_mian">
	<div class="welcome_left">
			<h3 style="color: <?php the_sub_field('color_heading'); ?>">
			<?php the_sub_field('welcome_heading'); ?>
		</h3>
		<?php the_sub_field('welcome_content'); ?>
	</div>
	<div class="welcome_right">
	   <img src="<?php the_sub_field('car_image'); ?>" alt="welcome">
	</div>
</div>
</div>
<?php endif; ?>
<!---- How can Help--->
<?php if(get_row_layout() == 'how_can_help') :?>
<div class="install_main" style="background: <?php the_sub_field('section_background_color'); ?>">
        <h3 style="color: <?php the_sub_field('section_heading_color'); ?>"><?php the_sub_field('how_can_help_heading_one'); ?></h3>
        <h2 style="color: <?php the_sub_field('section_heading_color'); ?>"><?php the_sub_field('how_can_help_heading_two'); ?></h2>
        <div class="install_container">
            <div class="intall_pakges">
                <div class="pakges_inner">
                <div class="pakges_txt">
                    <h4 style="color: <?php the_sub_field('standard_heading_text_color'); ?>"><?php the_sub_field('standard_heading'); ?></h4>
                    <p style="color: <?php the_sub_field('standard_heading_text_color'); ?>"><?php the_sub_field('standard_caption'); ?></p>
                    </div>
                    <ul>
                        <li><?php the_sub_field('standard_point_one') ?></li>
                        <li><?php the_sub_field('standard_point_two') ?></li>
                        <li><?php the_sub_field('standard_point_three') ?></li>
                          
                    </ul>
                    <div class="install_bottom">
                        <p><?php the_sub_field('standard_service'); ?></p>
                        <a target="_blank" href="<?php the_sub_field('standard_button_url'); ?>"><?php the_sub_field('standard_button_text'); ?></a>
                    </div>
                </div>
                <div class="pakges_inner">
                <div class="pakges_txt">
                    <h4 style="color: <?php the_sub_field('premium_heading_text_color'); ?>"><?php the_sub_field('premium_heading'); ?></h4>
                    <p style="color: <?php the_sub_field('premium_heading_text_color'); ?>"><?php the_sub_field('premium_caption'); ?></p>
                    </div>
                    <ul>
                              <li><?php the_sub_field('premium_point_one') ?> <span><a style="color: #2b2b2b;" target="_blank" href="<?php the_sub_field('specs_url') ?>">
                              <?php if(get_sub_field('specs_text')){ ?>
                              (<?php the_sub_field('specs_text'); ?>) <?php } ?></a> </span></li>
                               <li><?php the_sub_field('premium_point_two') ?></li>
                              <li><?php the_sub_field('premium_point_three') ?></li>
                              <li><?php the_sub_field('premium_point_four') ?></li>
                        
                    </ul>
                    <div class="install_bottom">
                        <p><?php the_sub_field('premium_service'); ?></p>
                        <a target="_blank" href="<?php the_sub_field('premium_button_url'); ?>"><?php the_sub_field('premium_button_text'); ?></a>
                    </div>
                </div>

                <div class="pakges_innerIMG">
                    <img src="<?php the_sub_field('section_image'); ?>" alt="">
                </div>
                <div class="tablet-image">
                    <img src="<?php the_sub_field('section_tablet_image'); ?>" alt="">
                </div>

            </div>
        </div>
        </div>
        
        <?php endif; ?>

<!-- how does its work -->
<?php if(get_row_layout() == 'how_work') :?>
<div class="works_mian" style="background: <?php the_sub_field('background_color'); ?>">
	<div class="container">
		<div class="works_upper_txt">
			<h4 style="color:<?php the_sub_field('heading_color'); ?>">
			<?php the_sub_field('how_work_heading'); ?>
		    </h4>
		<h2 style="color:<?php the_sub_field('heading_color'); ?> ">
			 <?php the_sub_field('how_work_heading_two'); ?>
		</h2>
		<?php the_sub_field('how_work_content'); ?>
		</div>
		<div class="steps_main">
			<h2 style="color:<?php the_sub_field('subhead_&_label_color'); ?> ">
				<?php the_sub_field('estimate_heading'); ?>
			</h2>
<ul>
												<li>
					<div class="setpup">
						<div class="setup_img">
							<img src="<?php the_sub_field('estimate_image_one'); ?>" alt="step">
							<span style="border: 2px solid <?php the_sub_field('subhead_&_label_color'); ?>; color: <?php the_sub_field('subhead_&_label_color'); ?>;" class="step_number">1</span>
						</div>
						<p style="color:<?php the_sub_field('caption_color'); ?>">
						<?php the_sub_field('estimate_caption_text_one'); ?>	
						</p>
					</div>
				</li>
												<li>
					<div class="setpup">
						<div class="setup_img">
							<img src="<?php the_sub_field('estimate_image_two'); ?>" alt="step" >
							<span style="border: 2px solid <?php the_sub_field('subhead_&_label_color'); ?>; color: <?php the_sub_field('subhead_&_label_color'); ?>;" class="step_number">2</span>
						</div>
						<p style="color:<?php the_sub_field('caption_color'); ?>">
						<?php the_sub_field('estimate_caption_text_two'); ?>	
						</p>
					</div>
				</li>
												<li>
					<div class="setpup">
						<div class="setup_img">
							<img src="<?php the_sub_field('estimate_image_three'); ?>" alt="step" >
							<span style="border: 2px solid <?php the_sub_field('subhead_&_label_color'); ?>; color: <?php the_sub_field('subhead_&_label_color'); ?>;" class="step_number">3</span>
						</div>
						<p style="color:<?php the_sub_field('caption_color'); ?>">
						<?php the_sub_field('estimate_caption_text_three'); ?>
						</p>
					</div>
				</li>
							</ul>
			<h3 style="color:<?php the_sub_field('caption_color'); ?>">
				<?php the_sub_field('bottom_heading'); ?>	
			</h3>
			<p style="color:<?php the_sub_field('caption_color'); ?>">
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
<div class="why_qmeritMain" style="background: <?php the_sub_field('background_colors'); ?>">
	<div class="container">
		<div class="why_qmeritTxt">
			<h4 style="color:<?php the_sub_field('heading_colors_copy'); ?>">
				<?php the_sub_field('why_qmerit_heading_one'); ?>
			</h4>
			<h2 style="color:<?php the_sub_field('heading_colors_copy'); ?>">
				<?php the_sub_field('why_qmerit_heading_two'); ?>
			</h2>
			<?php the_sub_field('why_qmerit_content'); ?>
		</div>
		<ul>					
			<li>
            <style>
            .single-oemlandingpages .color-icons {
    fill: <?php the_sub_field('iconsss_color'); ?>;
}
</style>
				<div class="leader_box">
					<img src="<?php //the_sub_field('icon_one'); ?>">
                    <?php the_sub_field('icon_one_copy',false,false); ?>
					<h3 style="color:<?php the_sub_field('iconsss_color'); ?>">
						<?php the_sub_field('heading_one'); ?></h3>
					<p>
						<?php the_sub_field('caption_one'); ?></p>
				</div>
			</li>
					
			<li>
				<div class="leader_box">
					<img src="<?php //the_sub_field('icon_two'); ?>">
                    <?php the_sub_field('icon_two_copy',false,false); ?>
					<h3 style="color:<?php the_sub_field('iconsss_color'); ?>"><?php the_sub_field('heading_two'); ?></h3>
					<p>
						<?php the_sub_field('caption_two'); ?></p>
				</div>
			</li>
					
			<li>
				<div class="leader_box">
					<img src="<?php //the_sub_field('icon_three'); ?>">
                    <?php the_sub_field('icon_three_copy',false,false); ?>
					<h3 style="color:<?php the_sub_field('iconsss_color'); ?>">
						<?php the_sub_field('heading_three'); ?></h3>
					<p>
						<?php the_sub_field('caption_three'); ?></p>
				</div>
			</li>
					
			<li>
				<div class="leader_box">
					<img src="<?php //the_sub_field('icon_four'); ?>">
                    <?php the_sub_field('icon_four_copy',false,false); ?>
					<h3 style="color:<?php the_sub_field('iconsss_color'); ?>">
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
<?php get_footer(); ?>

