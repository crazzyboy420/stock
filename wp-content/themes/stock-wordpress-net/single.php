<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stock
 */

get_header();
$vc_cheack = get_post_meta( $post->ID, '_wpb_vc_js_status', true );
if($vc_cheack == true){
    $vc_class = '';
}else{
    $vc_class = 'enable_section_padding';
}
?>
  <div <?php if(has_post_thumbnail()):?>style="background-image:url(<?php echo esc_url(the_post_thumbnail_url('large'));?>)" id="breadcrump-overlay"<?php endif;?> class="stock-breadcrumb-area">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                     <?php the_title( '<h1 class="entry-title">', '</h1>' );?>
                    <?php if(function_exists('bcn_display') && get_post_type() != 'project'){bcn_display();}?>
               </div>
           </div>
       </div>
   </div>
    <div class="stock-internal-area <?php echo esc_html( $vc_class ); ?>">
	   <div class="container">
		   <div class="row">
		   <?php 
               if(get_post_type() == 'project' && is_active_sidebar('stock_project_sidebar')):?>
               <div class="col-lg-3">
                   <?php dynamic_sidebar("stock_project_sidebar");?>
               </div>
               <?php endif;?>
			   <div class="<?php if($vc_cheack == true):?>col-lg-12<?php endif;?><?php if(get_post_type() == 'project'):?><?php if(is_active_sidebar('stock_project_sidebar')):?>col-lg-9<?php else: ?><?php endif;?><?php else:?>col-lg-8<?php endif;?>">
                    <?php
					while ( have_posts() ) :
                        the_post();

                    get_template_part( 'template-parts/content', get_post_type() );
                    $display_post_nav = cs_get_option('display_post_nav');
                    if($display_post_nav != true){}else{
                        if(get_post_type() != 'project'){
                            the_post_navigation(
                                array(
                                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'stock-wordpress-net' ) . '</span> <span class="nav-title">%title</span>',
                                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'stock-wordpress-net' ) . '</span> <span class="nav-title">%title</span>',
                                )
                            );
                         }
                          
    
                    }
                   
                  // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                   ?>
			   </div>
			   <?php
               if(get_post_type() != 'project'){
                   get_sidebar(); 
               }
               ?> 
		   </div>
	   </div>
   </div>

<?php
get_footer();
