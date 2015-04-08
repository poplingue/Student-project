@extends('layouts.master')    
@section('category_posts')
   <div class="col-xs-10">
       @if(!empty($posts))
       @foreach($posts as $post)
            <h2>{{$post->title}}</h2>
            <p>{{$post->content}}</p>
       @endforeach
       @else
       <p>Pas de categorie pour le moment</p>
       @endif
   </div>
@stop
@section('sidebar')
    @parent
@stop
