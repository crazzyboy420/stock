<?php

function stock_tile_gallery_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'images'         => '',
        'height'         => '310',
        'size'           => 'large'
    ), $atts ) );
    $image_ids = explode(',', $images);
    $image_count = count($image_ids);
  
    $image_no = 0;
   
     if(!empty($images)){
        $stock_tile_gallery_shortcode = '
          <div class="stock-tile-gallery stock-tile-gallery-imgae-'.$image_count.'">';
          foreach($image_ids as $image){
            $image_no++; 
            $image_url = wp_get_attachment_image_src($image, $size);
            $stock_tile_gallery_shortcode .= '
           <div style="background-image:url('.$image_url['0'].'); height:'.$height.'px" class="stock-tile-gallery-block tile-gallery-block-'.$image_no.'"></div>
         ';     
          }

         
     $stock_tile_gallery_shortcode .= '</div>';

     }else{
        $stock_tile_gallery_shortcode .= ''; 
     }
      
    return  $stock_tile_gallery_shortcode;


}
add_shortcode( 'stock_tile_gallery', 'stock_tile_gallery_shortcode' );