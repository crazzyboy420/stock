<?php
vc_map( 
    array(
        "name" => __( "Stock Slider", "my-text-domain" ),
        "base" => "stock_slide",
        "category" => __( "stock", "my-text-domain"),
        "params" => array(
            array(
            "type" => "textfield",
            "heading" => __( "Count", "my-text-domain" ),
            "param_name" => "count",
            "value" => __( "3", "my-text-domain" ),
            "description" => __( "Type sides count.If you want to show all slides,type -1", "my-text-domain" )
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Slide List", "my-text-domain" ),
                "param_name" => "slide_id",
                "value"=> stock_toolkit_get_as_post(),
                "dependency"  => array(
                    "element" => 'count',
                    "value"   => array("1")
                ),
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
                "dependency"  =>array(
                    "element" => "count",
                    "value"   =>array('-1','2','3','4','5','6','7','8','9','10','11','12','13','14','16','17','18','19','20'),
                ),
                
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Slider Height", "my-text-domain" ),
                "param_name" => "height",
                "value"=> '730',
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
                "dependency"  =>array(
                    "element" => "count",
                    "value"   =>array('-1','2','3','4','5','6','7','8','9','10','11','12','13','14','16','17','18','19','20'),
                ),
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
                "dependency"  =>array(
                    "element" => "count",
                    "value"   =>array('-1','2','3','4','5','6','7','8','9','10','11','12','13','14','16','17','18','19','20'),
                ),
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
                "description" => __( "Enable Nav of slider?", "my-text-domain" ),
                "dependency"  =>array(
                    "element" => "count",
                    "value"   =>array('-1','2','3','4','5','6','7','8','9','10','11','12','13','14','16','17','18','19','20'),
                ),
            ),
        )
    )
);

?>