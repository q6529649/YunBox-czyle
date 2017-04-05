<?php $theme_options = kadima_get_options(); ?>
<div class="footer1_bg">
    <div class="container">
        <div class="col-md-6 col-sm-12 text-left">
			<p>YALAIER CERAMICS FACTORY</p>		
			<ul class="social">
			<?php if($theme_options['fb_link']!='') { ?>
				<li title="Facebook"><a href="<?php echo esc_url($theme_options['fb_link']); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
			<?php } if($theme_options['twitter_link']!='') { ?>
				<li title="Twitter"><a href="<?php echo esc_url($theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
			<?php } if($theme_options['linkedin_link']!='') { ?>
				<li title="Linkedin"><a href="<?php echo esc_url($theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
			<?php } if($theme_options['youtube_link']!='') { ?>
				<li title="Youtube"><a href="<?php echo esc_url($theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
			<?php } if($theme_options['gplus']!='') { ?>
				<li title="gplus"><a href="<?php echo esc_url($theme_options['gplus']) ; ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
			<?php } if($theme_options['instagram']!='') { ?>
				<li title="instagram"><a href="<?php echo esc_url($theme_options['instagram']) ; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<?php } ?>
			</ul>
		</div>
        <div class="col-md-6 col-sm-12 text-right">
			<p>Power by: <a href="https://www.yunclever.com" target="_blank" style="color:#fff;">YunClever</a></p>
		</div>		
    </div>
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
<?php
	$language = get_client_language();
	if ($language != 'zh-cn') {
?>
	<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>
<?php
	}
?>
</body>
</html>
