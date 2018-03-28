@extends('front.layout')
@section('content')
@section('head_title', 'Checkout')
		   <section class="frid clearfix">
                <figure>
                    <img src="{{url('/skins/front/img/webshop.JPG')}}" alt="" class="img-responsive"/>
                </figure>
                <div class="gridView">
                    <h3 class="text-uppercase text-center">CHECKOUT</h3>
                    <ul class="breadcrumb list-inline text-uppercase text-center">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                           <a href="{{url('/products')}}">Proizvodi</a>
                            
                        </li>
                      
                    </ul>
                </div>
            </section>

		<div id="content" class="demos">
			<div class="container">
				<div class="row">
					<div class="col-md-12 blog-post">
						<!-- system messages -->
						
						<form action="" method="post" class="form-horizontal">
							{{csrf_field()}}
							<fieldset>
								<!-- Form Name -->
								<legend>Informacije o kupcu</legend>
								
								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Ime:</label>  
									<div class="col-md-5">
                                                                            <input name="customerName" class="form-control" type="text" value="{{old('customerName',$checkout->getCustomerName())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('customerName'))
										<ul class="text-danger">
											@foreach($errors->get('customerName') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Email:</label>  
									<div class="col-md-5">
										<input name="customerEmail" class="form-control" type="text" value="{{old('customerEmail',$checkout->getCustomerEmail())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('customerEmail'))
										<ul class="text-danger">
											@foreach($errors->get('customerEmail') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Telefon:</label>  
									<div class="col-md-5">
										<input name="customerPhone" class="form-control" type="text" value="{{old('customerPhone',$checkout->getCustomerPhone())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('customerPhone'))
										<ul class="text-danger">
											@foreach($errors->get('customerPhone') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Zemlja:</label>  
									<div class="col-md-5">
										<input name="customerCountry" class="form-control" type="text" value="{{old('customerCountry',$checkout->getCustomerCountry())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('customerCountry'))
										<ul class="text-danger">
											@foreach($errors->get('customerCountry') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Grad:</label>  
									<div class="col-md-5">
										<input name="customerCity" class="form-control" type="text" value="{{old('customerCity',$checkout->getCustomerCity())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('customerCity'))
										<ul class="text-danger">
											@foreach($errors->get('customerCity') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">ZIP Kod:</label>  
									<div class="col-md-5">
										<input name="customerZip" class="form-control" type="text" value="{{old('customerZip',$checkout->getCustomerZip())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('customerZip'))
										<ul class="text-danger">
											@foreach($errors->get('customerZip') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Adresa:</label>  
									<div class="col-md-5">
										<input name="customerAddress" class="form-control" type="text" value="{{old('customerAddress',$checkout->getCustomerAddress())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('customerAddress'))
										<ul class="text-danger">
											@foreach($errors->get('customerAddress') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
							</fieldset>
							<fieldset readonly>

								<!-- Form Name -->
								<legend>
									Isporuka
									<div class="pull-right">
										<label>
											<input type="checkbox" id="check_delivery_same" name="kk">
											<small>ista adresa</small>
										</label>
									</div>
								</legend>
								
								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Zemlja isporuke:</label>  
									<div class="col-md-5">
										<input name="deliveryCountry" class="form-control" type="text" value="{{old('deliveryCountry',$checkout->getDeliveryCountry())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('deliveryCountry'))
										<ul class="text-danger">
											@foreach($errors->get('deliveryCountry') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Mesto isporuke:</label>  
									<div class="col-md-5">
										<input name="deliveryCity" class="form-control" type="text" value="{{old('deliveryCity',$checkout->getDeliveryCity())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('deliveryCity'))
										<ul class="text-danger">
											@foreach($errors->get('deliveryCity') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">ZIP kod isporuke:</label>  
									<div class="col-md-5">
										<input name="deliveryZip" class="form-control" type="text" value="{{old('deliveryZip',$checkout->getDeliveryZip())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('deliveryZip'))
										<ul class="text-danger">
											@foreach($errors->get('deliveryZip') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Adresa isporuke:</label>  
									<div class="col-md-5">
										<input name="deliveryAddress" class="form-control" type="text" value="{{old('deliveryAddress',$checkout->getDeliveryAddress())}}">
									</div>
									<div class="col-md-4">
										@if($errors->has('deliveryAddress'))
										<ul class="text-danger">
											@foreach($errors->get('deliveryAddress') as $errorMessage)
											<li>{{$errorMessage}}</li>
											@endforeach
										</ul>
										@endif
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend></legend>
								<div class="form-group text-right">
									<a href="{{route('shopping-cart')}}" class="btn btn-default pull-left">Back</a>
									<button type="submit" class="btn btn-success">
										<i class="fa fa-credit-card"></i>
										Next
									</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection