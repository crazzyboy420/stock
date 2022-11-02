<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stock
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if(has_post_thumbnail()): ?>
	<div class="stock-featuer-img">
		<a href="<?php the_permalink(); ?>">
		<?php if(get_post_type() !='project'):?>
		<?php the_post_thumbnail('stock_post_thumb'); ?>
		<?php endif;?>
	   </a>
	</div>
	<?php endif; ?>
	<header class="entry-header">
		<?php if(get_post_type() != 'project'):?>
	   <?php if ( is_singular()) : ?>
			<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>
     <?php endif;?>
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				stock_wordpress_net_posted_on();
				stock_wordpress_net_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if(is_single()){
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'stock-wordpress-net' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
		}else{
           the_excerpt();
		   echo'<a class="readmore-btn" href="'.get_permalink().'">'.esc_html__('Read More','stock-wordpress-net').'</a>';
		}
	

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stock-wordpress-net' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php stock_wordpress_net_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
