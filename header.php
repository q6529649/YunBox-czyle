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
</head>
<body <?php body_class(); ?>>

<header id="header" class="wrapper">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div id="logo">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($wl_theme_options['upload_image_logo']){ ?>
						<img src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="padding-top: 0px;" />
					<?php } ?>
					</a>
                </div>
                <nav>
                    <div id="menu_two" class="desktop">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class' => 'nav',
								'menu_id' => 'nav',
								'walker' => new kadima_nav_walker(),
								)
							);
						?>
					</div>
                    <div id="button_wrapper">
                        <div class="btn">
                            <form>
								<input type="text" placeholder="">
								<button type="submit">
									<img src="//czyle.site.yunclever.com/wp-content/themes/kadima/images/fdj.png">
								</button>
                            </form>
						</div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>