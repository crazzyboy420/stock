<?php

function stock_logo_carousel_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'image'             => '',
        'loop'              => true,
        'autoplay'          => true,
        'autoplayTimeout'   => 5000,
        'nav'               => true,
        'dots'              => true,
        'destop_count'      => '5',
        'tablet_count'      => '3',
        'mobile_count'      => '2',
        'height'            => '44',
 

    ), $atts ) );     
    $logo_ids = explode(',',$image);
    $list ='
    <script>
        jQuery(document).ready(function($){
            jQuery(".logo-carousel").owlCarousel({
                responsive:{
                    0:{
                        items:'.$mobile_count.',
                    },
                    600:{
                        items:'.$tablet_count.',
                        nav:false
                    },
                    1000:{
                        items:'.$destop_count.',
                    }
                },
                autoplay:'.$autoplay.',
                nav:'.$nav.',
                dots:'.$dots.',
                loop:'.$loop.',
                margin:30,
                autoplayTimeout:'.$autoplayTimeout.',
                navText:["<i class=\'fas fa-angle-left\'></i>","<i class=\'fas fa-angle-right\'></i>"],
            });
            

            
        });
    </script>
    <div class="logo-carousel owl-carousel">';
     foreach($logo_ids as $logo){
         $list .= '
         <div style="height:'.$height.'px" class="logo-carousel-table">
             <div class="logo-carousel-tablecell">
                <img src="'. wp_get_attachment_image_src( $logo,'large' )['0'].'" alt="">
             </div>
         </div>
         
         ';
     }
   

    $list .='</div>';
    return $list;


}
add_shortcode( 'logo_carousel', 'stock_logo_carousel_shortcode' );