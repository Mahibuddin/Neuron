<?php
/*
	Template Name: Homepage Template
*/
 get_header(); 
 ?>

 <?php
	$home_feat_switch = cs_get_option('home_feat_sec_switch');
	$home_ser_switch = cs_get_option('home_ser_sec_switch');
	$home_exp_switch = cs_get_option('home_exp_sec_switch');

	$exp_title = cs_get_option('experience_title');
	$exp_sec_content = cs_get_option('experience_content');
	$exp_sec_img = cs_get_option('experience_img');
	$exp_sec_img_array = wp_get_attachment_image_src(cs_get_option('experience_img'), 'large');

	if (!empty($exp_sec_img)) {
		$exp_sec_img = $exp_sec_img_array[0];
	}else{
		$exp_sec_img = ''.get_template_directory_uri().'/assets/img/homepageblock.jpg';
	}
?>

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">
		

			<?php
			global $post;
			$args = array( 'posts_per_page' => 5, 'post_type'=> 'slider', 'orderby' => 'menu_order', 'order' => 'ASC' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
			 
			<?php 
			   $btn_link= get_post_meta($post->ID, 'btn_link', true); 
			   $btn_text= get_post_meta($post->ID, 'btn_text', true); 
			?>
			    <div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" class="homepage-slider">
					<div class="display-table">
						<div class="display-table-cell">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="slider-content">
											<h1> <?php the_title(); ?> </h1>
											<?php the_content(); ?>
											<a href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?> <i class="fa fa-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; wp_reset_query(); ?>
			
		</section><!-- slider area end -->
	
	
		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
	
		<?php if($home_feat_switch == true){get_template_part('content-part/features');} ?>
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<?php if($home_exp_switch == true) : ?>
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo $exp_title; ?></h2>
							<?php echo wpautop($exp_sec_content); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo $exp_sec_img; ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
		<?php endif; ?>
	
		<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->

		<?php if($home_ser_switch == true){get_template_part('content-part/services');} ?>

	
<?php get_footer(); ?>
