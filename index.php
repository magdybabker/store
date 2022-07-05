<?php get_header(); ?>	
<?php $shortname = "large_grid_commerce"; ?>
<div id="home_cont">
	
	<div id="stalac_cont">
	
		<?php
		//$category_ID = get_category_id('blog');
		$args = array(
			 'post_type' => 'product',
			 'posts_per_page' => 99,
			 'meta_key' => 'ex_show_in_homepage'
			 //'post__not_in' => $slider_arr,
			 //'cat' => '-' . $category_ID
			 );
		query_posts($args);
		while (have_posts()) : the_post(); ?>	
		
			<div class="item stalac_box">
				<span class="stalac_box_img">
					<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>" frameborder="0" allowfullscreen></iframe>
					<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
						<iframe src="https://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=3399ff" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php } else { ?>
						<?php //the_post_thumbnail('stalac-image'); ?>
						<?php the_post_thumbnail('large'); ?>
						<!--<a class="stalac_box_hover" href="<?php the_permalink(); ?>">-->
						<div class="stalac_box_hover">
							<span class="stalac_box_hover_inside_tbl">
								<span class="stalac_box_hover_inside_row">
									<span class="stalac_box_hover_inside_cell">
										<!--<h3><?php the_title(); ?></h3>-->
										<!--<p><?php //echo ds_get_excerpt('160'); ?></p>-->
										<?php woocommerce_get_template_part( 'content', 'product-home-inside' ); ?>
									</span> <!-- //stalac_box_hover_inside_cell -->
								</span> <!-- //stalac_box_hover_inside_row -->
							</span> <!-- //stalac_box_hover_tbl -->
						</div> <!-- //stalac_box_hover -->
					<?php } ?>												
				</span> <!-- //stalac_box_img -->
				
						
						
						
			
				
				
				
			</div> <!-- //stalac_box -->
		
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>                                    				
	
	</div><!--//stalac_cont-->
	
</div><!--//home_cont-->
<?php get_footer(); ?> 		