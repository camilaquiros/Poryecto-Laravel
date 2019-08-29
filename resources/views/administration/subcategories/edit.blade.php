@extends('layouts.admin')

@section('pageTitle', 'Admin - Editar subcategoria')

@section('content')

<div class="container" style="margin-top:30px; margin-bottom: 30px;">
	<h2>Editando la categoria: {{ $subcategoryToEdit->name }}</h2>

	@if ($errors)
	@foreach ($errors->all() as $error)
	<p style="color: red;">{{ $error }}</p>
	@endforeach
	@endif

	<form action="/administration/subcategories/{{ $subcategoryToEdit->id }}" method="post">
		@csrf
		{{ method_field('put') }}

		<div class="row">

			<div class="col-6">
				<div class="form-group">
					<label>Nombre de la subcategoria:</label>
					<input type="text" name="name" class="form-control" value="{{ old('name', $subcategoryToEdit->name) }}">
					@error ('name')
					<i style="color: red;"> {{ $errors->first('name') }}</i>
					@enderror
				</div>
			</div>

			<button type="submit" class="btn btn-success">GUARDAR</button>
	</form>
</div>
@endsection
