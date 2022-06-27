@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')

<div class="section">



<h2 class="col text-center">  Accounts </h2>
@if(count($accounts) > 0)

<table class="table table-hover">
    <thead>
      <tr class="col-sm">
        <th scope="col">Name</th>
        <th scope="col">Acc Number</th> 
        <th scope="col">Profession</th> 
        <th scope="col">Image</th> 
        <th scope="col">Show</th> 
      </tr>
    </thead>
    <tbody>
    @foreach($accounts as $account) 
      <tr>
        <th scope="row">{{$account->name}}</th>
        <td >{{$account->ac_num}}</td>
        <td >{{$account->profession}}</td>
        <td >  @foreach($account->images as $image)

    
    
      <div class="col-md-4 col-sm-4">
        <img class="postphoto" src="{{asset('/storage/profile/' . $image->profile) }}" width="70px" height="70px">
        </div>
    
    @endforeach</td>
        <td ><a class="btn btn-sm btn-success" href="/Account/{{$account->id}}">Show</a> </td>
       
       
      </form>  
      </td>
        
      </tr>
      
    </tbody>

    @endforeach
  </table>
  
@else 
<p> You have no message </p>
@endif 










 </div> 







@endsection