@extends('template/index')

@section('Title')

<title>Testo da inserire</title>@stop

@section('MetaDescription')

<meta name="description" content="aaa"/>@stop

@section('MetaKeywords')

<meta name="keywords" content="aaa, aaa, aaa"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/home.css') }}" type="text/css"/>@stop

@section('content')

<div id="loader-overflow">
  <div id="loader3">Please enable JS</div>
</div>
<div id="wrap" class="boxed">
  <div class="grey-bg">@include('public/home/_partial1_greyie8')

@include('template/_partial_header')

@include('public/home/_partial2_slider')

@include('public/home/_partial3_about')

@include('public/home/_partial4_portfolio')

@include('public/home/_partial5_clients_testimonials')

@include('public/home/_partial6_workprocess')

@include('public/home/_partial7_team')

@include('public/home/_partial8_ads')

@include('public/home/_partial9_blog')

@include('template/_partial_newsletter')

@include('template/_partial_footer')


  </div>
</div>@stop

@section('jsPagina')

<script src="{{ asset('js/home.min.js')}}" type="text/javascript"></script>
<!-- JS begin-->
<!-- jQuery-->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed-->
<script src="js/bootstrap.min.js"></script>
<!-- MAGNIFIC POPUP-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- PORTFOLIO SCRIPTS-->
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<!-- COUNTER-->
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<!-- APPEAR-->
<script type="text/javascript" src="js/jquery.appear.js"></script>
<!-- OWL CAROUSEL-->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!-- MAIN SCRIPT-->
<script src="js/main.js"></script>
<!-- REVOSLIDER SCRIPTS-->
<!-- SLIDER REVOLUTION 4.x SCRIPTS-->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution-parallax.min.js"></script>
<!-- SLIDER REVOLUTION INIT-->
<script type="text/javascript">
  jQuery(document).ready(function () {
      if ((navigator.appVersion.indexOf("Win") != -1) && ( ieDetect == false )) {
          jQuery('#rs-fullscr').revolution(
                  {
                      dottedOverlay: "none",
                      delay: 16000,
                      startwidth: 1170,
                      startheight: 700,
                      hideThumbs: 200,
                      thumbWidth: 100,
                      thumbHeight: 50,
                      thumbAmount: 5,
                      //fullScreenAlignForce: "off",
                      navigationType: "none",
                      navigationArrows: "solo",
                      navigationStyle: "preview4",
                      hideTimerBar: "on",
                      touchenabled: "on",
                      onHoverStop: "on",
                      swipe_velocity: 0.7,
                      swipe_min_touches: 1,
                      swipe_max_touches: 1,
                      drag_block_vertical: false,
                      parallax: "scroll",
                      parallaxBgFreeze: "on",
                      parallaxLevels: [45, 40, 35, 50],
                      parallaxDisableOnMobile: "on",
                      keyboardNavigation: "off",
                      navigationHAlign: "center",
                      navigationVAlign: "bottom",
                      navigationHOffset: 0,
                      navigationVOffset: 20,
                      soloArrowLeftHalign: "left",
                      soloArrowLeftValign: "center",
                      soloArrowLeftHOffset: 20,
                      soloArrowLeftVOffset: 0,
                      soloArrowRightHalign: "right",
                      soloArrowRightValign: "center",
                      soloArrowRightHOffset: 20,
                      soloArrowRightVOffset: 0,
                      shadow: 0,
                      fullWidth: "off",
                      fullScreen: "on",
                      spinner: "spinner4",
                      stopLoop: "off",
                      stopAfterLoops: -1,
                      stopAtSlide: -1,
                      shuffle: "off",
                      autoHeight: "off",
                      forceFullWidth: "off",
                      hideThumbsOnMobile: "off",
                      hideNavDelayOnMobile: 1500,
                      hideBulletsOnMobile: "off",
                      hideArrowsOnMobile: "off",
                      hideThumbsUnderResolution: 0,
                      hideSliderAtLimit: 0,
                      hideCaptionAtLimit: 0,
                      hideAllCaptionAtLilmit: 0,
                      startWithSlide: 0,
                      //fullScreenOffsetContainer: ""
                  });
      } else {
          jQuery('#rs-fullscr').revolution(
                  {
                      dottedOverlay: "none",
                      delay: 16000,
                      startwidth: 1170,
                      startheight: 700,
                      hideThumbs: 200,
                      thumbWidth: 100,
                      thumbHeight: 50,
                      thumbAmount: 5,
                      navigationType: "none",
                      navigationArrows: "solo",
                      navigationStyle: "preview4",
                      hideTimerBar: "on",
                      touchenabled: "on",
                      onHoverStop: "on",
                      swipe_velocity: 0.7,
                      swipe_min_touches: 1,
                      swipe_max_touches: 1,
                      drag_block_vertical: false,
                      parallax: "mouse",
                      parallaxBgFreeze: "on",
                      parallaxLevels: [0],
                      parallaxDisableOnMobile: "on",
                      keyboardNavigation: "off",
                      navigationHAlign: "center",
                      navigationVAlign: "bottom",
                      navigationHOffset: 0,
                      navigationVOffset: 20,
                      soloArrowLeftHalign: "left",
                      soloArrowLeftValign: "center",
                      soloArrowLeftHOffset: 20,
                      soloArrowLeftVOffset: 0,
                      soloArrowRightHalign: "right",
                      soloArrowRightValign: "center",
                      soloArrowRightHOffset: 20,
                      soloArrowRightVOffset: 0,
                      shadow: 0,
                      fullWidth: "off",
                      fullScreen: "on",
                      spinner: "spinner4",
                      stopLoop: "off",
                      stopAfterLoops: -1,
                      stopAtSlide: -1,
                      shuffle: "off",
                      autoHeight: "off",
                      forceFullWidth: "off",
                      hideThumbsOnMobile: "off",
                      hideNavDelayOnMobile: 1500,
                      hideBulletsOnMobile: "off",
                      hideArrowsOnMobile: "off",
                      hideThumbsUnderResolution: 0,
                      hideSliderAtLimit: 0,
                      hideCaptionAtLimit: 0,
                      hideAllCaptionAtLilmit: 0,
                      startWithSlide: 0,
                  });
      }
  });	//ready
</script>
<!-- JS end-->@stop

