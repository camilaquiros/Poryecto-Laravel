@extends('layouts.admin')

@section('pageTitle', 'Admin - Servicio nuevo')

@section('content')

	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Crea un nuevo servicio</h2>

		<form action="/administration/services/new" method="post" enctype="multipart/form-data">
			@csrf

			<div class="row">

				<div class="col-10">
					<div class="form-group">
						<label>Nombre del servicio:</label>
						<input type="text" name="name" class="form-control" value="{{ old('name') }}">
						@error ('name')
							<i style="color: red;"> {{ $errors->first('name') }}</i>
						@enderror
					</div>
				</div>

				<div class="col-10">
					<div class="form-group">
						<label>Descripcion:</label>
						<input type="text" name="description" class="form-control" value="{{ old('description') }}">
						@error ('description')
							<i style="color: red;"> {{ $errors->first('description') }}</i>
						@enderror
					</div>
				</div>

        <div class="col-10">
          <div class="form-group">
            <label>Categoria:</label>
            <select class="form-control" name="category_id">
              <option value="">Elegí la categoria a la que pertenece</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->name }}</option>
              @endforeach
            </select>
						@error ('category_id')
							<i style="color: red;"> {{ $errors->first('category_id') }}</i>
						@enderror
          </div>
        </div>

				<div class="col-10">
					<label>Imagen del servicio:</label>
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
