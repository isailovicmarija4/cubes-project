@extends('admin.layout')

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="{{route('admin.products.index')}}">Proizvodi</a>
	</li>
	<li class="breadcrumb-item active">
		Izmeni
	</li>
</ol>
<h1>Izmeni proizvod: {{$product->title}}</h1>
<hr>			

<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Izmeni proizvod
	</div>
	<div class="card-body">

		<form id="row-form" action="" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="row">
				<fieldset class="col-lg-6">
					<legend>Podešavanja</legend>
					<div class="form-group">
						<label>Kategorija proizvoda</label>
						<select class="form-control" name="product_category_id">
							<option>--- Izaberite kategoriju proizvoda ---</option>
							@foreach($productCategories as $productCategory)
							<option
								value="{{$productCategory->id}}"
								@if(old('product_category_id', $product->product_category_id) == $productCategory->id)
								selected
								@endif
								>{{$productCategory->title}}</option>
							@endforeach
						</select>
						@if($errors->has('product_category_id'))
						<div class="form-errors text-danger">
							@foreach($errors->get('product_category_id') as $errorMessage)
							<label class="error">{{$errorMessage}}</label>
							@endforeach
						</div>
						@endif
					</div> 
					 
					<div class="form-group">
						<label>Naslov</label> 
						<input value="{{old('title', $product->title)}}" name="title" placeholder="Enter Title" required="required" class="form-control" type="text"> 
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
						<textarea name="description" placeholder="Enter Description" class="form-control" rows="12">{{old('description', $product->description)}}</textarea>
						@if($errors->has('description'))
						<div class="form-errors text-danger">
							@foreach($errors->get('description') as $errorMessage)
							<label class="error">{{$errorMessage}}</label>
							@endforeach
						</div>
						@endif
					</div> 
				</fieldset>
				<fieldset class="col-lg-6">
					<legend>Slika</legend>
					<div class="text-center mb-5">
						@if($product->photo_filename && \Storage::disk('public')->exists('/products/' . $product->photo_filename))
						<img 
							class="img-fluid img-thumbnail" 
							src="{{\Storage::disk('public')->url('/products/' . $product->photo_filename)}}" 
							alt="placeholder">
						@else
						<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/640x480" alt="placeholder">
						@endif
					</div>

					<div class="form-group">
						<label>Učitajte sliku</label>
						<div class="custom-file">
							<input name="product_photo_file" type="file" class="custom-file-input" id="product_photo_file">
							<label class="custom-file-label" for="product_photo_file">Izaberite sliku</label>
						</div>
						@if($errors->has('product_photo_file'))
						<div class="form-errors text-danger">
							@foreach($errors->get('product_photo_file') as $errorMessage)
							<label class="error">{{$errorMessage}}</label>
							@endforeach
						</div>
						@endif
					</div>
				</fieldset>
			</div>
			<div class="row mb-5">
				<div class="col-lg-12">
					<hr>
				</div>
			</div>
			<div class="row">
				<fieldset class="col-lg-12">
					<legend>Tagovi</legend>
					<div class="row">
						<div class="form-group col-lg-12">
							<select name="tag_ids[]" class="form-control" multiple>
								@foreach($tags as $tag)
								<option
									value="{{$tag->id}}"
									@if(in_array($tag->id, old('tag_ids', $product->tags->pluck('id')->toArray())))
									selected
									@endif
									>
									{{$tag->title}}
								</option>
								@endforeach
							</select>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="row mb-5">
				<div class="col-lg-12">
					<hr>
				</div>
			</div>
			<div class="row">
				<fieldset class="col-lg-12">
					<legend>Cene</legend>
					<div class="row">

						<div class="form-group col-lg-3">
							<label>Cena</label> 
							<input value="{{old('price', $product->price)}}" name="price" class="form-control" type="text"> 
							@if($errors->has('price'))
							<div class="form-errors text-danger">
								@foreach($errors->get('price') as $errorMessage)
								<label class="error">{{$errorMessage}}</label>
								@endforeach
							</div>
							@endif
						</div>
						<div class="form-group col-lg-3">
							<label>Količina</label> 
							<input value="{{old('quantity', $product->quantity)}}" name="quantity" class="form-control" type="text"> 
							@if($errors->has('quantity'))
							<div class="form-errors text-danger">
								@foreach($errors->get('quantity') as $errorMessage)
								<label class="error">{{$errorMessage}}</label>
								@endforeach
							</div>
							@endif
						</div>
						<div class="form-group col-lg-3">
							<label class="d-block">Na sniženju</label> 
							<div class="form-check form-check-inline">

								<label class="form-check-label">
									<input 
										@if(old('on_sale', $product->on_sale) == 0)
										checked
										@endif
										name="on_sale" class="form-check-input" type="radio" value="0">
									no
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input 
										@if(old('on_sale', $product->on_sale) == 1)
										checked
										@endif
										name="on_sale" class="form-check-input" type="radio" value="1">
									yes
								</label>
							</div>
							@if($errors->has('on_sale'))
							<div class="form-errors text-danger">
								@foreach($errors->get('on_sale') as $errorMessage)
								<label class="error">{{$errorMessage}}</label>
								@endforeach
							</div>
							@endif
						</div>
						<div class="form-group col-lg-3">
							<label>Sniženje</label>
							<div class="input-group">
								<input value="{{old('discount', $product->discount)}}" name="discount" class="form-control" type="text"> 
								<div class="input-group-append">
									<span class="input-group-text">%</span>
								</div>
							</div>
							@if($errors->has('discount'))
							<div class="form-errors text-danger">
								@foreach($errors->get('discount') as $errorMessage)
								<label class="error">{{$errorMessage}}</label>
								@endforeach
							</div>
							@endif
						</div>
					</div>
				</fieldset>
			</div>
			<div class="row mb-5">
				<div class="col-lg-12">
					<hr>
				</div>
			</div>
			<div class="row">
				<fieldset class="col-lg-12">
					<legend>Specifikacija</legend>
					<div class="form-group">
						<textarea name="specification" placeholder="Enter Specification" class="form-control" rows="20">{{old('specification', $product->specification)}}</textarea>
						@if($errors->has('specification'))
						<div class="form-errors text-danger">
							@foreach($errors->get('specification') as $errorMessage)
							<label class="error">{{$errorMessage}}</label>
							@endforeach
						</div>
						@endif
					</div>
				</fieldset>
			</div>
			<div class="row">
				<div class="form-group text-right col-lg-12">
					<hr>
					<a class="btn btn-secondary" href="{{route('admin.products.index')}}">Cancel</a>
					<button name="submit" type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@push('head_links')
<link href="{{url('/skins/admin/vendor/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
@endpush

@push('footer_javascript')
<script src="{{url('/skins/admin/vendor/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{url('/skins/admin/vendor/ckeditor/adapters/jquery.js')}}" type="text/javascript"></script>

<script src="{{url('/skins/admin/vendor/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script>
	$('#row-form select[name="product_category_id"]').select2({
		
	});
	
	$('#row-form select[name="tag_ids[]"]').select2({
		'placeholder': "Choose minimum 3 tags",
		'allowClear': true
	});
	
	$('#row-form [name="specification"]').ckeditor({
		'width': '800px',
		'height': '700px',
		'bodyId': 'content',
		'bodyClass': 'block',
		'allowedContent': true,
		//'forcePasteAsPlainText': true, // disable paste from word
		'contentsCss': [
			"{{url('/skins/front/plugins/bootstrap/dist/css/bootstrap.min.css')}}",
			"{{url('/skins/front/plugins/font-awesome/css/font-awesome.min.css')}}",
			"{{url('/skins/front/css/theme-style.css')}}",
			"{{url('/skins/front/css/custom-style.css')}}",
			"{{url('/skins/front/css/colour-blue.css')}}"
		],
		'toolbarGroups': [
			{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
			{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
			{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
			{ name: 'forms', groups: [ 'forms' ] },
			'/',
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
			{ name: 'links', groups: [ 'links' ] },
			{ name: 'insert', groups: [ 'insert' ] },
			'/',
			{ name: 'styles', groups: [ 'styles' ] },
			{ name: 'colors', groups: [ 'colors' ] },
			{ name: 'tools', groups: [ 'tools' ] },
			{ name: 'others', groups: [ 'others' ] },
			{ name: 'about', groups: [ 'about' ] }
		],
		'removeButtons': 'Print,NewPage,Preview,Save,Form,Checkbox,Radio,Textarea,TextField,Select,ImageButton,Button,HiddenField,Iframe',
		
		'filebrowserBrowseUrl': "{{route('admin.filemanager.popup')}}"
	
	});
</script>

@endpush