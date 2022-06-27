@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')


<h2> Create New Loan </h2>

   
    <form  method="Post" action="/Loan" enctype="form-data">
        @csrf

      <div class="form-group">
        <div class="col-5">
          <label for="ac_num">Loan Amount</label>
          <input type="Number" class="form-control" name="loan_amount" id="exampleInputEmail1" aria-describedby="required" placeholder="000000000">
          
      </div>

      <div class="form-group">
        <div class="col-5">
          <label for="interest">Interest %</label>
          <input type="Number" class="form-control" name="interest" id="exampleInputEmail1" aria-describedby="required" placeholder="13%">
          
      </div>

      <div class="col-5">
    <label for="type">Example select</label>
    <select class="form-control" name="type" id="exampleFormControlSelect1">
      <option>Daily</option>
      <option>Weekly</option>
      <option>Biweekly</option>
      <option>Monthly</option>
    </select>
  </div>


      <div class="form-group">
        <div class="col-5">
          <label for="number">EMI Number</label>
          <input type="Number" class="form-control" name="number" id="exampleInputEmail1" aria-describedby="required" placeholder="90">
          
      </div>


      <div class="form-group">
        <div class="col-5">
          <label for="Emi_amount">EMI Amount</label>
          <input type="integer" class="form-control" name="Emi_amount" id="exampleInputEmail1" aria-describedby="required" placeholder="per emi amount">
          
      </div>


<div class="form-group">
        <div class="col-5">
          <label for="payable">Total Payable Amount</label>
          <input type="number" class="form-control" name="payable" id="exampleInputEmail1" aria-describedby="required" placeholder="Total payable amount">
          
      </div>


      <div class="form-group">
        <div class="col-5">
          <label for="account_id">Account ID</label>
          <input type="number" class="form-control" name="account_id" id="exampleInputEmail1" aria-describedby="required" placeholder="user id">
          
      </div>


      
       </div>
       <div class="col-5">
        <button type="submit" class="btn btn-success">Submit</button>
        </div> 
      
    </form>



      @endsection