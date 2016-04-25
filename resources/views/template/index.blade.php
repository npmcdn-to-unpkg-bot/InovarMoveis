<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="google" content="notranslate">
    <meta name="author" content="Alessandro Traversi, Carolina Amorim Lourenço">
    <meta name="application-name" content="Atemporale Design">
    <!--Meta nameTemplate-->@yield('Title', '')
@yield('MetaDescription', '')
@yield('MetaKeywords', '')

    <!--Meta name og-->
    <!--Meta name verify-->
    <meta name="google-site-verification" content="">
    <!--Favicon.ico-->
    <link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/favicon/apple_touch_icon_57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/img/favicon/apple_touch_icon_60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/favicon/apple_touch_icon_72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/favicon/apple_touch_icon_76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple_touch_icon_114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/favicon/apple_touch_icon_120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/favicon/apple_touch_icon_144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/favicon/apple_touch_icon_152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/favicon/apple_touch_icon_180.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon_16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon_32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon_96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/android_chrome_192.png')}}" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="{{ asset('/img/favicon/smalltile.png') }}">
    <meta name="msapplication-square150x150logo" content="{{ asset('/img/favicon/mediumtile.png') }}">
    <meta name="msapplication-wide310x150logo" content="{{ asset('/img/favicon/widetile.png') }}">
    <meta name="msapplication-square310x310logo" content="{{ asset('/img/favicon/largetile.png') }}">
    <!--Fonts external link-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700">
    <!-- IE Warning CSS--><!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="css/ie-warning.css" >
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="css/ie8-fix.css" >
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--Page CSS-->@yield('cssPagina', '')

  </head>
  <body itemtype="" itemscope>
    <!-- dinamic content-->@yield('content', '')

    <script type="text/javascript" src="{{asset('bower/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/royalslider/jquery.royalslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/mfp/jquery.mfp-0.9.9.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/mediaelement/mediaelement-and-player.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/gmap/gmap3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/isotope/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/form/jquery.form.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/form/jquery.validate.min.js')}}"></script>
    <!--Librerie hyidrogen-->
    <script type="text/javascript" src="{{asset('js/hydrogen.setup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/hydrogen.scripts.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/hydrogen.plugins.js')}}"></script>
    <!--Script interni per pagina-->@yield('jsPagina', '')

  </body>
</html>