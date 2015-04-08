@extends('layouts.master')    
@section('tag_posts')
   <div class="col-xs-10">
       <p>Mot clef : {{$tag->name}}</p>
        @if(!empty($posts))
        @foreach($posts as $post)
            <h2><a href="{{url('single/'.$post->id)}}">{{$post->title}}</a></h2>
        @endforeach
        @else
       <p>Pas de tag pour le moment</p>
       @endif
   </div>
@stop
@section('sidebar')
    @parent
@stop
