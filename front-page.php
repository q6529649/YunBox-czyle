<?php
get_header();
$wl_theme_options = kadima_get_options();
$wl_theme_options['_frontpage'];
if ($wl_theme_options['_frontpage']=="1" && is_front_page())
{
	get_template_part('home','slideshow');
	get_template_part('home','about');
	get_template_part('home','process');
	get_template_part('home','product');
	get_template_part('home','contact');
	get_footer();
}
else
{
	if(is_page()){
		get_template_part('page');
	}else{
		get_template_part('index');
	}
}
?>
