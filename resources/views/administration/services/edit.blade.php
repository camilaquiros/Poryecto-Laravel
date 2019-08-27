@extends('layouts.admin')

@section('pageTitle', 'Admin - Editar servicio')

@section('content')

	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Editando el servicio: {{ $serviceToEdit->name }}</h2>

		<form action="/administration/services/{{ $serviceToEdit->id }}" method="post" enctype="multipart/form-data">
			@csrf
			{{ method_field('put') }}

			<div class="row">

				<div class="col-8">
					<div class="form-group">
						<label>Nombre del servicio:</label>
						<input type="text" name="name" class="form-control" value="{{ old('name', $serviceToEdit->name) }}">
						@error ('name')
							<i style="color: red;"> {{ $errors->first('name') }}</i>
						@enderror
					</div>
				</div>

        <div class="col-8">
					<div class="form-group">
						<label>Descripcion:</label>
						<textarea name="longDescription" rows="10" cols="20" class="form-control" value="{{ old('longDescription', $serviceToEdit->longDescription) }}">{{$serviceToEdit->longDescription}}</textarea>
						@error ('longDescription')
							<i style="color: red;"> {{ $errors->first('longDescription') }}</i>
						@enderror
					</div>
				</div>

        <div class="col-8">
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
