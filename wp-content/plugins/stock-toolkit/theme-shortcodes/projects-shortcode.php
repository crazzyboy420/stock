<?php

function stock_projects_shortcode($atts, $content = NULL){
    extract(shortcode_atts( array(
        'theme'   => '1',
    ), $atts ) ); 
    $dynamic_number = rand(34349839,354354);
    $stock_projects_shortcode = '
     <script>
        jQuery(document).ready(function($){
            $(".stock-projects ul li").click(function(){
                $(".stock-projects ul li").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr("data-filter");
                $(".project-list'.$dynamic_number.'").isotope({
                    filter: selector,
                });
            });

        });
        jQuery(window).load(function(){
            jQuery(".project-list'.$dynamic_number.'").isotope();
        });
     </script>
       <div class="stock-projects theme-'.$theme.'">
           <div class="row">';
            if($theme == 1){
            $stock_projects_shortcode .='<div class="col-md-3">';
            $stock_project_width = 'col-md-9';
            $stock_project_inner_width = 'col-md-4';

            }else{
                $stock_projects_shortcode .='<div class="col-md-12">';
                $stock_project_width = 'col-md-12';
                $stock_project_inner_width = 'col-md-3';
            }

$stock_projects_shortcode .='
                    <ul>
                       <li class="active" data-filter="*">All Works</li>';
                       $project_category = get_terms( 'project_cat' );
                       if ( ! empty( $project_category ) && ! is_wp_error( $project_category ) ){
                           foreach ( $project_category as $category) {
    $stock_projects_shortcode .='<li data-filter=".'. $category->slug. '">' . $category->name . '</li>';
                           }
                        }
    $stock_projects_shortcode .= '        
                    </ul>
               </div>
               <div class="'.$stock_project_width.'">
                   <div class="row project-list'.$dynamic_number.'">';
                   $project_array = new WP_Query( array( 'post_type'=> 'project', 'posts_per_page' => -1) );
                   while( $project_array-> have_posts()): $project_array-> the_post();
                   $project_categroies = get_the_terms( get_the_ID(), 'project_cat' );
                   if(!empty($project_categroies) && ! is_wp_error($project_categroies)){
                       $project_categories_list = array();
                       foreach($project_categroies as $categories){
                        $project_categories_list[] = $categories->slug;
                       }
                       $categories_assigned_cat = join(" ", $project_categories_list);
                   }else{
                       $categories_assigned_cat = "";
                   }
                   $stock_projects_shortcode .= '  
                       <div class="'.$stock_project_inner_width.' '.$categories_assigned_cat.'">
                       <a href="'.get_permalink().'" class="single-work-box">
                           <div class="work-box-bg" style="background-image:url('.get_the_post_thumbnail_url(get_the_ID(),'large').');"><i class="fas fa-link"></i></div>
                           <p>'.get_the_title().'</p>
                       </a>
                       </div>';
                    endwhile;
                    wp_reset_query();
    $stock_projects_shortcode .= '  
                   </div>
               </div>
           </div>
       </div>
    ';
    return  $stock_projects_shortcode;


}
add_shortcode( 'stock_projects', 'stock_projects_shortcode' );