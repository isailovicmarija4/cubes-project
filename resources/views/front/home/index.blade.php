@extends('front.layout')
@section('content')

<main>

            <!-- CAROUSEL -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{url('/skins/front/img/main-img.jpg')}}" alt="" class="img-responsive"/>
                        <div class="carousel-caption">
                            <h2>PLASH</h2>
                            <h2>SPA BEAUTY SHOP</h2>
                            <p>
                                Lorem ipsum dolor sit amet, cum odio adolescens 
                                definitionem ea, est cu nonumy partiendo.
                            </p>
                            <a href="#">EXPLORE NOW</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('/skins/front/img/main-flower.jpg')}}" alt="" class="img-responsive"/>
                        <div class="carousel-caption">
                            <h2>PLASH</h2>
                            <h2>SPA BEAUTY SHOP</h2>
                            <p>
                                Lorem ipsum dolor sit amet, cum odio adolescens 
                                definitionem ea, est cu nonumy partiendo.
                            </p>
                            <a href="#">EXPLORE NOW</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('/skins/front/img/main-candle.jpg')}}" alt="" class="img-responsive"/>
                        <div class="carousel-caption">
                            <h2>PLASH</h2>
                            <h2>SPA BEAUTY SHOP</h2>
                            <p>
                                Lorem ipsum dolor sit amet, cum odio adolescens 
                                definitionem ea, est cu nonumy partiendo.
                            </p>
                            <a href="#">EXPLORE NOW</a>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- SECTION 1 "tonic" -->
            <section class="tonic">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <article class="herbalTonic">
                                <div class="shopTonic">
                                    <h3 class="text-uppercase">HERBAL TONIC</h3>
                                    <p class="text-uppercase">special offer for your skin</p>
                                    <button>SHOP NOW</button>
                                </div>
                                <figure>
                                    <img src="img/shower-gel.png" alt="" class="img-responsive"/>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="soap">
                                <figure>
                                    <img src="img/soap.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="shopSoap text-center">
                                    <h3 class="text-uppercase">HERBAL SOAP</h3>
                                    <p class="text-uppercase">special offer for your skin</p>
                                    <button>SHOP NOW</button>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <article class="pure clearfix">
                                        <div class="shopPure">
                                            <h3 class="text-uppercase">PURE HERBAL TONIC</h3>
                                            <p class="text-uppercase">special 50% discount for family pack</p>
                                        </div>
                                        <figure>
                                            <img src="img/pureherbs.png" alt="" class="img-responsive"/>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-sm-12">
                                    <article class="botanic">
                                        <div class="shopBotanic">
                                            <p class="text-uppercase">50% OFF</p>
                                            <h3 class="text-uppercase">BOTANIC BODY LOTION</h3>
                                        </div>
                                        <figure>
                                            <img src="img/botanica.png" alt="" class="img-responsive"/>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <section class="popular">
                <h4 class="text-uppercase text-center">most popular products</h4>
                <img src="img/line.png" alt="" class="img-responsive center-block"/>
            </section>

            <!-- SECTION 3 "pupularProducts -->
            <section class="popularProducts">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <article>
                                <figure>
                                    <img src="img/plash.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="imageHover">
                                    <a href="#">
                                        <h4>Green apple peel</h4>  
                                        <p>$ 125.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article>
                                <figure>
                                    <img src="img/eminence.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="imageHover">
                                    <a href="#">
                                        <h4>Facial recovery oil</h4>  
                                        <p>$ 100.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article>
                                <figure>
                                    <img src="img/spa-body.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="imageHover">
                                    <a href="#">
                                        <h4>Arctic spa body lotion</h4>  
                                        <p>$ 130.00</p>
                                    </a>
                                    <a href="#"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="#"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article>
                                <figure>
                                    <img src="img/aveeno.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="imageHover">
                                    <a href="#">
                                        <h4>Aveeno moisturizing lotion</h4>  
                                        <p>$ 135.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article>
                                <figure>
                                    <img src="img/facial.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="imageHover">
                                    <a href="#">
                                        <h4>Facial recovery oil</h4>  
                                        <p>$ 110.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article>
                                <figure>
                                    <img src="img/towel.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="imageHover">
                                    <a href="#">
                                        <h4>Tomato seed oil</h4>  
                                        <p>$ 70.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article>
                                <figure>
                                    <img src="img/arctic.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="imageHover">
                                    <a href="#">
                                        <h4>Body lotion spa</h4>  
                                        <p>$ 120.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article>
                                <figure>
                                    <img src="img/vitamin.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="imageHover">
                                    <a href="#">
                                        <h4>Vitamin B3 body buff</h4>  
                                        <p>$ 140.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 4 "plashOil -->
            <section class="plashOil">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <article class="discount">
                                <h3 class="text-uppercase">50% off plash oil</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing 
                                    elit, sed do eiusmod tempor incididunt ut labore et 
                                    dolore magna aliqua. Ut enim ad minim veniam, quis 
                                    nostrud exercitation ullamco laboris nisi ut 
                                    aliquip ex ea commodo 
                                </p>
                                <p>
                                    consequat. Duis aute irure dolor in reprehenderit 
                                    in voluptate velit esse cillum dolore eu fugiat 
                                    nulla pariatur. Excepteur sint occaecat cupidatat 
                                    non proident, sunt in culpa qui officia deserunt 
                                    mollit anim id est laborum...
                                </p>
                                <p>
                                    $ 125.00 &nbsp; &nbsp;
                                    <button>ADD TO CART</button>
                                </p>
                            </article>
                        </div>   
                        <div class="col-sm-6">
                            <article>
                                <figure>
                                    <img src="img/plash-daily.png" alt="" class="img-responsive"/>
                                </figure>
                            </article>
                        </div>  
                    </div>
                </div>
            </section>
            <section class="popular">
                <h4 class="text-uppercase text-center">new arrivals</h4>
                <img src="img/line.png" alt="" class="img-responsive center-block"/>
            </section>

            <!-- SECTION 5 "arrivals -->    
            <section class="arrivals">
                <div class="container">
                    <div id="owl-example" class="owl-carousel">
                        <article>
                            <div>
                                <figure>
                                    <img src="img/plash.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="carouselHover">
                                    <a href="#">
                                        <h4>Green apple peel</h4>  
                                        <p>$ 125.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <figure>
                                    <img src="img/eminence.png" alt="" class="img-responsive center-block"/> 
                                </figure>
                                <div class="carouselHover">
                                    <a href="#">
                                        <h4>Green apple peel</h4>  
                                        <p>$ 125.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <figure>
                                    <img src="img/spa-body.png" alt="" class="img-responsive center-block"/> 
                                </figure>
                                <div class="carouselHover">
                                    <a href="#">
                                        <h4>Green apple peel</h4>  
                                        <p>$ 125.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <figure>
                                    <img src="img/aveeno.png" alt="" class="img-responsive center-block"/> 
                                </figure>
                                <div class="carouselHover">
                                    <a href="#">
                                        <h4>Green apple peel</h4>  
                                        <p>$ 125.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <figure>
                                    <img src="img/facial.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="carouselHover">
                                    <a href="#">
                                        <h4>Green apple peel</h4>  
                                        <p>$ 125.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <figure>
                                    <img src="img/towel.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="carouselHover">
                                    <a href="#">
                                        <h4>Green apple peel</h4>  
                                        <p>$ 125.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <figure>
                                    <img src="img/arctic.png" alt="" class="img-responsive center-block"/>
                                </figure>
                            </div>
                            <div class="carouselHover">
                                <a href="#">
                                    <h4>Green apple peel</h4>  
                                    <p>$ 125.00</p>
                                </a>
                                <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                <button>ADD TO CART</button>
                                <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                            </div>
                        </article>
                        <article>
                            <div>
                                <figure>
                                    <img src="img/vitamin.png" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="carouselHover">
                                    <a href="#">
                                        <h4>Green apple peel</h4>  
                                        <p>$ 125.00</p>
                                    </a>
                                    <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                    <button>ADD TO CART</button>
                                    <a href="javascript:void(0)"><span class="fa fa-heart-o faGreen"></span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- SECTION 6 "shipping" -->
            <section class="shipping">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <article>
                                <span class="fa fa-truck"></span>
                                <a href="#"><h5>FREE SHIPPING</h5></a>
                                <p>Lorem ipsum dummy text here</p>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article>
                                <span class="fa fa-check-square"></span>
                                <a href="#"><h5>MONEYBACK GUARANTEE</h5></a>
                                <p>Lorem ipsum dummy text here</p>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article>
                                <span class="fa fa-headphones"></span>
                                <a href="#"><h5>ONLINE SUPPORT</h5></a>
                                <p>24/7 Lorem ipsum dummy support</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </main>

@push('footer_javascript')
 <script src="{{url('/skins/front/js/owl.carousel.js')}}" type="text/javascript"></script>
 @endpush