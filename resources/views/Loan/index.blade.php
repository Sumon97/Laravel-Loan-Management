@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')



<h2 class="col text-center">  Loans </h2>
@if(count($loans) > 0)
<table class="table table-hover">
    <thead>
      <tr class="col-sm">
        <th scope="col">Loan Amount</th>
        <th scope="col">Emi Type</th> 
        <th scope="col">Emi Amount</th> 
        <th scope="col">Created</th> 
        <th scope="col">Show</th> 
      </tr>
    </thead>
    <tbody>
    @foreach($loans as $loan) 
      <tr>
        <th scope="row">{{$loan->amount}}</th>
        <td >{{$loan->type}}</td>
        <td >{{$loan->Emi_amount}}</td>
        <td >{{$loan->created_at->isoFormat('dddd D/M/Y')}}</td>
        <td ><a class="btn btn-sm btn-success" href="/Loan/{{$loan->id}}">Show</a> </td>
       
       
      </form>  
      </td>
        
      </tr>
      
    </tbody>

    @endforeach
  </table>
@else 
<p> You have no message </p>
@endif 





@endsection