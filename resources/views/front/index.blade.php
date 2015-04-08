@extends('layouts.master')    
@section('content')
   <div class="col-xs-10">
       @if(!empty($posts))
       @foreach($posts as $post)
            <h2><a href="{{url('single/'.$post->id)}}">{{$post->title}}</a></h2>
            @if(count($post->tags)>0)
                <span>Mots clef : </span>
                @foreach($post->tags as $tag)
                <span><a href="{{url('tag/'.$tag->id)}}">{{$tag->name}} </a></span>
                @endforeach
            @endif
       @endforeach
       @else
       <p>Pas d'article pour le moment</p>
       @endif
   </div>
@stop
@section('sidebar')
    @parent
@stop