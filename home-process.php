<?php $theme_options = kadima_get_options(); ?>
<section class="services wrapper services_line" id="services_three">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <h1><?php echo esc_attr($theme_options['custom_title_2']); ?></h1>
                <p class="p2">
					<?php echo esc_attr($theme_options['custom_desciption_2']); ?>
				</p>
                <p>
					<img src="<?php echo esc_url($theme_options['custom_img_2_1']); ?>">
				</p>
                <div style="text-align: center;">
                    <img src="<?php echo esc_url($theme_options['custom_img_2_2']); ?>">
                </div>
                <p class="p1"><a><?php echo esc_attr($theme_options['custom_title_2_1']); ?></a></p>
            </div>
        </div>
    </div>
</section>