@extends('layouts.app')

@section('content')
<h1>All Messages</h1>

<table class="table table-stripe">
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th></th>
    </tr>
    @if(count($messages) > 0)
      @foreach($messages as $message)
    <tr>
      <td>{{$message->name}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->body}}</td> 
       <td>
           {!! Form::open(['action' => ['MessagesController@destroy', $message->id], 'method' => 'POST']) !!}
           
           {{ Form::hidden('_method', 'DELETE')}}
           {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
           
           {!! Form::close() !!}
    
       </td>
    </tr>
    @endforeach
    @endif 
</table> 

@endsection