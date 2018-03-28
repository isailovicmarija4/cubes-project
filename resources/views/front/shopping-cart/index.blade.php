@extends('front.layout')
@section('content')
@section('head_title', 'Korpa')


   <section class="frid clearfix">
                <figure>
                    <img src="{{url('/skins/front/img/webshop.JPG')}}" alt="" class="img-responsive"/>
                </figure>
                <div class="gridView">
                    <h3 class="text-uppercase text-center">WEB SHOP</h3>
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

    <section class="view">
                <div class="container">
                    <div class="row">
			<div class="col-md-12">
				<!-- system messages -->
				@include('front.global-partials.system-messages')
                                @if(!$shoppingCart->isEmpty())
				<table id="shopping-cart-table" class="table table-striped table-hover">
					<thead>
						<th></th>
						<th>Slika</th>
						<th>Naziv</th>
						<th class="text-right">Cena</th>
						<th class="text-right" colspan="2">Količina</th>
						<th class="text-right" colspan="2">Zbir</th>
					</thead>
					<tbody>
                                            @foreach($shoppingCart->getItems() as $shoppingCartItem)
						<tr>
							<td class="text-center">
								<button 
									data-action="delete" 
                                                                        data-id="{{$shoppingCartItem->getProductId()}}"
									><i class="fa fa-trash"></i>
								</button>
							</td>
							<td>
                                                            @if($shoppingCartItem->getProductPhotoUrl())
								<img src="{{$shoppingCartItem->getProductPhotoUrl()}}" style="width: 100px;" alt="">
                                                                @endif
							</td>
							<td>{{$shoppingCartItem->getProductTitle()}}</td>
							<td class="text-right">
								{{number_format($shoppingCartItem->getProductPrice(),2)}}
								din.
							</td>
							<td class="text-center">x</td>
							<td class="text-right">
								{{$shoppingCartItem->getQuantity()}}
							</td>
							<td class="text-center">=</td>
							<td class="text-right">
								{{number_format($shoppingCartItem->subtotal(),2)}}din.
								
							</td>
						</tr>
                                                @endforeach
					</tbody>
					<tfoot>
						<th class="h2 text-right" colspan="7">ZA UPLATU:</th>
						<td class="h2 text-right">
						{{number_format($shoppingCart->total(),2)}}din.
							
						</td>
					</tfoot>
				</table>
				<hr>
				<div class="text-right">
					<a href="{{route('checkout')}}" class="btn btn-success">
						<i class="fa fa-credit-card"></i>
						Checkout
					</a>
				</div>
				@else
				<div class="jumbotron">
					<h1>Korpa je prazna!</h1>
				</div>
                                @endif
			</div>
		</div>
	</div>
</div>

<form method="post" action="{{route('shopping-cart.remove-product')}}" class="modal fade" id="delete-record-modal" tabindex="-1" role="dialog" aria-hidden="true">
	{{csrf_field()}}
	<input type="hidden" name="product_id" value="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ukloniti proizvod</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Da li ste sigurni da želite da uklonite proizvod iz korpe?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Remove</button>
			</div>
		</div>
	</div>
</form>
@endsection

@push('footer_javascript')
<script>
	$('#shopping-cart-table').on('click', '[data-action="delete"]', function(e) {
		
		e.preventDefault();
		
		var target = $(this);
		
		var id = target.attr('data-id');
		
		var deletePopup = $('#delete-record-modal');
		
		deletePopup.find('[name="product_id"]').val(id);
		
		deletePopup.modal('show');
	});
	
</script>
@endpush