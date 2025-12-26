jssor_1_slider_init = function() {

	var jssor_1_SlideshowTransitions = [
	  {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:1.3,$Top:2.5}},
	  {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
	  {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
	  {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
	  {$Duration:1800,x:1,y:0.2,$Delay:30,$Cols:10,$Rows:5,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Outside:true,$Round:{$Top:1.3}},
	  {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
	  {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
	  {$Duration:1000,y:-1,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12}},
	  {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
	  {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}
	];

	var jssor_1_options = {
	  $AutoPlay: 1,
	  $SlideshowOptions: {
		$Class: $JssorSlideshowRunner$,
		$Transitions: jssor_1_SlideshowTransitions,
		$TransitionsOrder: 1
	  },
	  $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$ },
	  $BulletNavigatorOptions: { $Class: $JssorBulletNavigator$ }
	};

	var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

	/*responsive code begin*/
	function ScaleSlider() {
		var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 1920);
			jssor_1_slider.$ScaleWidth(refSize);
		} else { window.setTimeout(ScaleSlider, 30); }
	}
	ScaleSlider();
	$Jssor$.$AddEvent(window, "load", ScaleSlider);
	$Jssor$.$AddEvent(window, "resize", ScaleSlider);
	$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
	/*responsive code end*/
};

$(function() {
	
	var owl_duan = $("#sl_duan");
	owl_duan.owlCarousel({
		items: 4,
		navigation: true,
		pagination : false,
		autoPlay : true,
		stopOnHover : true,
		slideSpeed : 200,
		navigationText: ["<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>", "<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>"],
		itemsCustom: [[0, 1],[450, 1],[600, 2],[700, 3],[1000, 5],[1200, 5],[1400, 5],[1600, 5]]
	});
	
	var owl_client = $("#owl-demo3");
  	owl_client.owlCarousel({
	  items: 9,
	  nav: false,
	  autoPlay : true,
	  stopOnHover : true,
	  slideSpeed : 200,
	  navigation: true,
	  navigationText: ["<img src='"+base_url+"/templates/images/icon-prev.jpg'>", "<img src='"+base_url+"/templates/images/icon-next.jpg'>"]
	 });
	
    $("#sl_blog_list li").hover(function() { $("#blog_main").html($(this).html());}); 

});
