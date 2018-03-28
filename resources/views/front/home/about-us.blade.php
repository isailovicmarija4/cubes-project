@extends('front.layout')
@section('content')
@section('head_title',trans('front.first_title'))





            <!-- SECTION 1 "frid" -->
            <section class="frid clearfix">
                <figure>
                    <img src="{{url('/skins/front/img/main-img.jpg')}}" alt="" class="img-responsive"/>
                  
                 
                </figure>
                <div class="gridView">
                    <h3 class="text-uppercase text-center">O NAMA</h3>
                    <ul class="breadcrumb list-inline text-uppercase text-center">
                        <li>
                            <a href="{{url('/')}}">Naslovna</a>
                        </li>
                        <li>
                            <a>O nama</a>
                        </li>

                    </ul>
      </div>
            </section>

            <!-- SECTION 2 -->
            <section class="popular">
                <h4 class="text-uppercase text-center">O nama</h4>
                <img src="{{url('/skins/front/img/line.png')}}" alt="" class="img-responsive center-block"/>
            </section>

            <!-- SECTION 3 " -->
            <section class="ourCompany">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <article>
                                <h4 class="text-uppercase">Derma clinic</h4> 
                                <p>
      pruža veliki broj usluga na poljima estetike i dermatologije.
      Misija naše klinike je bezbolna i bezbedna primena dermatoloških i estetskih procedura, uz konstantno praćenje najsavremenih inovacija i trendova, i primenu novih metoda i tehnologija.
  

 </p>
                                <p>
                                     Mozete uživati u miru i u vrhunskim tretmanima i najkvalitetnijoj kozmetici. Dočekaće Vas prijatno i pre svega stručno osoblje, edukovano kako kod nas tako i u inostranstvu. Na našoj klinici nalazi se pravo malo carstvo za sve one kojima je cilj lepši izgled i očuvanje kože lica i tela.
                                </p><br><br>
                                <p>Pratite nas na:</p>
                                <ul class="list-inline list-unstyled">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="clearfix">
                                <figure>
                                    <img src="{{url('/skins/front/img/interior.jpg')}}" alt="" class="img-responsive center-block"/>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 4 " -->
             
                
            <section class="popular">
                <h4 class="text-uppercase text-center">Naš  tim</h4>
                <img src="{{url('/skins/front/img/line.png')}}" alt="" class="img-responsive center-block"/>
            </section>
 
            <!-- SECTION 5 " -->
   
<section class="ourTeam">
   
                <div class="container">
                    
            
       
                        <div id="owl-example" class="owl-carousel">   
                            
                    
                            <article class="singleMember clearfix">
                                <figure>
                                    <img src="{{url('/skins/front/img/doctor-1.jpg')}}" alt="" class="img-responsive center-block"/>

                                    <div class="teamMember text-center">
                                        <a href="{{route('team')}}""><h4 class="text-uppercase">SENKA JOVIĆ</h4></a>
                                        <h3>DR SPEC.</h3>
                                        <p>
                                          specijalista dermatovenerologije
                                        </p>
                                        <ul class="list-inline list-unstyled">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </figure>
                            </article>
                   
                        
                   
                            <article class="singleMember clearfix">
                                <figure>
                                    <img src="{{url('/skins/front/img/doctor-2.jpg')}}" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="teamMember text-center">
                                    <a href="{{route('team')}}""><h4 class="text-uppercase">FILIP MARIĆ</h4></a>
                                    <h3>DR SPEC.</h3>
                                    <p>
                                       specijalista fizikalne medicine
                                    </p>
                                    <ul class="list-inline list-unstyled">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>
                                </div>
                            </article>
                     
                         
                       
                            <article class="singleMember clearfix">
                                <figure>
                                    <img src="{{url('/skins/front/img/doctor-3.jpg')}}" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="teamMember text-center">
                                    <a href="{{route('team')}}""><h4 class="text-uppercase">DANKA STEVIĆ</h4></a>
                                    <h3>DR SPEC.</h3>
                                    <p>
                                      specijalista plastične, estetske i rekonstruktivne hirurgije
                                    </p>
                                    <ul class="list-inline list-unstyled">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>
                                </div>
                            </article>
                     
                       
                    
        
                            <article class="singleMember clearfix">
                                <figure>
                                    <img src="{{url('/skins/front/img/doctor-4.jpg')}}" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="teamMember text-center">
                                    <a href="{{route('team')}}""><h4 class="text-uppercase">IRINA JOVANOVIĆ</h4></a>
                                    <h3>DR SPEC.</h3>
                                    <p>
                                       specijalista plastične, estetske i rekonstruktivne hirurgije
                                    </p>
                                    <ul class="list-inline list-unstyled">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>
                                </div>
                            </article>
                   
                      
            
               
                            <article class="singleMember clearfix">
                                <figure>
                                    <img src="{{url('/skins/front/img/doctor-5.jpg')}}" alt="" class="img-responsive center-block"/>
                                </figure>
                                <div class="teamMember text-center">
                                    <a href="{{route('team')}}"><h4 class="text-uppercase">MARTA DAKIĆ</h4></a>
                                    <h3>DR SPEC.</h3>
                                    <p>
                                         specijalista dermatovenerologije
                                    </p>
                                    <ul class="list-inline list-unstyled">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>
                                </div>
                            </article>
                          </div>

                                   
                   
                        
                    

                    </div> </div>
                
            </section>
              


            <!-- SECTION 5 " -->
           

            <!-- SECTION 7 "arrivals -->    
         

            <!-- SECTION 8 "shipping" -->
            
        

        <!-- FOOTER -->

        
        <!-- Modal -->
        
        <!-- Modal end-->

@endsection

@push('footer_javascript')
 <script src="{{url('/skins/front/js/owl.carousel.js')}}" type="text/javascript"></script>
 @endpush












