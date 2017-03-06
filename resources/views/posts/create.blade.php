@extends('layouts.app') 

@section('content')

@if(count($errors)>0)
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach	
		</ul>
	</div>
@endif

<form action="{{ route('store_post_path')}}" method="POST" role="form">
	<h2>Crear Post</h2>
	{{csrf_field()}}
	<div class="form-group">
		<label for="title">Título</label>
		<input type="text" class="form-control myinput" id="" name="title" placeholder="" value="{{ old('title')}}">
	</div>

	<div class="form-group">
		<label for="description">Descripción</label>
		 <textarea rows="5" name="description" class="form-control myinput"/>{{ old('description') }}</textarea>
	</div>

	<div class="form-group">
		<label for="url">Url</label>
		<input type="text" class="form-control myinput" id="" name="url" placeholder="" value="{{ old('url')}}">
	</div>

	



	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection