    <div class="col-sm-4">
                          
                                    <article>
                                        <figure>
                                            @if($product->photo_filename && \Storage::disk('public')->exists('/products/' . $product->photo_filename))
                                            <img 
                                                  class="img-responsive center-block"
                                                src="{{\Storage::disk('public')->url('/products/' . $product->photo_filename)}}" 
				                alt="{{$product->title}}" 
                                               />
                                            @else
			<img 
				class="img-responsive center-block" 
				src="{{url('/skins/front/img/line.png')}}" 
				alt="{{$product->title}}"
			/>
			@endif
                                        </figure>
                                        <div class="imageHover">
                                            <a href="{{url('/products/product/' . $product->id)}}">
                                                <h4>{{$product->title}}</h4>  
                                                <p>{{$product->price}}</p>
                                            </a>
                                            <a href="javascript:void(0)"><span class="fa fa-refresh"></span></a>
                                            <button>DODAJ U KORPU</button>
                                            <a href="javascript:void(0)"><span class="fa fa-heart-o"></span></a>
                                        </div>
                                    </article>
                               
    </div>     

