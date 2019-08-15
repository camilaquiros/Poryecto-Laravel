@extends('layouts.admin')

@section('pageTitle', 'Admin - Editar servicio')

@section('content')

	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Editando el servicio: {{ $serviceToEdit->name }}</h2>

		@if ($errors)
			@foreach ($errors->all() as $error)
				<p style="color: red;">{{ $error }}</p>
			@endforeach
		@endif

		<form action="/administration/services/{{ $serviceToEdit->id }}" method="post">
			@csrf
			{{ method_field('put') }}

			<div class="row">

				<div class="col-6">
					<div class="form-group">
						<label>Nombre del servicio:</label>
						<input type="text" name="name" class="form-control" value="{{ old('name', $serviceToEdit->name) }}">
						@error ('name')
							<i style="color: red;"> {{ $errors->first('name') }}</i>
						@enderror
					</div>
				</div>

        <div class="col-6">
					<div class="form-group">
						<label>Descripcion:</label>
						<input type="text" name="description" class="form-control" value="{{ old('description', $serviceToEdit->description) }}">
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
                {{ $serviceToEdit->category_id == $category->id ? 'selected' : null }}
                > {{ $category->name }} </option>
              @endforeach
            </select>
						@error ('category_id')
							<i style="color: red;"> {{ $errors->first('category_id') }}</i>
						@enderror
          </div>
        </div>

        <div class="col-6">
					<label>Imagen del servicio:</label>
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
