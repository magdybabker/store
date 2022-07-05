<?php $shortname = "large_grid_commerce"; ?>
<footer id="footer">
	<div class="footer_widgets_cont">
		<div class="container">
			<div class="footer_widget_col">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1') ) : ?>
				<?php endif; ?>
			</div> <!-- //footer_widget_col -->
			<div class="footer_widget_col">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2') ) : ?>
				<?php endif; ?>
			</div> <!-- //footer_widget_col -->
			<div class="footer_widget_col">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 3') ) : ?>
				<?php endif; ?>
			</div> <!-- //footer_widget_col -->
			<div class="footer_widget_col footer_widget_col_last">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 4') ) : ?>
				<?php endif; ?>
			</div> <!-- //footer_widget_col -->		
			<div class="clear"></div>
			<div class="footer_copyright">
				© 2020 All Rights Reserved. Powered by <a href="https://dessign.net/woocommerce-online-store-wordpress-tutorial/">WooCommerce</a>
			</div> <!-- //footer_copyright -->
		</div> <!-- //container -->
	</div> <!-- //footer_widgets_cont -->
	
</footer><!--//footer-->
<?php wp_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
</body>
</html>