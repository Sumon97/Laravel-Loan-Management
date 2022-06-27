@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')


<h2 style="text-align: center;"> Create New Expense Type </h2>

   
    <form  method="Post" action="/Cost" enctype="form-data">
        @csrf

     <div class="form-group">


       <input type="hidden" placeholder="enter account" name="bank_id" value="1" >

       
          <label for="expenses">Select Type</label>
          
          <select class="form-control col-5" id="exampleFormControlSelect1" name="expense_id" >

           @foreach ($expenses as $expense)
             <option value="{{$expense->id}}" >{{$expense->type}}</option>


           @endforeach
              
              
          </select>
        </div>


        <div class="form-group">
        <div class="col-5">
          <label for="type">Amount</label>
          <input type="number" class="form-control" name="amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write amount">
          
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