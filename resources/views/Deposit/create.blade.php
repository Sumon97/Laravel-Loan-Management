@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')




<h2> Create New Deposit </h2>

   
    <form  method="Post" action="/Deposit" enctype="form-data">
        @csrf

    <div class="form-group">

       
        <div class="col-5">
          <label for="type">Account ID</label>
          <input type="number" class="form-control" name="account_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0000000">
          
      </div>


      <div class="form-group">
        <div class="col-5">
          <label for="type">Deposit Amount</label>
          <input type="number" class="form-control" name="amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="amount">
          
      </div>

      
    
       </div>
       <div class="col-5">
        <button type="submit" class="btn btn-success">Submit</button>
        </div> 
      
    </form>



      @endsection