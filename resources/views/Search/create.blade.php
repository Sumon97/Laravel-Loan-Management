@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')


<div class="section">


 <form action="/search" method="GET" class="form-inline">
  @csrf
    <input class="form-control mr-sm-2  col-sm" type="search" placeholder="Search" name="search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>





@if(count($accounts) > 0) 
    @foreach ($accounts as $account)
<h3 class="titlep"> <a style="color: #05a84c;" href="/Account/{{$account->id}}">  {{$account->name}}</a></h3>
<h3> A/C Number: {{$account->ac_num}}</h3>
<h3> Phone Number: {{$account->phone}}</h3>
<a type="button" class="btn btn-secondary " href="/Account/{{$account->id}}">Click to Enter</a>

    @endforeach
@else 
    <div>
        <h2>No account found</h2>
    </div>
@endif



</div>


@endsection