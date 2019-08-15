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

				<div class="col-6">
					<div class="form-group">
						<label>Descripcion:</label>
						<input type="text" name="description" class="form-control" value="{{ old('description') }}">
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
                <option value="{{ $category->id }}"> {{ $category->name }}</option>
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
                <option value="{{ $subcategory->id }}"> {{ $subcategory->name }}</option>
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
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
						@error ('offer')
							<i style="color: red;"> {{ $errors->first('offer') }}</i>
						@enderror
					</div>
				</div>

        <div class="col-6">
					<div class="form-group">
						<label>Precio:</label>
						<input type="text" name="price" class="form-control">
						@error ('price')
							<i style="color: red;"> {{ $errors->first('price') }}</i>
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
