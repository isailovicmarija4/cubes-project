@extends('front.layout')
@section('content')
@section('head_title',trans('front.third_title'))
    
  
            <section class="frid clearfix">
                <figure>
                    <img src="{{url('/skins/front/img/products1.jpg')}}" alt="" class="img-responsive"/>
                </figure>
                <div class="gridView">
                    <h3 class="text-uppercase text-center">Proizvodi</h3>
                    <ul class="breadcrumb list-inline text-uppercase text-center">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a> Proizvodi</a>
                            
                        </li>
                      
                    </ul>
                </div>
            </section>

            <!-- SECTION 2 "view" -->
            <section class="view">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <article>
                                <div class="listView">
                                    <a href="javascript:void(0)"><span class="fa fa-th"></span></a>
                                    <a href="javascript:void(0)"><span class="fa fa-th-list"></span></a>
                                </div>
                                <div class="cog">
                                    <a href="javascript:void(0)"><span class="fa fa-cog"></span></a>
                                </div>
                            </article>

                        </div>
                        
                          <div class="col-xs-6 col-sm-4">
                            <article>
                                <button class="showItems">Svi proizvodi  {{$products->total()}}</button>
                            </article>
                        </div>
                        <div class="col-xs-8 col-sm-4">
                            <article>
                                <div class="btn-group">
                                    <button type="button" class="btn text-center">Sortiraj po:</button>
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        
                                        <li><a href="#">CENI RASTUĆE</a></li>
                                        <li><a href="#">CENI OPADAJUĆE</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 "filtersSelect" -->
            <section class="filtersSelect">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 skinCare menuHide">
                            <article class="categories">
                            
                                <ul class="filter list-unstyled">
                                    <li class="text-uppercase" role="menuitem"><a href="{{url('/products')}}" tabindex="-1">Svi proizvodi <small>({{$products->total()}} proizvoda)</small> </a></li><br>
                                  <li class="text-uppercase clearfix">
                                        Kategorija 
                                        <a href="javascript:void(0)" class="down pull-right"><span class="fa fa-toggle-down"> </span></a>
                                                <ul class="filterList  list-unstyled"><br>
                              @foreach(\App\Models\ProductCategory::all() as $productCategory)
									<li role="menuitem">
								<a href="{{url('/products/category/' . $productCategory->id)}}" tabindex="-1">
										{{$productCategory->title}}
                                                                </a>
								</li><br>
					 @endforeach</ul>
                                            </span></a>
                                </li>
				</ul>
									

                                 
                            </article>
                            
                     
                         
                        </div>
             <div class="listProducts col-md-9">       
	<div class="row twelve productList">

                        
                     
			@foreach($products as $product)
			
				@include('front.products.partials.product-list', ['product' => $product])
                      
                        @endforeach
	</div>
	   
	<div class="text-center">
		{{$products->links()}}
	</div>
                        
</div>        
                        </div>
                    </div>
             
            </section>




        

  
@endsection

@push('footer_javascript')
 <script src="{{url('/skins/front/js/owl.carousel.js')}}" type="text/javascript"></script>
 @endpush





  