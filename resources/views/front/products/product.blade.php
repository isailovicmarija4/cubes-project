@extends('front.layout')
@section('content')
@section('head_title', 'Proizvod : ' . $product->title)

      <section class="frid clearfix">
                <figure>
                    <img src="img/hot-stone.jpg" alt="" class="img-responsive"/>
                </figure>
                <div class="gridView">
                    <h3 class="text-uppercase text-center">Proizvodi</h3>
                    <ul class="breadcrumb list-inline text-uppercase text-center">
                        <li>
                            <a href="{{url('/')}}">Naslovna</a>
                        </li>
                        <li>
                            <a href="{{url('/products')}}"> Proizvodi</a>
                        </li>
                     
                    </ul>
                </div>
            </section>
    <section class="singleProduct">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <article class="preview">
                       <figure>
                               @if($product->photo_filename && \Storage::disk('public')->exists('/products/' . $product->photo_filename))
                                    <img 
                                    class="img-responsive center-block"
                                                src="{{\Storage::disk('public')->url('/products/' . $product->photo_filename)}}" 
				                alt="{{$product->title}}" 
                                                height="510"
                                                id="main"
                                                width="270" 
                                               />
                                            @else
			<img 
				class="img-responsive center-block" 
				src="{{url('/skins/front/img/line.png')}}" 
				alt="{{$product->title}}"
			/>
                        @endif</figure></article>
                        </div>
                            <div class="col-md-6">
                            <article class="arcticSpa">
                                <h3 class="text-uppercase">{{$product->title}}</h3>
                                <ul class="list-inline list-unstyled stars">
                                    <li class="text-uppercase">{{number_format($product->price, 2)}} din</li>
                                    <li class="pull-right">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span>(4 Reviews)</span>
                                    </li>
                                </ul>
                                 <p>
                                   {{$product->description}}
                                </p>
                                
                                    <form method="post" class="clearfix" action="{{route('shopping-cart.add-product')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <div class="text-right">
                                        <label>Quantity: </label>
                                        <input type="number" value="1" name="quantity">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-shopping-cart">
                                                
                                            </i>
                                        </button>
                                    </div>
                                    
                                    
                                    @foreach($errors->all() as $errorMessage)
                                    <div class="text-danger">
                                        {{$errorMessage}}
                                    </div>
                                    @endforeach
                                    
                                    
                                    
                                    </form></div></div>
                    <div class="block">
			<h3 class="block-title">
				Specifikacija:
			</h3>
			<div class="block">
				{!! $product->specification !!}
			</div>
		</div>
                </div></section>
@endsection
