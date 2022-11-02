<?php
vc_map( 
    array(
        "name" => __( "Stock Tile Gallery", "my-text-domain" ),
        "base" => "stock_tile_gallery",
        "category" => __( "stock", "my-text-domain"),
        "params" => array(
            array(
                "type" => "attach_images",
                "heading" => __( "Upload Images", "my-text-domain" ),
                "param_name" => "images",   
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Height", "my-text-domain" ),
                "param_name" => "height", 
                "value"     => "310",
                "description" => "type height in number. in px"  
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Size", "my-text-domain" ),
                "param_name" => "size", 
                "std"     => "large",
                "value"   => array(
                    "thumbnail"   => "thumbnail",
                    "medium"   => "medium",
                    "large"   => "large",
                    "full"   => "full",
                ),
            ),
        )
    )
);

?>