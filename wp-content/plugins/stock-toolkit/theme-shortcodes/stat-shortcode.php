<?php

function stock_stat_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'number'         => '',
        'after_text'         => '',
        'desc'     => '',
    ), $atts ) );    
   
    $stock_stat_shortcode = '
       <div class="stock-stat">
          <h3><span class="counter">'.$number.'</span>'.$after_text.'</h3>
          '.$desc.'
       </div>
    ';
    return  $stock_stat_shortcode;


}
add_shortcode( 'stock_stat', 'stock_stat_shortcode' );