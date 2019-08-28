{{-- Para usar la plantilla template.blade.php --}}
@extends('profileLayout')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Perfil')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('profileContent')

@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container">
<div class="row">
<div class="col-md-2"> <img src="/32114.svg" width="80" /></div>
<div class="col-md-8"><h2>Laravel Multiple File Uploading With Bootstrap Form</h2>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="/profile/pets" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="Product Name">Product photos (can attach more than one):</label>
<br />
<input type="file" class="form-control" name="photos[]" multiple />
<br /><br />
<input type="submit" class="btn btn-primary" value="Upload" />
</form>
</div>
</div>
</div>

@endsection
