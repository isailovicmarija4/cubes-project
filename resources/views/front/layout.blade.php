<!doctype html>
 <html class="no-js" lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>DERMA CLINIC | @yield('head_title') </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{url('/skins/front/css/bootstrap.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,600italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic,300italic' rel='stylesheet' type='text/css'>
        <link href="{{url('/skins/front/css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/owl.theme.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/image-switcher.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="{{url('/skins/front/css/main.css')}}">
        <link href="{{url('/skins/front/css/responsive.css')}}" rel="stylesheet" type="text/css"/>

        <script src="{{url('/skins/front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body>

        <!-- HEADER -->
        <header>
            
    
            
            <!-- NAVIGATION -->
            	@include('front.navigation')
        </header>
                @yield('content')

        <!-- FOOTER -->
        @include('front.footer')


        <!-- Modal -->
        
        <!-- Modal end-->

















        <script src="{{url('/skins/front/js/jquery-3.0.0.min.js')}}" type="text/javascript"></script>
        
        <script src="{{url('/skins/front/js/vendor/bootstrap.min.js')}}"></script>
        @stack('footer_javascript')
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="{{url('/skins/front/js/validator.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/main.js')}}"></script>


       
    </body>
</html>
