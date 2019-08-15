@extends('layouts.admin')

@section('pageTitle', 'Admin -  Categoria nueva')

@section('content')

	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Crea una nueva categoria</h2>

		<form action="/administration/categories/new" method="post" enctype="multipart/form-data">
			@csrf

			<div class="row">

				<div class="col-6">
					<div class="form-group">
						<label>Nombre de la categoria:</label>
						<input type="text" name="name" class="form-control" value="{{ old('name') }}">
						@error ('name')
							<i style="color: red;"> {{ $errors->first('name') }}</i>
						@enderror
					</div>
				</div>

			<button type="submit" class="btn btn-success">GUARDAR</button>
		</form>
	</div>
@endsection
