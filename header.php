<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<?php $wl_theme_options = kadima_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" />
	<?php } ?>
	<?php
		if (is_home()) {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		} elseif (isset($_COOKIE['yc_visit_cookie'])) {
			echo '';
		}
		else {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		}
	?>
	<?php wp_head(); ?>
	<script src="https://use.typekit.net/hrb5api.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script type="text/javascript">
	  var _paq = _paq || [];
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
		var u="//analytics.yunclever.com/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', '13']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>

</head>
<body <?php body_class(); ?>>

<header id="header" class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
				<div id="logo">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($wl_theme_options['upload_image_logo']){ ?>
						<img src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="padding-top: 0px;" />
					<?php } ?>
					</a>
                </div>
            </div>
            <div class="col-md-6">
				<nav>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav cl-effect-12',
							'menu_id' => 'nav',
							'walker' => new kadima_nav_walker(),
							)
						);
					?>
                </nav>
            </div>
			<div class="col-md-3">
				<?php get_search_form(); ?>
            </div>
        </div>
    </div>
</header>