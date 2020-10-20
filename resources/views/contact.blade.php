@extends('layouts.app')

@section('content')
<h1>Contact</h1>
{!! Form::open(['action' => 'MessagesController@store', 'method' => 'POST'])!!}
<div class="form-group">
    {{Form::label('username', 'Username')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your Name'])}}
</div>

<div class="form-group">
    {{Form::label('Email', 'Email')}}
    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your Email'])}}
</div>

<div class="form-group">
    {{Form::label('content', 'Content')}}
    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter your Content'])}}
</div>
{{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

@endsection