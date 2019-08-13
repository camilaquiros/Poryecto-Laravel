@extends('layouts.admin')

@section('pageTitle', 'Producto nuevo')

@section('content')
	<!-- Listado de peliculas -->

	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Crear un producto</h2>

		@if ($errors)
			@foreach ($errors->all() as $error)
				<p style="color: red;">{{ $error }}</p>
			@endforeach
		@endif

		<form action="/administration/products/new" method="post" enctype="multipart/form-data">
			@csrf

			<div class="row">

				<div class="col-6">
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="title" class="form-control" value="{{ old('title') }}">
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Descripcion:</label>
						<input type="text" name="description" class="form-control">
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
          </div>
        </div>

				<div class="col-6">
					<div class="form-group">
						<label>Sub-Categorias:</label>
            <select class="form-control" name="subcategory_id">
              <option value="">Elegí una categoria</option>
              @foreach ($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}"> {{ $subcategory->name }}</option>
              @endforeach
            </select>
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
					</div>
				</div>

        <div class="col-6">
					<div class="form-group">
						<label>Precio:</label>
						<input type="text" name="price" class="form-control">
					</div>
				</div>

				<div class="col-6">
					<label>Imagen del producto:</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="image">
    				<label class="custom-file-label">Choose file...</label>
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-success">GUARDAR</button>
		</form>
	</div>
@endsection
