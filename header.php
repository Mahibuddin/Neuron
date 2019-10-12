<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--  favicon -->

		<?php if(!(function_exists('has_site_icon') & has_site_icon())){ ?>
			<link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(cs_get_option('neuron_fav_icon'));?>" >
		<?php   } ?>
        
	<?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?>>
	
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<!-- start top bar -->
		<?php if(cs_get_option('top_bar_contact_switch')){ ?>
			<div class="header-top-area">
				<div class="container">
					<div class="row">

						<?php if (cs_get_option('social_info') == 'contact'){ ?>
						<div class="col-sm-8 hidden-xs">
							<div class="contact">

								<?php 
									$top_left_group = cs_get_option('top_left_group');
									if(is_array($top_left_group)){
										foreach($top_left_group as $key => $value){?>						
										<p>
											<i class="<?php echo esc_attr($value['contact_icon']);?>"></i>
											<?php echo esc_html($value['contact_text']);?>
										</p>
									<?php 
									}
									}
								?>
								
							</div><!-- /.contact -->
						</div><!-- /.col-sm-8 -->
						
						<div class="col-sm-4">
							<div class="social-icon">
								<ul>

									<?php 
										$top_right_group= cs_get_option('top_right_group');
										if(is_array($top_right_group)){
											foreach($top_right_group as $key => $value){?>
											<li><a href="<?php echo esc_url($value['social_link']);?>"><i class="<?php echo esc_attr($value['social_icon']);?>"></i></a></li>
										<?php 
										}
										}
									?>

								</ul>
							</div><!-- /.social-icon -->
						</div><!-- /.col-sm-4 -->
						<?php } else { ?>

						<div class="col-sm-4">
							<div class="social-icon">
								<ul style="float: left;">

									<?php 
										$top_right_group= cs_get_option('top_right_group');
										if(is_array($top_right_group)){
											foreach($top_right_group as $key => $value){?>
											<li><a href="<?php echo esc_url($value['social_link']);?>"><i class="<?php echo esc_attr($value['social_icon']);?>"></i></a></li>
										<?php 
										}
										}
									?>

								</ul>
							</div><!-- /.social-icon -->
						</div><!-- /.col-sm-4 -->

						<div class="col-sm-8 hidden-xs">
							<div class="contact">

								<?php 
									$top_left_group = cs_get_option('top_left_group');
									if(is_array($top_left_group)){
										foreach($top_left_group as $key => $value){?>						
										<p style="float: right;">
											<i class="<?php echo esc_attr($value['contact_icon']);?>"></i>
											<?php echo esc_html($value['contact_text']);?>
										</p>
									<?php 
									}
									}
								?>
								
							</div><!-- /.contact -->
						</div><!-- /.col-sm-8 -->
						<?php	}
					
					?>


					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- end top bar -->
			<?php } ?>

	        <!-- Start Navigation -->
	        <nav class="navbar navbar-default navbar-sticky bootsnav">
	            <!-- Start Top Search -->
	            <div class="top-search">
	                <div class="container">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
	                        <input type="text" class="form-control" placeholder="Search">
	                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
	                    </div>
	                </div>
	            </div>
	            <!-- End Top Search -->

	            <div class="container">
	                <!-- Start Atribute Navigation -->
	                <div class="attr-nav">
	                    <ul>
	                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
	                        <li class="dropdown">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
	                                <i class="fa fa-shopping-bag"></i>
	                                <span class="badge">2</span>
	                            </a>
	                            <ul class="dropdown-menu cart-list">
	                                <li>
	                                    <a href="#" class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-1.jpg" class="cart-thumb" alt="" /></a>
	                                    <h2><a href="#">Denim SlimFit Shirt </a></h2>
	                                    <p>2x - <span class="price">$19.99</span></p>
	                                </li>
	                                <li>
	                                    <a href="#" class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-3.jpg" class="cart-thumb" alt="" /></a>
	                                    <h2><a href="#">Denim Polo Shirt</a></h2>
	                                    <p>2x - <span class="price">$12.99</span></p>
	                                </li>
	                                <li class="total">
	                                    <span class="pull-right"><strong>Total</strong>: $320.00</span>
	                                    <a href="#" class="btn btn-primary btn-sm btn-cart">Cart</a>
	                                </li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
	                <!-- End Atribute Navigation -->

	                <!-- Start Header Navigation -->
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                        <i class="fa fa-bars"></i>
	                    </button>
	                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">

	                    	<?php
								if(cs_get_option('neuron_logo')){?>
									<img src="<?php echo esc_url(wp_get_attachment_image_src( cs_get_option('neuron_logo'), 'full') [0]);?>" class="logo logo-scrolled" alt="<?php esc_html_e('Neuron','neuron');?>" />
								<?php  }else{ ?> <h2 class="logo_title"><?php echo esc_attr( get_bloginfo( 'name', 'display' )); ?></h2> <?php } ?>

	                    </a>
	                </div>
	                <!-- End Header Navigation -->

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="navbar-menu">

						<?php
							if(has_nav_menu('header_menu')){
							wp_nav_menu( array(
								'menu'              => 'header_menu',
								'theme_location'    => 'header_menu',
								'depth'             => 10,
								'menu_class'        => 'nav navbar-nav navbar-right',
								'fallback_cb'       => 'neuron_WP_Bootstrap_Navwalker::fallback',
								'walker'            => new neuron_WP_Bootstrap_Navwalker()
								
							));
							} else { ?>
									<ul class="setup_menu">
										<li><a href="<?php echo admin_url('nav-menus.php'); ?>"><?php esc_html_e('Set Up Your Menu','neuron');?></a></li>
									</ul>
						<?php } ?>

	                   
	                </div><!-- /.navbar-collapse -->
	            </div>
	        </nav>
	        <!-- End Navigation -->
	        <div class="clearfix"></div>
		</header> <!-- end header -->
	