@extends('layouts.app')

@section('content')




	<div class="row">
	  @foreach($posts as $post)
		<div class="col-md-12">

			<div class="panel panel-info">
			  <div class="panel-heading topes"><h2 ><a href="{{ route('post_path',['post'=>$post->id])}}">  {{$post->title}}</h2></a></div>
			  <div class="panel-body">

				    <p>Creado {{$post->created_at->diffForHumans()}}</p>
					<p>Fecha: {{$post->created_at->format('l j \d\e F \d\e Y')}}</p>
			  </div>
			</div>

		</div>

       @endforeach
       

	</div>	
	

	 {{ $posts->render() }}

 @endsection