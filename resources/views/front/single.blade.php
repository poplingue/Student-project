@extends('layouts.master')
@section('single')
    <div class="col-xs-10">
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        <!--<p>{{ ($post->category) ? $post->category->title : ''}}</p>-->
    </div>
@stop

