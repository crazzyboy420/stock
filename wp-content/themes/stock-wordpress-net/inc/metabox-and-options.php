<?php if (!defined('ABSPATH')) {
    die();
}

//Shortconde remove
function stock_wordpress_net_shortcode(){
    //$options = array(); //remove old option
}
add_filter( 'cs_shortcode_options', 'stock_wordpress_net_shortcode' );
//Customize remove
function stock_wordpress_net_customize(){
    $options = array(); //remove old option
}
add_filter( 'cs_customize_options', 'stock_wordpress_net_customize');
function stock_theme_metabox($options)
{
    $options = array(); //remove old option

    // -----------------------------------------
    // Page Metabox Options                    -
    // -----------------------------------------
    $options[] = array(
        'id' => 'stock_page_options',
        'title' => 'First Section',
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'high',
        'sections' => array(
            array(
                'name' => 'stock_page_options_meta',
                'fields' => array(
                    array(
                        'id' => 'enable_title',
                        'type' => 'switcher',
                        'default' => true,
                        'title' => esc_html__('Enable page title?','stock-wordpress-net'),
                        'desc' => esc_html__(
                            'If you want to enable title. select yes',
                            'stock-wordpress-net'
                        )
                    ),
                    array(
                        'id' => 'custom_title',
                        'type' => 'text',
                        'title' => esc_html__('Custom page title?','stock-wordpress-net'),
                        'dependency' => array('enable_title', '==', 'true'),
                        'desc' => esc_html__('Type page title','stock-wordpress-net')
                    )
                )
            )
        )
    );
    // -----------------------------------------
    // Page Metabox Options                    -
    // -----------------------------------------
    $options[] = array(
        'id' => 'stock_slide_options',
        'title' => esc_html__('Slide Option','stock-wordpress-net'),
        'post_type' => 'slide',
        'context' => 'normal',
        'priority' => 'high',
        'sections' => array(
            array(
                'name' => 'stock_slide_options_meta',
                'icon' => 'fa fa-cog',
                'fields' => array(
                    array(
                        'id' => 'buttons',
                        'type' => 'group',
                        'title' => esc_html__('Slide buttons','stock-wordpress-net'),
                        'button_title' => esc_html__('Add New','stock-wordpress-net'),
                        'accordion_title' => 'Add New button',
                        'fields' => array(
                            array(
                                'id' => 'type',
                                'type' => 'select',
                                'title' => esc_html__('Button type','stock-wordpress-net'),
                                'options' => array(
                                    'bordered' => 'Bordered Button',
                                    'filled' => 'Filled Button'
                                )
                            ),
                            array(
                                'id' => 'link_text',
                                'type' => 'text',
                                'title' => esc_html__('Button text','stock-wordpress-net'),
                                'default' => 'Get free consultation'
                            ),
                            array(
                                'id' => 'link_type',
                                'type' => 'select',
                                'title' => esc_html__('Link type','stock-wordpress-net'),
                                'options' => array(
                                    '1' => 'Wordpress Page',
                                    '2' => 'External Link'
                                )
                            ),
                            array(
                                'id' => 'wordpress_link',
                                'type' => 'select',
                                'title' => esc_html__('Wodpress Link','stock-wordpress-net'),
                                'options' => 'page',
                                'dependency' => array('link_type', '==', '1')
                            ),
                            array(
                                'id' => 'external_link',
                                'type' => 'text',
                                'title' => esc_html__('Type URL','stock-wordpress-net'),
                                'dependency' => array('link_type', '==', '2')
                            )
                        ) 
                    ),
                    array(
                        'id' => 'enable_overlay',
                        'type' => 'switcher',
                        'default' => true,
                        'title' => esc_html__('Enable Overlay?','stock-wordpress-net'),
                    ),
                    array(
                        'id' => 'overlay_percentange',
                        'type' => 'text',
                        'default' => '0.7',
                        'title' => esc_html__('Overlay percentange','stock-wordpress-net'),
                        'desc' => esc_html__('Type overlay percentange in fluting number.max value 1.','stock-wordpress-net'),
                        'dependency' => array('enable_overlay', '==', 'true')
                    ),
                    array(
                        'id' => 'overlay_color',
                        'type' => 'color_picker',
                        'default' => esc_attr__('#181a1f','stock-wordpress-net'),
                        'title' => esc_html__('Overlay color','stock-wordpress-net'),
                        'desc' => esc_html__('Select overlay color','stock-wordpress-net'),
                        'dependency' => array('enable_overlay', '==', 'true')
                    )
                )
            )
        )
    );
    return $options;
}
add_action('cs_metabox_options', 'stock_theme_metabox');

//Framework Setting
function stock_theme_setting($settings)
{
    $settings = array(); //Remove Old settings
    $settings = array(
        'menu_title' => esc_html__('Theme Options','stock-wordpress-net'),
        'menu_type' => 'theme', // menu, submenu, options, theme, etc.
        'menu_slug' => 'theme_options',
        'ajax_save' => true,
        'show_reset_all' => true,
        'framework_title' => esc_html__('Stock wordpress --by Rasel Ahmed','stock-wordpress-net'),
    );
    return $settings;
}
add_filter('cs_framework_settings', 'stock_theme_setting');

function stock_theme_framework($options)
{
    $options = array(); //Remove Old options

    $options[] = array(
        'name' => 'header_setting',
        'title' => esc_html__('Top Header Setting','stock-wordpress-net'),
        'icon' => 'fa fa-home',

        // begin: fields
        'fields' => array(
            array(
                'id' => 'stock_header_icon_box',
                'type' => 'group',
                'title' => esc_html__('Icon Box','stock-wordpress-net'),
                'desc' => esc_html__('If you want to show iconic box on head. Add those here.','stock-wordpress-net'),
                'button_title' => esc_html__('Add New','stock-wordpress-net'),
                'accordion_title' => 'Add New Field',
                'fields' => array(
                    array(
                        'id' => 'icon',
                        'type' => 'icon',
                        'title' => esc_html__('Box icon','stock-wordpress-net'),
                    ),
                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title','stock-wordpress-net'),
                    ),
                    array(
                        'id' => 'big_title',
                        'type' => 'text',
                        'title' => esc_html__('Big Title','stock-wordpress-net'),
                    ),
                    array(
                        'id' => 'link',
                        'type' => 'text',
                        'title' => esc_html__('Box link','stock-wordpress-net'),
                        'desc' => esc_html__('Leave blank If you do not want a link','stock-wordpress-net'),
                    )
                )
            )
        ) // end: fields
    );

    //Social Icon
    $options[] = array(
        'name' => 'social_link',
        'title' => esc_html__('Social Link','stock-wordpress-net'),
        'icon' => 'fa fa-fonticons',

        // begin: fields
        'fields' => array(
            array(
                'id' => 'social_link',
                'type' => 'group',
                'title' => esc_html__('Social Link','stock-wordpress-net'),
                'button_title' => esc_html__('Add New','stock-wordpress-net'),
                'accordion_title' => 'Add New Link',
                'fields' => array(
                    array(
                        'id' => 'icon',
                        'type' => 'icon',
                        'title' => esc_html__('Social icon','stock-wordpress-net'),
                    ),
                    array(
                        'id' => 'link',
                        'type' => 'text',
                        'title' => esc_html__('Link','stock-wordpress-net'),
                    )
                )
            )
        ) // end: fields
    );

    $options[] = array(
        'name' => 'stock_header_logo',
        'title' => esc_html__('Header Logo','stock-wordpress-net'),
        'icon' => 'fa fa-camera',

        // begin: fields
        'fields' => array(
            // begin: a field
            array(
                'id' => 'enable_image_logo',
                'type' => 'switcher',
                'default' => false,
                'title' => esc_html__('Enable Image Logo?','stock-wordpress-net'),
            ),
            array(
                'id' => 'image_logo',
                'type' => 'image',
                'title' => esc_html__('Upload Image','stock-wordpress-net'),
                'dependency' => array('enable_image_logo', '==', 'true')
            ),
            array(
                'id' => 'logo_text',
                'type' => 'text',
                'title' => esc_html__('Logo Text','stock-wordpress-net'),
                'default' => esc_html__('Stock.','stock-wordpress-net'),
                'dependency' => array('enable_image_logo', '==', 'false')
            ),
            array(
                'id' => 'image_max_height',
                'type' => 'text',
                'title' => esc_html__('Image max height','stock-wordpress-net'),
                'default' => esc_html__('100','stock-wordpress-net'),
                'desc' => esc_html__('Type image logo maximum height in px','stock-wordpress-net'),
                'dependency' => array('enable_image_logo', '==', 'true')
            )
            // end: a field
        ) // end: fields
    );

    //Typography
    $options[] = array(
        'name' => 'stock_typography_settings',
        'title' => esc_html__('Typography Settings','stock-wordpress-net'),
        'icon' => 'fa fa-font',
        'fields' => array(
            array(
                'id' => 'body_font',
                'type' => 'typography',
                'title' => esc_html__('Body Font','stock-wordpress-net'),
                'default' => array(
                    'family' => 'Roboto',
                    'font' => 'google', // this is helper for output ( google, websafe, custom )
                    'variant' => 'regular'
                )
            ),
            array(
                'id' => 'body_font_variant',
                'type' => 'checkbox',
                'title' => esc_html__('Body font size','stock-wordpress-net'),
                'options' => array(
                    '100' => '100',
                    '100i' => '100i',
                    '200' => '200',
                    '200i' => '200i',
                    '300' => '300',
                    '300i' => '300i',
                    '400' => '400',
                    '400i' => '400i',
                    '500' => '500',
                    '500i' => '500i',
                    '600' => '600',
                    '600i' => '600i',
                    '700' => '700',
                    '700i' => '700i',
                    '900' => '900',
                    '900i' => '900i'
                ),
                'default' => array('400', '400i', '700', '700i')
            ),
            array(
                'id' => 'heading_font',
                'type' => 'typography',
                'title' => esc_html__('Heading Font','stock-wordpress-net'),
                'default' => array(
                    'family' => 'Noto Serif',
                    'font' => 'google',
                    'variant' => '700'
                ),
                'chosen' => false
            ),
            array(
                'id' => 'heading_font_variant',
                'type' => 'checkbox',
                'title' => esc_html__('Heading font size','stock-wordpress-net'),
                'options' => array(
                    '100' => '100',
                    '100i' => '100i',
                    '200' => '200',
                    '200i' => '200i',
                    '300' => '300',
                    '300i' => '300i',
                    '400' => '400',
                    '400i' => '400i',
                    '500' => '500',
                    '500i' => '500i',
                    '600' => '600',
                    '600i' => '600i',
                    '700' => '700',
                    '700i' => '700i',
                    '900' => '900',
                    '900i' => '900i'
                ),
                'default' => array('400', '400i', '700', '700i')
            )
        ) // end: fields
    );

    //Style
    $options[] = array(
        'name' => 'stock_style_settings',
        'title' => esc_html__('Style Settings','stock-wordpress-net'),
        'icon' => 'fa fa-magic',
        'fields' => array(
            array(
                'id' => 'enable_preloader',
                'type' => 'switcher',
                'title' => esc_html__('Enable Preloader','stock-wordpress-net'),
                'default' => true
            ),
            array(
                'id' => 'theme_color',
                'type' => 'color_picker',
                'title' => esc_html__('Theme Color','stock-wordpress-net'),
                'default' => esc_attr__('#1e8bc3','stock-wordpress-net'),
            ),
            array(
                'id' => 'theme_secondary_color',
                'type' => 'color_picker',
                'title' => esc_html__('Theme Secondary Color','stock-wordpress-net'),
                'default' => esc_attr__('#fff334','stock-wordpress-net'),
            ),
            array(
                'id' => 'enable_box_layout',
                'type' => 'switcher',
                'title' => esc_html__('Enable Box layout?','stock-wordpress-net'),
                'default' => false
            ),
            array(
                'id' => 'body_bg',
                'type' => 'image',
                'title' => esc_html__('Upload Body Background image','stock-wordpress-net'),
                'dependency' => array('enable_box_layout', '==', 'true')
            ),
            array(
                'id' => 'body_bg_color',
                'type' => 'color_picker',
                'title' => esc_html__('Body background color','stock-wordpress-net'),
                'dependency' => array('enable_box_layout', '==', 'true')
            ),
            array(
                'id' => 'body_bg_repeat',
                'type' => 'select',
                'title' => esc_html__('Repeat','stock-wordpress-net'),
                'default' => esc_attr__('repeat','stock-wordpress-net'),
                'options' => array(
                    'repeat' => 'Repeat',
                    'no-repeat' => 'No Repeat',
                    'cover' => 'Cover'
                ),
                'dependency' => array('enable_box_layout', '==', 'true')
            ),
            array(
                'id' => 'body_bg_attachment',
                'type' => 'select',
                'title' => esc_html__('Background Attachment','stock-wordpress-net'),
                'default' => esc_attr__('scroll','stock-wordpress-net'),
                'options' => array(
                    'scroll' => 'Scroll',
                    'fixed' => 'Fixed'
                ),
                'dependency' => array('enable_box_layout', '==', 'true')
            )
        ) // end: fields
    );

    //Blog Setting
    $options[] = array(
        'name' => 'stock_Blog_settings',
        'title' => esc_html__('Blog Settings','stock-wordpress-net'),
        'icon' => 'fa fa-pencil-square',
        'fields' => array(
            array(
                'id' => 'display_post_by',
                'type' => 'switcher',
                'title' => esc_html__('Display Post By','stock-wordpress-net'),
                'default' => true
            ),
            array(
                'id' => 'display_post_date',
                'type' => 'switcher',
                'title' => esc_html__('Display post date?','stock-wordpress-net'),
                'default' => true
            ),
            array(
                'id' => 'display_post_count',
                'type' => 'switcher',
                'title' => esc_html__('Display post comment count?','stock-wordpress-net'),
                'default' => true
            ),
            array(
                'id' => 'display_post_categories',
                'type' => 'switcher',
                'title' => esc_html__('Display posted in Categoris?','stock-wordpress-net'),
                'default' => true
            ),
            array(
                'id' => 'display_post_tags',
                'type' => 'switcher',
                'title' => esc_html__('Display posted in tags?','stock-wordpress-net'),
                'default' => true
            ),
            array(
                'id' => 'display_post_nav',
                'type' => 'switcher',
                'title' => esc_html__('Enable next previous link on single post?','stock-wordpress-net'),
                'default' => true
            )
        ) // end: fields
    );

    //Footer Setting
    $options[] = array(
        'name' => 'stock_footer_settings',
        'title' => esc_html__('Footer Settings','stock-wordpress-net'),
        'icon' => 'fa fa-pencil',
        'fields' => array(
            array(
                'id' => 'footer_bg',
                'type' => 'color_picker',
                'title' => esc_html__('Footer Background','stock-wordpress-net'),
                'default' => esc_attr__('#2a2d2f','stock-wordpress-net'),
            ),
            array(
                'id' => 'footer_text_color',
                'type' => 'color_picker',
                'title' => esc_html__('Footer Text Color','stock-wordpress-net'),
                'default' => esc_attr__('#afb9c0','stock-wordpress-net'),
            ),
            array(
                'id' => 'footer_heading_color',
                'type' => 'color_picker',
                'title' => esc_html__('Footer Heading Color','stock-wordpress-net'),
                'default' => esc_attr__('#ffff','stock-wordpress-net'),
            ),
            array(
                'id' => 'copyright_text',
                'type' => 'textarea',
                'title' => esc_html__('Copytight Text','stock-wordpress-net'),
                'default' => esc_html__('Copyright &copy 2017 FairDealLab - All Rights Reserved','stock-wordpress-net'),
            )
        ) // end: fields
    );

    //Scripts
    $options[] = array(
        'name' => 'stock_scripts_settings',
        'title' => esc_html__('scripts Settings','stock-wordpress-net'),
        'icon' => 'fa fa-code',
        'fields' => array(
            array(
                'id' => 'header_scripts',
                'type' => 'textarea',
                'title' => esc_html__('Head Scripts','stock-wordpress-net'),
                'sanitize' => false,
                'desc' => esc_html__('Scripts goes before closing < / head >','stock-wordpress-net'),
            ),
            array(
                'id' => 'custom_style',
                'type' => 'textarea',
                'title' => esc_html__('Custom Style','stock-wordpress-net'),
                'sanitize' => false,
                'desc' => esc_html__('style goes just after <  body > starts','stock-wordpress-net'),
            ),
            array(
                'id' => 'body_end_scripts',
                'type' => 'text',
                'title' => esc_html__('Footer Scripts','stock-wordpress-net'),
                'sanitize' => false,
                'desc' => esc_html__('Scripts goes just before <  body >','stock-wordpress-net'),
            )
        ) // end: fields
    );
    return $options;
}
add_action('cs_framework_options', 'stock_theme_framework');
