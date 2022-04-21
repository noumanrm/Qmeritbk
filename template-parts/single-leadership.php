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
#innerhero{
    background: #061034;
}

</style>
<?php
		while ( have_posts() ) :
			the_post(); ?>
<div class="container">
<div class="row">
<div class="col-lg-4 singleleft">

    <span class="breadcrumbs"><?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?></span>
    <span class="teamherotitle">Meet Our Visionary Team</span>
    <h1><span class="membername"><?php the_title(); ?></span></h1>
    <span class="membertitle"><?php the_field('job_title'); ?></span>
            </div>
            </div>

            </div>
</div>
<section id="singleteam">
    <div class="container">
        <div class="row switchearly">
            <div class="col-md-5 introleft">
                <?php the_field('intro'); ?>
            </div>
            <div class="col-md-7 introright">
            <?php $teamimage = get_field('team_image'); ?>
            <img src="<?php echo $teamimage['url']; ?>" alt="<?php echo $teamimage['alt']; ?>" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="teamcontent">
                <div class="row">
                    <div class="col-md-6">
                    <?php the_field('team_content'); ?>
                    </div>
                    <div class="col-md-6">
                    <?php the_field('team_content_right'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
	
<section id="postnav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <?php the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle"><i class="fas fa-arrow-left"></i>' . esc_html__( '', 'qmerit_new' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( '', 'qmerit_new' ) . '</span> <span class="nav-title">%title<i class="fas fa-arrow-right"></i></span>',
				)
			);

			

		endwhile; // End of the loop.
		?>
            </div>
        </div>
    </div>
<section>
		


		



<?php
get_footer();
