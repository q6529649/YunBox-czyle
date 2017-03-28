<?php $wl_theme_options = kadima_get_options(); ?>


<style type="text/css">
       
        ul, li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .icon {
            position: relative;
            width: 32px;
            height: 32px;
            display: block;
            fill: rgba(51, 51, 51, 0.5);
            margin-right: 20px;
            -webkit-transition: all .2s ease-out;
            transition: all .2s ease-out;
        }

        .icon.active {
            fill: #E74C3C;
        }

        .icon.big {
            width: 64px;
            height: 64px;
            fill: rgba(51, 51, 51, 0.5);
        }

        #wrapper {
            width: 900px;
            height: 600px;
            position: relative;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: left;
            -webkit-justify-content: left;
            -ms-flex-pack: left;
            justify-content: left;
            overflow: hidden;
			margin-bottom: 80px;
        }

        #left-side {
            height: 70%;
            width: 25%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
			padding-top: 50px;
        }
        #left-side ul li {
            padding-top: 10px;
            padding-bottom: 10px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            line-height: 34px;
            color: rgba(51, 51, 51, 0.5);
            font-weight: 500;
            cursor: pointer;
            -webkit-transition: all .2s ease-out;
            transition: all .2s ease-out;
			padding-left: 30px;
			padding-right: 30px;
        }
        #left-side ul li:hover {
            color: #333333;
            -webkit-transition: all .2s ease-out;
            transition: all .2s ease-out;
        }
        #left-side ul li:hover > .icon {
            fill: #333;
        }
        #left-side ul li.active {
            color: #333333;
        }
        #left-side ul li.active:hover > .icon {
            fill: #E74C3C;
        }

        #border {
            height: 1px;
            width: 100%;
            
        }
        #border #line.one {
            width: 54px;
            height: 5px;
            background-color: #ff7f02;
            margin-left: -2px;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        #border #line.two {
            width: 54px;
            height: 5px;
            background-color: #ff7f02;
            margin-left: 167px;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        #border #line.three {
            width: 54px;
            height: 5px;
            background-color: #ff7f02;
            margin-left: 363px;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        #border #line.four {
            width: 54px;
            height: 5px;
            background-color: #ff7f02;
            margin-left: 544px;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
		#border #line.five {
            width: 54px;
            height: 5px;
            background-color: #ff7f02;
            margin-left: 734px;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        #right-side {
            height: 300px;
            width: 75%;
            overflow: hidden;
        }
        #right-side #first1, #right-side #first2, #right-side #first3, #right-side #first4, #right-side #first5  {
            position: absolute;
            height: 300px;
            width: 100%;
            -webkit-transition: all .6s ease-in-out;
            transition: all .6s ease-in-out;
            margin-top: -350px;
            opacity: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        #right-side #first1 h1, #right-side #first2 h1, #right-side #first3 h1, #right-side #first4 h1 ,#right-side #first5 h1 {
            font-weight: 800;
            color: #333;
        }
        #right-side #first1 p, #right-side #first2 p, #right-side #first3 p, #right-side #first4 p, #right-side #first5 p {
            color: #333;
            font-weight: 500;
            padding-left: 30px;
            padding-right: 30px;
        }
        #right-side #first1.active, #right-side #first2.active, #right-side #first3.active, #right-side #first4.active, #right-side #first5.active {
            margin-top: 0px;
            opacity: 1;
            -webkit-transition: all .6s ease-in-out;
            transition: all .6s ease-in-out;
        }
    </style>
<div class="container">


<body>


<!-- ICONS -->
    <div id="left-side" style="width: 100%;">
        <ul>
			<?php for($i=1; $i<6; $i++ ) { ?>
            <li class="<?php echo choose.$i ?>" style="float: left;">
                
                <?php echo esc_attr($wl_theme_options['custom_title_3_'.$i]); ?>
            </li>
			<?php } ?>
		</ul>
    </div>
	<div style="width: 900px;margin: auto;padding-left: 45px;padding-right: 45px;">
		<div id="border">
			<div id="line" class="one"></div>
		</div>
	</div>
<div id="wrapper" style="margin-top:14px;">
    <div id="right-side">
		<?php for($i=1; $i<6; $i++ ) { ?>
        <div id="<?php echo first.$i ?>">
            <?php if($wl_theme_options['custom_img_3_'.$i] !='') { ?>
				<div style="width: 100%;text-align: center;">
					<a>
						<img src="<?php echo esc_attr($wl_theme_options['custom_img_3_'.$i]); ?>">
					</a>
				</div>
			<?php } ?>
        </div>
		<?php } ?>
	</div>
</div>



<script>
	jQuery('#first1').addClass("active")
	jQuery('.choose1').addClass('active');
	jQuery('.choose1 > .icon').addClass('active');
    jQuery('.choose1').click(function () {
        jQuery('.choose1').addClass('active');
        jQuery('.choose1 > .icon').addClass('active');
        jQuery('.choose2').removeClass('active');
        jQuery('.choose3').removeClass('active');
        jQuery('.choose4').removeClass('active');
        jQuery('.choose2 > .icon').removeClass('active');
        jQuery('.choose3 > .icon').removeClass('active');
        jQuery('.choose4 > .icon').removeClass('active');
        jQuery('#line').addClass('one');
        jQuery('#line').removeClass('two');
        jQuery('#line').removeClass('three');
        jQuery('#line').removeClass('four');
		jQuery('#line').removeClass('five');
		jQuery('.choose5').removeClass('active');
        jQuery('.choose5 > .icon').removeClass('active');
    });
    jQuery('.choose2').click(function () {
        jQuery('.choose2').addClass('active');
        jQuery('.choose2 > .icon').addClass('active');
        jQuery('.choose1').removeClass('active');
        jQuery('.choose3').removeClass('active');
        jQuery('.choose4').removeClass('active');
        jQuery('.choose1 > .icon').removeClass('active');
        jQuery('.choose3 > .icon').removeClass('active');
        jQuery('.choose4 > .icon').removeClass('active');
        jQuery('#line').addClass('two');
        jQuery('#line').removeClass('one');
        jQuery('#line').removeClass('three');
        jQuery('#line').removeClass('four');
		jQuery('#line').removeClass('five');
		jQuery('.choose5').removeClass('active');
        jQuery('.choose5 > .icon').removeClass('active');
    });
    jQuery('.choose3').click(function () {
        jQuery('.choose3').addClass('active');
        jQuery('.choose3 > .icon').addClass('active');
        jQuery('.choose2').removeClass('active');
        jQuery('.choose1').removeClass('active');
        jQuery('.choose4').removeClass('active');
		jQuery('.choose5').removeClass('active');
        jQuery('.choose2 > .icon').removeClass('active');
        jQuery('.choose1 > .icon').removeClass('active');
        jQuery('.choose4 > .icon').removeClass('active');
		jQuery('.choose5 > .icon').removeClass('active');
        jQuery('#line').addClass('three');
        jQuery('#line').removeClass('two');
        jQuery('#line').removeClass('one');
        jQuery('#line').removeClass('four');
		jQuery('#line').removeClass('five');
		jQuery('.choose5').removeClass('active');
        jQuery('.choose5 > .icon').removeClass('active');
    });
    jQuery('.choose4').click(function () {
        jQuery('.choose4').addClass('active');
        jQuery('.choose4 > .icon').addClass('active');
		jQuery('.choose5').removeClass('active');
        jQuery('.choose5 > .icon').removeClass('active');
        jQuery('.choose2').removeClass('active');
        jQuery('.choose3').removeClass('active');
        jQuery('.choose1').removeClass('active');
        jQuery('.choose2 > .icon').removeClass('active');
        jQuery('.choose3 > .icon').removeClass('active');
        jQuery('.choose1 > .icon').removeClass('active');
        jQuery('#line').addClass('four');
        jQuery('#line').removeClass('two');
        jQuery('#line').removeClass('three');
        jQuery('#line').removeClass('one');
		jQuery('#line').removeClass('five');
		
    });
	jQuery('.choose5').click(function () {
        jQuery('.choose5').addClass('active');
        jQuery('.choose5 > .icon').addClass('active');
        jQuery('.choose2').removeClass('active');
        jQuery('.choose3').removeClass('active');
        jQuery('.choose1').removeClass('active');
		jQuery('.choose4').removeClass('active');
        jQuery('.choose2 > .icon').removeClass('active');
        jQuery('.choose3 > .icon').removeClass('active');
        jQuery('.choose1 > .icon').removeClass('active');
		jQuery('.choose4 > .icon').removeClass('active');
        jQuery('#line').addClass('five');
        jQuery('#line').removeClass('two');
        jQuery('#line').removeClass('three');
        jQuery('#line').removeClass('one');
		jQuery('#line').removeClass('four');
		
		
    });
	
    jQuery('.choose1').click(function () {
        jQuery('#first1').addClass('active');
        jQuery('#first2').removeClass('active');
        jQuery('#first3').removeClass('active');
        jQuery('#first4').removeClass('active');
		jQuery('#first5').removeClass('active');
    });
    jQuery('.choose2').click(function () {
        jQuery('#first1').removeClass('active');
        jQuery('#first2').addClass('active');
        jQuery('#first3').removeClass('active');
        jQuery('#first4').removeClass('active');
		jQuery('#first5').removeClass('active');
    });
    jQuery('.choose3').click(function () {
        jQuery('#first1').removeClass('active');
        jQuery('#first2').removeClass('active');
        jQuery('#first3').addClass('active');
        jQuery('#first4').removeClass('active');
		jQuery('#first5').removeClass('active');
    });
    jQuery('.choose4').click(function () {
        jQuery('#first1').removeClass('active');
        jQuery('#first2').removeClass('active');
        jQuery('#first3').removeClass('active');
        jQuery('#first4').addClass('active');
		jQuery('#first5').removeClass('active');
    });
	jQuery('.choose5').click(function () {
        jQuery('#first1').removeClass('active');
        jQuery('#first2').removeClass('active');
        jQuery('#first3').removeClass('active');
		jQuery('#first4').removeClass('active');
        jQuery('#first5').addClass('active');
    });
</script>
</div>


