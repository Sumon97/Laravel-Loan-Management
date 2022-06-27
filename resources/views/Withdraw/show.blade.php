@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')






<h3> Withdraw Amount: {{$withdraw->amount}}</h3>
<h5> Time: {{$withdraw->created_at}}</h>



@endsection