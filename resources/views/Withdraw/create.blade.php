@extends('layouts.app')

@section('Somiti', 'Small banking')


@section('content')


<h2 style="text-align: center;"> Create New Account </h2>

   
    <form  method="Post" action="/Withdraw" enctype="form-data">
        @csrf

      <div class="form-group">
        <div class="col-5">
          <label for="type">Account Holder</label>
          <input type="text" class="form-control" name="account_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="account_id">
          
      </div>


      <div class="form-group">
        <div class="col-5">
          <label for="type">Withdraw Amount</label>
          <input type="number" class="form-control" name="amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="amount">
          
      </div>

      
    
       </div>
       <div class="col-5">
        <button type="submit" class="btn btn-success">Submit</button>
        </div> 
      
    </form>



      @endsection