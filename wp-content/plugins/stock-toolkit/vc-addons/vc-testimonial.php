<?php
vc_map( 
    array(
        "name" => __( "Stock Testimonial", "my-text-domain" ),
        "base" => "stock_testimonial",
        "category" => __( "stock", "my-text-domain"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => __( "Title", "my-text-domain" ),
                "param_name" => "title",   
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Position/Location", "my-text-domain" ),
                "param_name" => "position",   
            ),
            array(
                "type" => "textarea",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "testimonial",   
            ),
            array(
                "type" => "attach_image",
                "heading" => __( "Photo", "my-text-domain" ),
                "param_name" => "photo",   
            ),
        )
    )
);

?>