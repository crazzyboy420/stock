<?php

function stock_promo_box_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'promo_box_title'   => '',
        'desc'              => '',
        'link_type'         => '',
        'page_link'         => '',
        'extarnal_link'     => '',
        'link_text'         => 'Apply now',
    ), $atts ) );    
    if($link_type == 1){
        $link_sorce = get_page_link( $page_link );
    }else{
        $link_sorce = $extarnal_link;
    }
   
    $stock_promo_box_shortcode = '
       <div class="stock-promo_box-area">
           <h3>'.$promo_box_title.'</h3>
           '.wpautop($desc).'
           <a class="bordered-btn" href="'.$link_sorce.'">'.$link_text.'</a>
       </div>
    ';
    return  $stock_promo_box_shortcode;


}
add_shortcode( 'stock_promo_box', 'stock_promo_box_shortcode' );