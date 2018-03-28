
@extends('front.layout')
@section('content')
@section('head_title',trans('front.second_title'))





            <!-- SECTION 1 "frid" -->
            <section class="frid clearfix">
                <figure>
                    <img src="{{url('/skins/front/img/team.jpg')}}" alt="" class="img-responsive"/>
                  
                 
                </figure>
                <div class="gridView">
                    <h3 class="text-uppercase text-center">TIM</h3>
                    <ul class="breadcrumb list-inline text-uppercase text-center">
                        <li>
                            <a href="{{route('index')}}">Naslovna</a>
                        </li>
                        <li>
                           <a href="{{route('about-us')}}">O nama</a>
                        </li>
                         <li>
                           <a href="{{route('about-us')}}">Tim</a>
                        </li>

                    </ul>
                </div>
            </section>

            <!-- SECTION 2 -->
            <section class="popular">
                <h4 class="text-uppercase text-center">Tim</h4>
                <img src="{{url('/skins/front/img/line.png')}}" alt="" class="img-responsive center-block"/>
            </section>

            <!-- SECTION 3 " -->
            <section class="ourCompany">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <article>
                                <h4 class="text-uppercase">Derma clinic tim</h4> 
                                <p>
      čine dermatolozi i plastični hirurzi koji se stalno stručno usavršavaju i postižu zavidne rezultate u dijagnostici, lečenju i podmlađivanju kože bez obzira na složenost problema.
  

 </p>
                                <p>
    Članovi našeg tima su aktivni i vodeći članovi organizacija među kojima su:
    <br>
    
    
    Udruženje DermatologaSrbije<br>

    Evropsko Udruženje Dermatologa <br>

    Evropsko Udruženje za Lasersku Dermatologiju <br>



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
                                    <img src="{{url('/skins/front/img/team2.jpg')}}" alt="" class="img-responsive center-block"/>
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
                                        <a href="#"><h4 class="text-uppercase">SENKA JOVIĆ</h4></a>
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
                                    <a href="#"><h4 class="text-uppercase">FILIP MARIĆ</h4></a>
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
                                    <a href="#"><h4 class="text-uppercase">DANKA STEVIĆ</h4></a>
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
                                    <a href="#"><h4 class="text-uppercase">IRINA JOVANOVIĆ</h4></a>
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
                                    <a href="#"><h4 class="text-uppercase">MARTA DAKIĆ</h4></a>
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












