<?php
vc_map( 
    array(
        "name" => __( "Stock Button", "my-text-domain" ),
        "base" => "stock_btn",
        "category" => __( "stock", "my-text-domain"),
        "params" => array(
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
                "value" => "Read more about us",
                
            ),
        )
    )
);

?>