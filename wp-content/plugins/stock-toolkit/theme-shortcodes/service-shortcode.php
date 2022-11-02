<?php

function stock_stock_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'title'             => '',
        'desc'           => '',
        'link_type'         => '',
        'page_link'         => '',
        'extarnal_link'     => '',
        'link_text'         => 'See more',
        'icon_type'         => '',
        'font_awesome'      => '',
        'img_icon'          => '',
        'box_background'    => '',
    ), $atts ) );    
    if($link_type == 1){
        $link_sorce = get_page_link( $page_link );
    }else{
        $link_sorce = $extarnal_link;
    }
   
    $stock_service_shortcode = '
       <div class="stock-service-box">
            <div style="background-image:url('.wp_get_attachment_image_src($box_background,'medium')['0'].')" class="stock-service-icon">
                  <div class="stock-service-icon-table">
                      <div class="stock-service-icon-tablecell">';
                      if($icon_type == 1){
$stock_service_shortcode  .= '<i class="'.$font_awesome.'"></i>';
                      }else{
$stock_service_shortcode  .= '<img src="'.wp_get_attachment_image_src($img_icon, 'thumbnail')['0'].'"></img>';
                      }

    $stock_service_shortcode .='             
                      </div>
                  </div>
            </div>
            <div class="stock-service-content">
                <h3>'.$title.'</h3>
                '.wpautop($desc).'
                <a href="'.$link_sorce.'">'.$link_text.'</a>
            </div>
       </div>
    ';
    return  $stock_service_shortcode;


}
add_shortcode( 'stock_service_box', 'stock_stock_shortcode' );