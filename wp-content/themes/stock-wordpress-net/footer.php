<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stock
 */
$social_link = cs_get_option('social_link');
$copyright_text = cs_get_option('copyright_text');
$footer_copyright_text_allowed_tags =
	array(
		'a' => array(
			'href' => array(),
			'title' => array()
		),
		'br' => array(),
		'em' => array(),
		'strong' => array(),
		'img'    =>array(
			'alt' => array(),
			'src' => array(),
		),
	);
?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<?php if(is_active_sidebar( 'stock_footer' )):?>
			<div class="row">
				    <?php dynamic_sidebar( 'stock_footer' );?>
			</div>
		<?php endif;?>
		    <div class="row">
		    	<div class="col-md-12">
		    		<div class="stock-footer-bottom">
		    			<div class="row">
		    				<div class="col-lg-4">
		    					<?php if(!empty($copyright_text)): ?><?php echo wp_kses( $copyright_text ,$footer_copyright_text_allowed_tags)?><?php else:?><?php echo  esc_html_e('Copyright &copy 2017 FairDealLab - All Rights Reserved','stock-wordpress-net' )?><?php endif;?>
		    				</div>
		    				<div class="col-lg-4">
		    					<div class="footer-menu">
		    						<?php
										wp_nav_menu(
											array(
												'menu'           => 'footer menu',
												'theme_location' => '',
											)
										);
									 ?>
		    					</div>
		    				</div>
		    				<div class="col-lg-4">
								<?php if(!empty($social_link)): ?>
		    					<div class="social-icons">
									<?php foreach($social_link as $social): ?>
		    						<a target="_blank" href="<?php echo esc_url( $social['link']) ?>"><i class="<?php echo esc_attr( $social['icon'] ) ?>"></i></a>
									<?php endforeach; ?>
		    					</div>
								<?php endif; ?>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
