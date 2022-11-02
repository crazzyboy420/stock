<?php
vc_map( 
    array(
        "name" => __( "Logo Carousel", "my-text-domain" ),
        "base" => "logo_carousel",
        "category" => __( "stock", "my-text-domain"),
        "params" => array(
            array(
            "type" => "attach_images",
            "heading" => __( "Upload Image", "my-text-domain" ),
            "param_name" => "image",
            "description" => __( "Upoad logo for logo carusel", "my-text-domain" )
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Destop count", "my-text-domain" ),
                "param_name" => "destop_count",
                "value"    => '5',
                "description" => __( "Type Count in number.how many you want to show in your website", "my-text-domain" )
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Teblet count", "my-text-domain" ),
                "param_name" => "teblet_count",
                "value"    => '3',
                "description" => __( "Type Count in number.how many you want to show in your website in Teblet mode", "my-text-domain" )
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Mobile count", "my-text-domain" ),
                "param_name" => "mobile_count",
                "value"    => '2',
                "description" => __( "Type Count in number.how many you want to show in your website in mobile mode", "my-text-domain" )
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Enable loop?", "my-text-domain" ),
                "param_name" => "loop",
                "std" => __( "true", "my-text-domain" ),
                "value"=>array(
                    "yes" => 'true',
                    "No" => 'false',
                ),
                "description" => __( "Enable loop of slider?", "my-text-domain" ),
                
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Slider Height", "my-text-domain" ),
                "param_name" => "height",
                "value"=> '',
                "description" => __( "type slider height in px. only number", "my-text-domain" )
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Enable autoplay?", "my-text-domain" ),
                "param_name" => "autoplay",
                "std" => __( "true", "my-text-domain" ),
                "value"=>array(
                    "yes" => 'true',
                    "No" => 'false',
                ),
                "description" => __( "Enable autoplay of slider?", "my-text-domain" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Select autoplay Time Out", "my-text-domain" ),
                "param_name" => "autoplayTimeout",
                "std" => __( "5000", "my-text-domain" ),
                "value"=>array(
                    "1 secound" => '1000',
                    "2 secound" => '2000',
                    "3 secound" => '3000',
                    "4 secound" => '4000',
                    "5 secound" => '5000',
                    "6 secound" => '6000',
                    "7 secound" => '7000',
                    "8 secound" => '8000',
                    "9 secound" => '9000',
                    "10 secound" => '10000',
                    "11 secound" => '11000',
                    "12 secound" => '12000',
                    "13 secound" => '13000',
                    "14 secound" => '14000',
                    "15 secound" => '15000',
                ),
                "description" => __( "Enable Nav of slider?", "my-text-domain" ),
                "dependency" =>array(
                    "element" => "autoplay",
                    "value"   =>array("true"),
                ),
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Enable dots?", "my-text-domain" ),
                "param_name" => "dots",
                "std" => __( "true", "my-text-domain" ),
                "value"=>array(
                    "yes" => 'true',
                    "No" => 'false',
                ),
                "description" => __( "Enable dots of slider?", "my-text-domain" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Enable nav?", "my-text-domain" ),
                "param_name" => "nav",
                "std" => __( "true", "my-text-domain" ),
                "value"=>array(
                    "yes" => 'true',
                    "No" => 'false',
                ),
                "description" => __( "Enable Nav of slider?", "my-text-domain" )
            ),
        )
    )
);

?>