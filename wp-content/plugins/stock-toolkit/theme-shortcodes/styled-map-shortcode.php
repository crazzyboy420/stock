
  <?php

function stock_map_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'title'         => '',
    ), $atts ) );    
   
    $stock_map_shortcode = '
    

    <div style="width=100%;height=500px;background=#ddd" class="map"></div>
    <script>
    jQuery(document).ready(function($){
        $(".map")
        .gmap3({
          center:[41.850033, -87.650052],
          zoom:12,
          mapTypeId: "shadeOfGrey", // to select it directly
          mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, "shadeOfGrey"]
          }
        })
        .styledmaptype(
          "shadeOfGrey",
          [
            {"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#a8a8a8"}]},
            {"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#a8a8a8"}]},
            {"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
            {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#f7f7f7"},{"lightness":20}]},
            {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#f7f7f7"},{"lightness":17},{"weight":1.2}]},
            {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f7f7f7"},{"lightness":20}]},
            {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f7f7f7"},{"lightness":21}]},
            {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},
            {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},
            {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
            {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},
            {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f7f7f7"},{"lightness":19}]},
            {"featureType":"water","elementType":"geometry","stylers":[{"color":"#e5e5e5"},{"lightness":17}]}
          ],
          {name: "Shades of Grey"}
        );
    });
      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVVAxoo9kTlCViNRsGzvfDpan5yIpRlgU&callback=initMap"></script>
    ';
    return  $stock_map_shortcode;


}
add_shortcode( 'stock_map', 'stock_map_shortcode' );