@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')


<h2 style="text-align: center;"> Create New Expense Type </h2>

   
    <form  method="Post" action="/Expenses" enctype="form-data">
        @csrf

      <div class="form-group">
        <div class="col-5">
          <label for="type">Type</label>
          <input type="text" class="form-control" name="type" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Expense Type">
          
      </div>


      <div class="form-group">
        <div class="col-5">
          <label for="type">Description</label>
          <input type="text" class="form-control" name="description" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="description">
          
      </div>

      
    
       </div>
       <div class="col-5">
        <button type="submit" class="btn btn-success">Submit</button>
        </div> 
      
    </form>



      @endsection