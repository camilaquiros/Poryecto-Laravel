@extends('layouts.admin')

@section('pageTitle', 'Admin - Editar producto')

@section('content')

	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Editando el producto: {{ $productToEdit->title }}</h2>

		@if ($errors)
			@foreach ($errors->all() as $error)
				<p style="color: red;">{{ $error }}</p>
			@endforeach
		@endif

		<form action="/administration/products/{{ $productToEdit->id }}" method="post">
			@csrf
			{{ method_field('put') }}

			<div class="row">

				<div class="col-6">
					<div class="form-group">
						<label>Nombre del producto:</label>
						<input type="text" name="title" class="form-control" value="{{ old('title', $productToEdit->title) }}">
						@error ('title')
							<i style="color: red;"> {{ $errors->first('title') }}</i>
						@enderror
					</div>
				</div>

        <div class="col-6">
					<div class="form-group">
						<label>Descripcion:</label>
						<input type="text" name="description" class="form-control" value="{{ old('description', $productToEdit->description) }}">
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
                <option
                value="{{ $category->id }}"
                {{ $productToEdit->category_id == $category->id ? 'selected' : null }}
                > {{ $category->name }} </option>
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
                <option value="{{ $subcategory->id }}"
                  {{ $productToEdit->subcategory_id == $subcategory->id ? 'selected' : null}}
                  > {{ $subcategory->name }}</option>
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
                @if ($productToEdit->offer)
                  <option value="1" selected>Sí</option>
                  <option value="0">No</option>
                @else
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
						<input type="text" name="price" class="form-control" value="{{ old('price', $productToEdit->price) }}">
						@error ('price')
							<i style="color: red;"> {{ $errors->first('price') }}</i>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Rating:</label>
						<input type="text" name="rating" class="form-control">
						@error ('rating')
							<i style="color: red;"> {{ $errors->first('rating') }}</i>
						@enderror
					</div>
				</div>

        <div class="col-6">
					<label>Imagen del producto:</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="image">
    				<label class="custom-file-label">Elegí una imagen...</label>
					</div>
					@error ('image')
						<i style="color: red;"> {{ $errors->first('image') }}</i>
					@enderror
				</div>
			</div>

			</div>

			<button type="submit" class="btn btn-success">GUARDAR</button>
		</form>
	</div>
@endsection
