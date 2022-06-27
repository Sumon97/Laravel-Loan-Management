@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')




@foreach($withdraws as $withdraw)
<div>
<h3> Withdraw Amount: {{$withdraw->amount}}</h3>
<h5> Time: {{$withdraw->created_at}}</h>


<h3 class="col" id="title"> {{$withdraw->account->name}}</h3>




</div>

<a class="btn btn-sm btn-primary" href="/Withdraw/{{$withdraw->id}}">show</a>





@endforeach




@endsection