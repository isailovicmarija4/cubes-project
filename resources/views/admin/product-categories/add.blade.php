@extends('admin.layout')

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="{{route('admin.products.index')}}">Proizvodi</a>
	</li>
	<li class="breadcrumb-item">
		<a href="{{route('admin.product-categories.index')}}">kategorija proizvoda</a>
	</li>
	<li class="breadcrumb-item active">
		Add
	</li>
</ol>
<h1>Dodati novu kategoriju</h1>
<hr>			

<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i>Dodati novu kategoriju
	</div>
	<div class="card-body">

		<form action="" method="post">
			{{csrf_field()}}
			
			<div class="form-group">
				<label for="title">Naziv</label> 
				<input value="{{old('title')}}" name="title" placeholder="Enter Title" aria-describedby="titleHelpBlock" required="required" class="form-control here" type="text"> 
				@if($errors->has('title'))
				<div class="form-errors text-danger">
					@foreach($errors->get('title') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div> 
			<div class="form-group">
				<label>Opis</label> 
				<input value="{{old('description')}}" name="description" placeholder="Enter description" aria-describedby="titleHelpBlock" class="form-control here" type="text"> 
				@if($errors->has('description'))
				<div class="form-errors text-danger">
					@foreach($errors->get('description') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div> 
			<div class="form-group text-right">
				<a href="{{route('admin.product-categories.index')}}" class="btn btn-secondary">Cancel</a>
				<button name="submit" type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>
	</div>
</div>
@endsection