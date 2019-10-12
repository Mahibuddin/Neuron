
<?php  
/*
	Template Name: About Template
*/
	get_header();

	$abt_feat_sec_switch = cs_get_option('abt_feat_sec_switch');
	$abt_exp_sec_switch = cs_get_option('abt_exp_sec_switch');
	$abt_acc_sec_switch = cs_get_option('abt_acc_sec_switch');

	$acc_sec_title = cs_get_option('acc_sec_title');
	$acc_sec_content = cs_get_option('acc_sec_content');
	$abt_exp_title = cs_get_option('abt_exp_title');
	$abt_exp_content = cs_get_option('abt_exp_content');
	$abt_exp_img = cs_get_option('abt_exp_img');
	$abt_exp_img_array = wp_get_attachment_image_src(cs_get_option('abt_exp_img'), 'large');

	if (!empty($abt_exp_img)) {
		$abt_exp_img = $abt_exp_img_array[0];
	}else{
		$abt_exp_img = ''.get_template_directory_uri().'/assets/img/about-us-block.jpg';
	}

?>

<?php
	// Start the loop.
	while ( have_posts() ) : the_post();		
?>
	<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
	<section <?php if(has_post_thumbnail()): ?> style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" <?php endif;?> class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- breadcrumb content -->
					<div class="page-breadcrumbd">
						<h2><?php the_title(); ?></h2>
						<p><a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?></p>
					</div><!-- end breadcrumb content -->
				</div>
			</div>
		</div>
	</section><!-- end breadcrumb -->

	<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
		<?php if($abt_exp_sec_switch == true) : ?>
		<section class="block about-us-block section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<!-- block text -->
						<div class="block-text">
							<h2><?php echo $abt_exp_title; ?></h2>
							<?php echo wpautop($abt_exp_content); ?>
						</div>
					</div>
					<div class="col-md-6">
						<!-- block image -->
						<div class="block-img">
							<img src="<?php echo $abt_exp_img; ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
		<?php endif; ?>

	<?php if($abt_feat_sec_switch == true){get_template_part('content-part/features');} ?>

	<?php if($abt_acc_sec_switch == true) : ?>
	<section class="accordian-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="accorian-item">

						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php 
								$accr_no = 0; 
								$accr_grp = cs_get_option('accordion_group'); 
								foreach($accr_grp as $accr) : 
								$accr_no++;

								if ($accr_no == 1) {
									$aria_expanded = 'true';
									$in_class = 'in';
								}else{
									$aria_expanded = 'false';
									$in_class = '';
								}
							?>
								<!-- accordian item-<?php echo $accr_no; ?> -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading-<?php echo $accr_no; ?>">
										<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $accr_no; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse-<?php echo $accr_no; ?>">
										<?php echo $accr['abt_acc_title']?>
										</a>
										</h4>
									</div>
									<div id="collapse-<?php echo $accr_no; ?>" class="panel-collapse collapse <?php echo $in_class; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $accr_no; ?>">
										<div class="panel-body">
											<?php echo wpautop($accr['abt_acc_content']); ?>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<!-- accordian right text block -->
					<div class="accordian-right-content">
						<h2><?php echo $acc_sec_title; ?></h2>
						<?php echo wpautop($acc_sec_content); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

<?php endwhile;?>

<?php get_footer(); ?>


