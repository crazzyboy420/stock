<?php
vc_map( 
    array(
        "name" => __( "Work Project", "my-text-domain" ),
        "base" => "stock_projects",
        "category" => __( "stock", "my-text-domain"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => __( "Theme", "my-text-domain" ),
                "param_name" => "theme",
                "std" => __( 1, "my-text-domain" ),
                "value"=>array(
                    "Theme 1" => 1,
                    "Theme 2" => 2,
                ),
                
            ),
        )
    )
);

?>