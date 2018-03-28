@extends('admin.layout')

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="{{route('admin.products.index')}}">Proizvodi</a>
	</li>
	<li class="breadcrumb-item">
		<a href="{{route('admin.product-categories.index')}}">Kategorija proizvoda</a>
	</li>
</ol>
<h1>Lista kategorija proizvoda</h1>
<hr>			

@include('admin.global-partials.system-messages')

<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i>Lista kategorija proizvoda

		<div class="btn-group btn-group-sm float-right">
			<a class="btn btn-secondary" href="{{route('admin.product-categories.add')}}">
				<i class="fa fa-plus"></i>
				Dodaj kategoriju proizvoda
			</a>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="records-table" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>#</th>
						
						<th>Naziv</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach($productCategories as $productCategory)
					<tr>
						<td>{{$productCategory->id}}</td>
						<td>{{$productCategory->title}}</td>
						<td class="text-center">
							<div class="btn-group">
								<a 
									class="btn btn-secondary"
									href="{{route('admin.product-categories.edit', ['id' => $productCategory->id])}}"
									title="edit"
								><i class="fa fa-pencil"></i></a>
								
								<button 
									class="btn btn-secondary" 
									title="delete" 
									data-action="delete"
									data-id="{{$productCategory->id}}"
								>
									<i class="fa fa-trash"></i>
								</button>
							</div>
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>
</div>


<form method="post" action="{{route('admin.product-categories.delete')}}" class="modal fade" id="delete-record-modal" tabindex="-1" role="dialog" aria-hidden="true">
	{{csrf_field()}}
	<input type="hidden" name="id" value="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Product Category</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Da li ste sigurni  da želite da izbrišete kategoriju proizvoda?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</form>
@endsection

@push('footer_javascript')
<script>
	$('#records-table').on('click', '[data-action="delete"]', function(e) {
		
		e.preventDefault();
		
		var target = $(this);
		
		var id = target.attr('data-id');
		
		var deletePopup = $('#delete-record-modal');
		
		deletePopup.find('[name="id"]').val(id);
		
		deletePopup.modal('show');
	});
	
</script>
@endpush