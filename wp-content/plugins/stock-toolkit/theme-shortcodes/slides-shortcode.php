<?php

function stock_slide_shortcode($atts){
    extract(shortcode_atts( array(
        'count'             => '3',
        'loop'              => true,
        'autoplay'          => true,
        'autoplayTimeout'   => 5000,
        'nav'               => true,
        'dots'              => true,
        'slide_id'          => '',
        'height'            => '730',
 

    ), $atts ) );
    if($count == 1){
       $q = new WP_Query( array( 'post_type'=> 'slide', 'posts_per_page' => $count, 'p' =>$slide_id) );
        
    }else{
        $q = new WP_Query( array( 'post_type'=> 'slide', 'posts_per_page' => $count) );

    }
    
    
    if($count != 1){
        $list = '
        <script>
            jQuery(window).load(function(){
            jQuery(".overlay-slides").fadeOut();
               jQuery(document).ready(function(){
                jQuery(".stock-slides").owlCarousel({
                    items:1,
                    autoplay:'.$autoplay.',
                    nav:'.$nav.',
                    dots:'.$dots.',
                    loop:'.$loop.',
                    autoplayTimeout:'.$autoplayTimeout.',
                    navText:["<i class=\'fas fa-angle-left\'></i>","<i class=\'fas fa-angle-right\'></i>"]
                });
               
               });
               
            });
        </script>
        <div style"height:'.$height.'px" class="slides-wrapper">
        ';
        $enable_preloader = cs_get_option('enable_preloader');
         if($enable_preloader == true){}else{
$list .=' <div class="overlay-slides">
            <div class="preloader">
                <div class="diamond">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="movement">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>';
         }
$list  .= '
        <div class="stock-slides owl-carousel">';
    }else{
        $list = '';
       
    }
    while( $q-> have_posts()): $q-> the_post();
    $id = get_the_ID();
    if(get_post_meta( $id, 'stock_slide_options', true )){
         $slide_meta = get_post_meta( $id, 'stock_slide_options', true );
          
    }else{
        $slide_meta = array();
    }
    $post_content = get_the_content();
    if(array_key_exists('enable_overlay',$slide_meta)){
        $overlay = $slide_meta['enable_overlay'];
    }else{
        $overlay = true;
    }
    if(array_key_exists('overlay_percentange',$slide_meta)){
        $overlay_percentange = $slide_meta['overlay_percentange'];
    }else{
        $overlay_percentange = .7;
    }
    if(array_key_exists('overlay_color',$slide_meta)){
        $overlay_color = $slide_meta['overlay_color'];
    }else{
        $overlay_color = '#181a1f';
    }
    

    $list .= '
    <div style="background:url('.get_the_post_thumbnail_url().');height:'.$height.'px" class= "stock-slide-item">';
     if($overlay == true){
      $list .='<div style="opacity:'.$overlay_percentange.';background:'.$overlay_color.'"; class="overlay"></div>';
       
     }else{

     }

      $list .='
        <div class="stock-slide-table">
             <div class="stock-slide-tablecell">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-7">
                             <h2>'.get_the_title($id).'</h2>
                             '.wpautop($post_content).'';

    if(!empty($slide_meta['buttons'])){
        $list .= '<div class="stock-slide-buttons">';
        foreach($slide_meta['buttons'] as $button){
            if($button['link_type'] == 1){
                $btn_link = get_page_link( $button["wordpress_link"] );
            }else{
                $btn_link = $button["external_link"];
            }
        $list .= '<a class="'.$button["type"].'-btn stock-slide-btn" href="'.$btn_link.'">'.$button["link_text"].'</a>';
        }

       
        $list .= '</div>';
    }

    $list .='
                           </div>
                       </div>
                   </div>
              </div>
          </div>
       </div>
    ';
    endwhile;
    if($count != 1){
        $list .= '</div> </div>';
    }
  
    wp_reset_query();
    return $list;


}
add_shortcode( 'stock_slide', 'stock_slide_shortcode' );