<?php

function stock_testimonial_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'title'         => '',
        'position'         => '',
        'testimonial'     => '',
        'photo'         => '',
    ), $atts ) );    

    $stock_testimonial_shortcode = '
       <div class="stock-testimonial-box">
           <img src="'.wp_get_attachment_image_src( $photo, 'large' )['0'].'" alt="'.$title.'"></img>
           <h3>'.$title.'<span>'.$position.'</span></h3>
           '.wpautop($testimonial).'
       </div>
    ';
    return  $stock_testimonial_shortcode;


}
add_shortcode( 'stock_testimonial', 'stock_testimonial_shortcode' );