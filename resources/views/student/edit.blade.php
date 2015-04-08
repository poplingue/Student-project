@extends('layouts.admin')
@section('edit')

    {!! Form::open(['url'=>'student/'.$student->id,'method'=>'PUT' ]) !!}

    <div class="form-group {{$errors->has('firstname')? 'has-error' : '' }}">
        {!! Form::label('firstname', 'Firstname:', ['for'=> 'Firstname'] ) !!}<br>
        {!! Form::text('firstname',old('firstname'), ['class'=>'form-control', 'id' => 'Firstname','Value' => $student->firstname]) !!}
        {!! $errors->first('firstname', '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{$errors->has('name')? 'has-error' : '' }}">
        {!! Form::label('name', 'Name:', ['for'=> 'Name'] ) !!}<br>
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'id' => 'Name','Value' => $student->name]) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{$errors->has('status')? 'has-error' : '' }}">
        {!! Form::label('bio', 'Bio:' ) !!}<br>
        {!! Form::textarea('bio', old('bio'), ['Value' => $student->bio] ) !!}
        {{ $errors->first('bio', '<span class="help-block">:message</span>') }}
    </div>

     <div class="form-group {{$errors->has('status')? 'has-error' : '' }}">
        {!! Form::label('type', 'type:' ) !!}<br>
        {!! Form::select('type', ['dev'=>'dev','graphisme'=>'graphisme','editor'=>'editor',''=>''], old('type') ) !!}
        {{ $errors->first('type', '<span class="help-block">:message</span>') }}
    </div>

    <div class="form-group {{$errors->has('status')? 'has-error' : '' }}">
        {!! Form::label('status', 'Status:' ) !!}<br>
        {!! Form::select('status',['publish' =>'publié', 'unpublish'=>'non publié'], old('status')) !!}
        {{ $errors->first('status', '<span class="help-block">:message</span>') }}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Me!', ['class'=>'btn']) !!}
    </div>

    {!! Form::close() !!}

@stop 