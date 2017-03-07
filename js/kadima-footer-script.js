var $nav=jQuery('.prolist');
$nav.children('li').mouseenter(function(){
	jQuery(this).addClass("cur").siblings().removeClass("cur");
})
$nav.children('li').eq(0).mouseenter();
/* Scrolling Animations */
jQuery('.scrollimation').waypoint(function(){
	jQuery(this).addClass('in');
},{offset:'100%'});

jQuery(function() {
	jQuery('#allinone_carousel_charming').allinone_carousel({
		skin: 'charming',
		width: 990,
		height: 454,
		responsive:true,
		autoPlay: 3,
		resizeImages:true,
		autoHideBottomNav:false,
		showElementTitle:false,
		verticalAdjustment:50,
		showPreviewThumbs:false,
		//easing:'easeOutBounce',
		numberOfVisibleItems:5,
		nextPrevMarginTop:23,
		playMovieMarginTop:0,
		bottomNavMarginBottom:-10
	});
});
