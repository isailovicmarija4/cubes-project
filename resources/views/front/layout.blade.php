<!doctype html>
 <html class="no-js" lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{trans('front.main_title')}} | </title>
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
            <div class="container">
                <section class="headerTop clearfix">
                    <ul class="language text-center list-inline">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ENG <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">ENGLISH</a></li>
                                <li><a href="#">SERBIAN</a></li>
                             
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USD<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              
                                <li><a href="#">RSD</a></li>
                                <li><a href="#">EURO</a></li>
                              
                            </ul>
                        </li>
                    </ul>
                    <ul class="account list-inline">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                MY ACCOUNT
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">PROFILE</a></li>
                                <li><a href="#">ORDERS</a></li>
                                <li><a href="#">LOG OUT</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                LOGIN
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu login">
                                <li>LOGIN OR REGISTER</li>
                                <li><a href="#" class="accLog">LOGIN</a></li>
                                <li>OR</li>
                                <li><a href="#" class="account">CREATE ACCOUNT</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="line"></div>

            <!-- NAVIGATION -->
            	@include('front.navigation')
        </header>
                @yield('content')

        <!-- FOOTER -->
        @include('front.footer')


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" id="myModalLabel">Insert main title</h3>
                    </div>
                    <div class="modal-body">
                        <h4>Insert second title here</h4>
                        <p>
                            Cras mattis consectetur purus sit amet fermentum. Cras 
                            justo odio, dapibus ac facilisis in, egestas eget quam. 
                            Morbi leo risus, porta ac consectetur ac, vestibulum at eros
                        </p>
                        <p>
                            Cras mattis consectetur purus sit amet fermentum. Cras 
                            justo odio, dapibus ac facilisis in, egestas eget quam. 
                            Morbi leo risus, porta ac consectetur ac, vestibulum at eros
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end-->

















        <script src="{{url('/skins/front/js/jquery-3.0.0.min.js')}}" type="text/javascript"></script>
        <script>window.jQuery || document.write('<script src="{{url('/skins/front/js/vendor/jquery-1.11.2.js')}}"><\/script>')</script>

        <script src="{{url('/skins/front/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{url('/skins/front/js/owl.carousel.js')}}" type="text/javascript"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="{{url('/skins/front/js/validator.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/main.js')}}"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
