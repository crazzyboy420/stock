<?php

function stock_cta_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'cta_title'          => '',
        'desc'              => '',
        'link_type'         => '',
        'page_link'         => '',
        'theme'             => '1',
        'extarnal_link'     => '',
        'link_text'         => esc_html__('Start a project','stock_toolkit'),
    ), $atts ) );    
    if($link_type == 1){
        $link_sorce = get_page_link( $page_link );
    }else{
        $link_sorce = $extarnal_link;
    }
    $cta_text_allowed_tags =
	array(
		'a' => array(
			'href' => array(),
			'title' => array(),
            'class' => array(),
		),
		'br' => array(),
		'em' => array(),
		'strong' => array(),
		'img'    =>array(
			'alt' => array(),
			'src' => array(),
		),
        'p'=>array()
	);
   
    $stock_cta_shortcode = '
       <div class="stock-cta-area stock-cta-thme-'.esc_attr($theme).'">
           <h3>'.esc_html($cta_title).'</h3>
           '.wp_kses(wpautop($desc),$cta_text_allowed_tags).'
           <a class="bordered-btn" href="'.esc_url($link_sorce).'">'.esc_html($link_text).'</a>
       </div>
    ';
    return  $stock_cta_shortcode;


}
add_shortcode( 'stock_cta_area', 'stock_cta_shortcode' );