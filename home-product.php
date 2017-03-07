<?php $theme_options = kadima_get_options(); ?>
<section class="services wrapper services_line" id="sec_products">
	<div class="main1_bg">
		<div class="container1">
			<div class="main slider_text texxt-center">
				<h4><?php echo esc_attr($theme_options['port_heading']); ?></h4>
				<div class="container">
					<p>
						<?php echo esc_attr($theme_options['port_description']); ?>
					</p>
				</div>
			</div>
		</div>
		<div id="bannerBg">
			<div id="containingDiv">
				<div id="allinone_carousel_charming">
					<div class="myloader"></div>
					<ul class="allinone_carousel_list">
						<?php for($i=1 ; $i<=5; $i++) { ?>
							<?php if($theme_options['port_img_'.$i] !='') { ?>
								<li>
									<img src="<?php echo esc_url($theme_options['port_img_'.$i]); ?>" alt="" class="img-responsive"/>
								</li>
							<?php } ?>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>