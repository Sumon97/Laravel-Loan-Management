@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')

<div class="section">



<h2 class="col text-center">  Stuff Accounts </h2>
@if(count($stuffs) > 0)

<table class="table table-hover">
    <thead>
      <tr class="col-sm">
        <th scope="col">Name</th>
        <th scope="col">Email</th> 
        <th scope="col">Created at</th> 
       
      </tr>
    </thead>
    <tbody>
    @foreach($stuffs as $stuff) 
      <tr>
        <th scope="row">{{$stuff->name}}</th>
       <th scope="row">{{$stuff->email}}</th>
       <th scope="row">{{$stuff->created_at->isoFormat('dddd D/M/Y h:m a')}}</th>

       <th scope="row">@if($stuff->blocked == '1')

  <a href="{{url('/blocked', $stuff->id)}}" class="btn btn-success">Active</a>

@else

  <a href="{{url('/blocked', $stuff->id)}}" class="btn btn-danger">Inactive</a>

  @endif</th>
      </tr>
      
    </tbody>

    @endforeach
  </table>
  
@else 
<p> You have no message </p>
@endif 










 </div> 







@endsection