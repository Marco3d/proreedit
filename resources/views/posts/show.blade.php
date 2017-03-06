@extends('layouts.app') 

@section('content')
<div class="row">
	

  <div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading mititle ">{{$post->title}}</div>
    <div class="panel-body">
     <h4>{{$post->description}}</h4>
    </div>

    <!-- List group -->
    <ul class="list-group">
      <li class="list-group-item"><h4>URL: <a href="{{$post->url}}">{{$post->url}}</h4></a></li>
      <li class="list-group-item"><h4>Fecha: {{$post->created_at->format('l j \d\e F \d\e Y')}}</li>

      <li class="list-group-item"><h4>Actualizado: {{$post->updated_at->diffForHumans()}}</li>
     
     
    </ul>
  </div>

  <a class="btn btn-info" href="{{route('posts_path')}}" role="button">Regresar</a>
</div>
@endsection
	

