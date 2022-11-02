<?php
if ( ! function_exists( 'stock_google_fonts' ) ) :
    /**
     * Register Google fonts.
     *
     * @return string Google fonts URL for the theme.
     */
    function stock_google_fonts() {
        $fonts_url = '';
        $fonts     = array();
        //body font
        if(!empty(cs_get_option('body_font_variant'))){
            $body_font_varient = cs_get_option('body_font_variant');
        }else{
            $body_font_varient = array();
        }
        $body_font_varient_prossesing = ':'.implode(',', $body_font_varient);
        $body_font = cs_get_option('body_font')['family'];
        $body_font .= $body_font_varient_prossesing;

        //heading font
        if(!empty(cs_get_option('heading_font_variant'))){
            $heading_font_varient = cs_get_option('heading_font_variant');
        }else{
            $heading_font_varient = array();
        }
        $heading_font_prossesing = ':'.implode(',',$heading_font_varient);
        $heading_font = cs_get_option('heading_font')['family'];
        $heading_font .=  $heading_font_prossesing;


       
        /* translators: If there are characters in your language that are not supported by this font, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== esc_html_x( 'on', 'Karla font: on or off', 'stock-wordpress-net' ) ) {
            $fonts[] = $body_font;
        }
    
        /* translators: If there are characters in your language that are not supported by this font, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== esc_html_x( 'on', 'Lato font: on or off', 'stock-wordpress-net' ) ) {
            $fonts[] = $heading_font;
        }
    
        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
            ), 'https://fonts.googleapis.com/css' );
        }
    
        return $fonts_url;
    }
    endif;
    
    
    /**
     * Enqueue scripts and styles.
     */
    function stock_google_fonts_scripts() {
    
        // Add custom fonts, used in the main stylesheet.
        wp_enqueue_style( 'stock-google-fonts', stock_google_fonts(), array(), null );
    }
    add_action( 'wp_enqueue_scripts', 'stock_google_fonts_scripts' );

 
   function stock_custom_style() {
       wp_enqueue_style(
           'custom-style',
           get_template_directory_uri() . '/assets/css/custom-style.css'
       );
           $body_font = cs_get_option('body_font')['family'];
           $body_font_varient = cs_get_option('body_font')['variant'];
           $heading_font = cs_get_option('heading_font')['family'];
           $heading_font_varient = cs_get_option('heading_font')['variant'];
           $enable_box_layout = cs_get_option('enable_box_layout');
           $body_bg          = cs_get_option('body_bg');
           $body_bg_color   = cs_get_option('body_bg_color');
           $body_bg_repeat  = cs_get_option('body_bg_repeat');
           $body_bg_attachment =cs_get_option('body_bg_attachment');
           $footer_bg         = cs_get_option('footer_bg');
           $footer_text_color  = cs_get_option('footer_text_color');
           $footer_heading_color = cs_get_option('footer_heading_color');
           $theme_color         = cs_get_option('theme_color');
           $theme_secondary_color         = cs_get_option('theme_secondary_color');
           $custom_css = "
                    body{
                           font-family: ".esc_html( $body_font ).";
                           font-weight: ".esc_attr( $body_font_varient ).";
                   }
                   h1,h2,h3,h4,h5,h6{font-family: {$heading_font}}
                   .stock-footer-menu ul li a,.stock-footer-bottom ul li a,.stock-btn .bordered-btn,
                   .list ul li,.bnt-link .wpb_wrapper a,.stock-contact-form label,.select-container select,
                   .stock-promo_box-area .bordered-btn,.vc_wp_custommenu ul li a, .stock-projects ul li,
                   .single-work-box p,::placeholder

                   {
                    font-family: ".esc_html( $heading_font ).";
                    font-weight : ".esc_attr($heading_font_varient).";
                   }
                   ";
            if($enable_box_layout == true){
                if(!empty($body_bg_color)){
                    $custom_css .= '
                        body{background:'.esc_attr($body_bg_color).'}
                    ';
                }
                if(!empty($body_bg)){
                    $custom_css .= '
                        body{background-image: url('.esc_url(wp_get_attachment_image_src($body_bg, 'large')[0]).');}
                    ';
                }
                if(!empty($body_bg_repeat)){
                    $custom_css .= '
                        body{background-repeat:'.esc_attr($body_bg_repeat).'}
                    ';
                }
                if(!empty($body_bg_attachment)){
                    $custom_css .= '
                        body{background-attachment:'.esc_attr($body_bg_attachment).'}
                    ';
                }
            }
            if(!empty($footer_bg)){
                $custom_css .= '
                    #colophon{background:'.esc_attr($footer_bg).'}
                ';
            }
            if(!empty($footer_text_color)){
                $custom_css .= '
                .site-footer, .site-footer a, .stock-footer-menu ul li a, .stock-footer-bottom, .stock-footer-bottom ul li a{color:'.esc_attr($footer_text_color).'}
                ';
            }
            if(!empty($footer_heading_color)){
                $custom_css .= '
                .widget-title{color:'.esc_attr($footer_heading_color).'}
                ';
            }
            if(!empty($theme_color)){
                $custom_css .= '
                .stock-slides .owl-nav i:hover,a.filled-btn,.stock-service-box:hover .stock-service-icon:after,.cta-bg:after,.vc_wp_custommenu ul li a:before,.stock-projects ul li::before,
                .work-box-bg:after,.stock-contact-form button,.stock-cta-area.stock-cta-thme-3 a.bordered-btn,input,.stock-cart span,.stock-cta-area.stock-cta-thme-2,
                .stock-breadcrumb-area,#breadcrump-overlay::after,.readmore-btn,input.search-submit,.entry-content .page-links a,
                .comments-area .reply a,.header-area .mainmanu ul li ul,.single-work-box i:hover,.wrapper,
                .stock-contact-form button[type="submit"] {background-color:'.esc_attr($theme_color).'}


                .stock-service-content a,.bnt-link .wpb_wrapper a,.stock-cta-thme-2,.finance-section-2 ul li:before,
                .stock-projects.theme-2 ul li:hover,.list ul li:before, .stock-projects.theme-2 ul li.active,.stock-cart i,.list ul li,.stock-content-box i,.color-red,.mainmanu ul li:hover a{color:'.$theme_color.'}

                .stock-service-box:hover .stock-service-content a,input.search-submit{border-color:'.esc_attr($theme_color).'}
                ';
            }
            if(!empty($theme_secondary_color)){
                $custom_css .= '
                a.bordered-btn:after{background-color:'.esc_attr($theme_secondary_color).'}
                ';
            }
                   
           wp_add_inline_style( 'custom-style', $custom_css );
   }
   add_action( 'wp_enqueue_scripts', 'stock_custom_style' );
   