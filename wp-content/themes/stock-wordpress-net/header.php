<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stock
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); 
    $header_setting = cs_get_option('stock_header_icon_box'); 
	$enable_image_logo = cs_get_option('enable_image_logo');
	$image_logo        =  cs_get_option('image_logo');
	$logo_text         = cs_get_option('logo_text');
	$image_max_height  = cs_get_option('image_max_height');
	$enable_preloader  = cs_get_option('enable_preloader');
	$enable_box_layout  = cs_get_option('enable_box_layout');
	
	?>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php if($enable_preloader == true):?>
		<!--Preloader-->
		<div class="preloader-wrapper">
			<div class="wrapper">
				<div class="main-circle">
					<div class="green-circle">
						<div class="brown-circle">
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div id="page" class="site<?php if($enable_box_layout == true): ?> stock-box-layout<?php endif; ?>">
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="stock-sricknav">
						<div class="site-logo">
							<h2>
								<?php if($enable_image_logo == true && !empty($image_logo)): $img_array = wp_get_attachment_image_src($image_logo,'large'); ?>
								<a href="<?php esc_url( home_url('/'));?>"> <img style = "max-height:<?php echo esc_attr( $image_max_height ) ?>px" src="<?php echo esc_url($img_array['0']) ?>" alt="<?php esc_attr( bloginfo( 'name' ) ); ?>"></a>
								 <?php else: ?>
								<?php if(!empty($logo_text)): echo esc_html(  $logo_text )?><?php else: ?><a href="<?php esc_url( home_url('/'));?>"><?php esc_html( bloginfo( 'name' ) ); ?></a><?php endif; ?>
							    <?php endif; ?>
							</h2>
						</div>
					<div class="striknav"></div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="header-right-content">
							<?php if(!empty($header_setting)): ?>
							<?php foreach($header_setting as $header_Box): ?>
							<?php if(!empty($header_Box['link'])): ?><a href="<?php echo esc_url(  $header_Box['link'] ); ?>"<?php else: ?><div <?php endif; ?>
							    class="stock-content-box">
								<i class="<?php echo $header_Box['icon']; ?>"></i>
								 <?php echo $header_Box['title'] ?>
								<span><?php echo $header_Box['big_title']; ?></span>
								<?php if(!empty($header_Box['link'])): ?></a><?php else: ?></div><?php endif; ?>
								<?php endforeach;?>
						    <?php endif; ?>
							<?php
							if ( class_exists( 'WooCommerce' ) ) {
								deo_woocommerce_cart_icon();
							  }
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mainmanu">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
								?>
						</div>
					</div>
				</div>
			</div>
		</div>