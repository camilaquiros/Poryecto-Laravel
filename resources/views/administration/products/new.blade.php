@extends('layouts.admin')

@section('pageTitle', 'Admin - Producto nuevo')

@section('content')

<div class="container" style="margin-top:30px; margin-bottom: 30px;">
	<h2>Producto nuevo</h2>

	<form action="/administration/products/new" method="post" enctype="multipart/form-data">
		@csrf

		<div class="row">

			<div class="col-6">
				<div class="form-group">
					<label>Nombre:</label>
					<input type="text" name="title" class="form-control" value="{{ old('title') }}">
					@error ('title')
					<i style="color: red;"> {{ $errors->first('title') }}</i>
					@enderror
				</div>
			</div>

			<div class="col-7">
				<div class="form-group">
					<label>Descripcion:</label>
					<textarea name="description" rows="7" cols="20" class="form-control" value="{{ old('description') }}">{{ old('description')}}</textarea>
					@error ('description')
					<i style="color: red;"> {{ $errors->first('description') }}</i>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Categoria:</label>
					<select class="form-control" name="category_id">
						<option value="">Elegí una categoria</option>
						@foreach ($categories as $category)
						<option value="{{ $category->id }}" {{old('category_id') == $category->id ? 'selected' : null }}> {{ $category->name }}</option>
						@endforeach
					</select>
					@error ('category_id')
					<i style="color: red;"> {{ $errors->first('category_id') }}</i>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Sub-Categoria:</label>
					<select class="form-control" name="subcategory_id">
						<option value="">Elegí una subcategoria</option>
						@foreach ($subcategories as $subcategory)
						<option value="{{ $subcategory->id }}" {{old('subcategory_id') == $subcategory->id ? 'selected' : null }}> {{ $subcategory->name }}</option>
						@endforeach
					</select>
					@error ('subcategory_id')
					<i style="color: red;"> {{ $errors->first('subcategory_id') }}</i>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Oferta:</label>
					<select class="form-control" name="offer">
						<option value="">¿El producto está en oferta?</option>
						@if (old('offer') == 1)
						<option value="1" selected>Sí</option>
						<option value="0">No</option>
						@elseif (old('offer') == 0)
						<option value="1">Si</option>
						<option value="0" selected>No</option>
						@endif
					</select>
					@error ('offer')
					<i style="color: red;"> {{ $errors->first('offer') }}</i>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Precio:</label>
					<input type="text" name="price" class="form-control" value="{{ old('price') }}">
					@error ('price')
					<i style="color: red;"> {{ $errors->first('price') }}</i>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Rating:</label>
					<input type="text" name="rating" class="form-control" value="{{ old('rating') }}">
					@error ('rating')
					<i style="color: red;"> {{ $errors->first('rating') }}</i>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<label>Imagen del producto:</label>
				<div class="custom-file">
					<input type="file" class="custom-file-input" name="image">
					<label class="custom-file-label">Choose file...</label>
				</div>
				@error ('image')
				<i style="color: red;"> {{ $errors->first('image') }}</i>
				@enderror
			</div>
		</div>

		<button type="submit" class="btn btn-success">GUARDAR</button>
	</form>
</div>
@endsection
