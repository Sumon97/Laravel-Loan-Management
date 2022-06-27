@extends('layouts.admin')

@section('Somiti', 'Small Banking')


@section('content')

<div class="section">


<h2 class="col text-center">  Emis </h2>
@if(count($emis) > 0)

<table class="table table-hover">
    <thead>
      <tr class="col-sm">
        <th scope="col">Name</th>
        <th scope="col">Acc Number</th>
        <th scope="col">Loan Amount</th> 
        <th scope="col">EMI Amount</th> 

        <th scope="col">Time</th> 
      </tr>
    </thead>
    <tbody>
    @foreach($emis as $emi) 
      <tr>
        <th scope="row">{{$emi->loan->account->name}}</th>
        <td>   {{$emi->loan->account->ac_num}}</td>
        <td>   {{$emi->loan->amount}} BDT</td>
        <td>   {{$emi->amount}} BDT</td>
        <td>   {{$emi->created_at->isoFormat('dddd D/M/Y h:m A ')}}</td>
 
      </tr>
      
    </tbody>

    @endforeach
  </table>
  
@else 
<p> You have no Emni </p>
@endif 




</div>




@endsection