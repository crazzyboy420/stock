<?php

if(!defined('ABSPATH')){
    die('-1');

}

//Class Start
class stockVCExtendAddonClass{
    function __construct(){
        //we safely integrate with vc wth this hook
        add_action( 'init',array($this, 'stockIntegrateWithVC') );
        return;
    }
    public function stockIntegrateWithVC(){
        //Cheacks if Visual composer is not installed
        if(!defined('WPB_VC_VERSION')){
            add_action( 'admin_notices', array($this, 'stockShowVcVersionNotice') );
            return;
        }

        //Visual composer Addons
        include STOCK_ACC_PATH . '/vc-addons/vc-slides.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-logo-carousel.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-service.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-cta.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-btn.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-stat.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-testimonial.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-tile-gallery.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-video.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-promo-box.php';
        include STOCK_ACC_PATH . '/vc-addons/vc-project.php';

        //Vc default Template
        include STOCK_ACC_PATH . '/vc-addons/vc-default-template.php';
    }
    //Public Show visual composer version

    public function stockShowVcVersionNotice(){
        $theme_data = wp_get_theme();
        echo'
        <div class="notice notice-warning">
        <p>'.sprintf(__('<strong>%s</strong>recommends<strong><a href="'.site_url().'/wp-admin/themes.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong>plugin to be installed and activated on your site.',
        'stock'), $theme_data->get('Name')).'</p>
        </div';
    }
}
//Finally initialize code

new stockVCExtendAddonClass();



?>