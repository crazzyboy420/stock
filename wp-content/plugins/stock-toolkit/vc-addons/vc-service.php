<?php
vc_map( 
    array(
        "name" => __( "Stock Service box", "my-text-domain" ),
        "base" => "stock_service_box",
        "category" => __( "stock", "my-text-domain"),
        "params" => array(
            array(
            "type" => "textfield",
            "heading" => __( "Service Title", "my-text-domain" ),
            "param_name" => "title",
            "description" => __( "Type Service title.", "my-text-domain" )
            ),
            array(
                "type" => "textarea",
                "heading" => __( "Service Content", "my-text-domain" ),
                "param_name" => "desc",
                "description" => __( "Type service content.", "my-text-domain" )
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
                "value" => "See more",
                
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Icon Type", "my-text-domain" ),
                "param_name" => "icon_type",
                "value"   => array(
                    "font Awasome" => 1,
                    "Upload Icon" => 2,
                )
            ),
            array(
                "type" => "iconpicker",
                "heading" => __( "Fontawesome", "my-text-domain" ),
                "param_name" => "font_awesome",
                "dependency" => array(
                    "element"  => "icon_type",
                    //Normal practice
                    "value"    => "1",
                )
            ),
            array(
                "type" => "attach_image",
                "heading" => __( "Upload Icon", "my-text-domain" ),
                "param_name" => "img_icon",
                "dependency" => array(
                    "element"  => "icon_type",
                    //best practice
                    "value"    => array("2"),
                )
            ),
            array(
                "type" => "attach_image",
                "heading" => __( "Box Background", "my-text-domain" ),
                "param_name" => "box_background",
            )
        )
    )
);

?>