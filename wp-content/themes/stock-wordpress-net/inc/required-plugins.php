<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'stock_rasel_ahmed_register_required_plugins' );

function stock_rasel_ahmed_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => esc_html__('Stock Toolkit','stock-wordpress-net'), 
			'slug'               => 'stock-toolkit', 
			'source'             => get_template_directory() . '/inc/plugins/stock-toolkit.zip',
			'required'           => true,
			'version'            => '1.0', 
			'force_activation'   => true, 
			'force_deactivation' => true, 
		),
		array(
			'name'               => esc_html__('WPBakery Page Builder','stock-wordpress-net'),
			'slug'               => 'js_composer', 
			'source'             => get_template_directory() . '/inc/plugins/js_composer.zip',
			'required'           => true,
			'version'            => '6.2.0', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
		),
		array(
			'name'               => esc_html__('One Click Demo Impoter','stock-wordpress-net'),
			'slug'               => 'js_composer', 
			'source'             => get_template_directory() . '/inc/plugins/one-click-demo-import.zip',
			'required'           => true,
			'version'            => '3.0.2', 
			'force_activation'   => true, 
			'force_deactivation' => true,
		),


		array(
			'name'        => esc_html__('Contact form 7','stock-wordpress-net'),
			'slug'        => 'contact-form-7',
			'required' => false,
		),
		array(
			'name'        => esc_html__('Breadcrumb NavXt','stock-wordpress-net'),
			'slug'        => 'breadcrumb-navxt',
			'required' => true,
		),

	);

	$config = array(
		'id'           => 'stock-wordpress-net',                 
		'default_path' => '',                      
		'menu'         => 'stock-install-plugins',
		'has_notices'  => true,                   
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                   
		'is_automatic' => false,                  
		'message'      => '',                     

	
	);

	tgmpa( $plugins, $config );
}
