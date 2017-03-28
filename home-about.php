<?php $theme_options = kadima_get_options(); ?>
<section class="services wrapper services_line" id="services_three" style="border-bottom: 1px solid #e2e2e2;">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <h1><?php echo esc_attr($theme_options['custom_title_1']); ?></h1>
                <p class="p2">
					<?php echo esc_attr($theme_options['custom_desciption_1']); ?>
				</p>
                <p>
					<img src="<?php echo esc_attr($theme_options['custom_img_1']); ?>">
				</p>
            </div>
        </div>
    </div>
</section>