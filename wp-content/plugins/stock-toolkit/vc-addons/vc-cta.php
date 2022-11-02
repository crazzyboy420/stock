<?php
vc_map( 
    array(
        "name" => __( "Stock Call To Action", "my-text-domain" ),
        "base" => "stock_cta_area",
        "category" => __( "stock", "my-text-domain"),
        "params" => array(
            array(
            "type" => "textfield",
            "heading" => __( "Cta Title", "my-text-domain" ),
            "param_name" => "cta_title",
            "description" => __( "Type cta area title.", "my-text-domain" )
            ),
            array(
                "type" => "textarea",
                "heading" => __( "Cta Content", "my-text-domain" ),
                "param_name" => "desc",
                "description" => __( "Type Cta area content.", "my-text-domain" )
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Link Type", "my-text-domain" ),
                "param_name" => "link_type",
                "std" => __( 1, "my-text-domain" ),
                "value"=>array(
                    "Link to page" => 1,
                    "Extarnal link" => 2,
                ),
                
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Theme", "my-text-domain" ),
                "param_name" => "theme",
                "std" => __( 1, "my-text-domain" ),
                "value"=>array(
                    "Ganarel Theme" => 1,
                    "Color Theme" => 2,
                    "dark Theme" => 3,
                ),
                
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Link to page", "my-text-domain" ),
                "param_name" => "page_link",
                "value"    => stock_toolkit_get_as_page(),
                "dependency"   => array(
                    "element" => "link_type",
                    "value"   => "1"
                ),
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Extarnal Link", "my-text-domain" ),
                "param_name" => "extarnal_link",
                "description" => __( "Type a link", "my-text-domain" ),
                "dependency"   => array(
                    "element" => "link_type",
                    "value"   => "2"
                ),
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Link text", "my-text-domain" ),
                "param_name" => "link_text",
                "value" => "Start a project",
                
            ),
        )
    )
);

?>