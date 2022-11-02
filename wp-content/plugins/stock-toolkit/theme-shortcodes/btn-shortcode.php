<?php

function stock_btn_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'link_type'         => '',
        'page_link'         => '',
        'extarnal_link'     => '',
        'link_text'         => esc_html__('Read more about us','stock_toolkit'),
    ), $atts ) );    
    if(!empty($link_type == 1)){
        $link_sorce = get_page_link( $page_link );
    }else{
        $link_sorce = $extarnal_link;
    }
   
    $stock_btn_shortcode = '
       <div class="stock-btn">
           <a class="bordered-btn" href="'.esc_url( $link_sorce).'">'.esc_html($link_text).'</a>
       </div>
    ';
    return  $stock_btn_shortcode;


}
add_shortcode( 'stock_btn', 'stock_btn_shortcode' );