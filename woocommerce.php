<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-top:50px;">
			<?php 
			if( is_shop() ){
				echo do_shortcode('[ajax_load_more id="productlist" container_type="div" css_classes="col-md-12" post_type="product" posts_per_page="6" images_loaded="true"]');
			} else {
				woocommerce_content();
			}
			?>
		</div>	
	</div>
</div>	
<?php get_footer(); ?>