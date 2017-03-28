<?php $theme_options = kadima_get_options(); ?>
<div class="slidebottom wrapper">
    <div class="left-side" style="width: 100%;">
        <ul>
			<?php for($i=1; $i<6; $i++ ) { ?>
            <li class="<?php echo choose.$i ?>" style="float: left;">
                <?php echo esc_attr($theme_options['custom_title_3_'.$i]); ?>
            </li>
			<?php } ?>
		</ul>
    </div>
	<div style="width: 900px;margin: auto;padding-left: 45px;padding-right: 45px;">
		<div class="border">
			<div id="line" class="one"></div>
		</div>
	</div>
	<div class="wrapper-slide" style="margin-top:14px;">
		<div class="right-side">
			<?php for($i=1; $i<6; $i++ ) { ?>
			<div id="<?php echo first.$i ?>">
				<?php if($theme_options['custom_img_3_'.$i] !='') { ?>
					<div style="width: 100%;text-align: center;">
						<a>
							<img src="<?php echo esc_attr($theme_options['custom_img_3_'.$i]); ?>">
						</a>
					</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
