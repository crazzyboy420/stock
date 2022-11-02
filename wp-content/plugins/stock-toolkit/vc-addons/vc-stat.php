<?php
vc_map( 
    array(
        "name" => __( "Stock Stat", "my-text-domain" ),
        "base" => "stock_stat",
        "category" => __( "stock", "my-text-domain"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => __( "Number", "my-text-domain" ),
                "param_name" => "number",
            ),
            array(
                "type" => "textfield",
                "heading" => __( "After text", "my-text-domain" ),
                "param_name" => "after_text",
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "desc",
            ),
        )
    )
);

?>