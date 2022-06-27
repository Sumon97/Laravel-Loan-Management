@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')

<div class="section">

  <!-- add Grantee -->
  @auth('admin')





@endauth
<div class="section">

<h2 class="section">Loan Information</h2>
<h3 class="col" id="title"> Loan Amount: {{$loan->amount}} BDT</h3>
<h3 class="col" id="title"> Loan Type: {{$loan->type}}</h3>
<h3 class="col" id="title"> EMI Number: {{$loan->number}} Installments</h3>

<h3 class="col" id="title"> Per Emi Amount: {{$loan->Emi_amount}} BDT</h3>

<h3 class="col" id="title"> EMI remaining: {{$loan->payable/$loan->Emi_amount}} Installments</h3>
<h3 class="col" id="title"> Payable Amount: {{$loan->payable}} BDT</h3>

<h3 class="col" id="title"> Time: {{$loan->created_at->isoFormat('dddd D/M/Y h:m a')}}}} </h3>

@auth('staff')

<!-- Button to open the modal login form -->
<button onclick="document.getElementById('id2').style.display='block'">Emi</button>

<!-- The Modal -->
<div id="id2" class="modal">
  <span onclick="document.getElementById('id2').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" method="Post" action="/Emi" enctype="form-data/multipart">
   @csrf

   <div>
     <H3 style="text-align: center; margin: 20px 0px" >Emi</H3>
   </div>

    <div class="container">
  
      
      <input type="hidden" placeholder="enter Loan id" name="loan_id" value="{{$loan->id}}" >

      <input type="hidden" placeholder="enter account" name="bank_id" value="1" >

      <label for="amount"><b>Emi Amount</b></label>
      <input type="number" placeholder="enter amount" name="amount" value="{{$loan->Emi_amount}}" required>

       <input type="hidden" placeholder="enter account" name="interest" value="{{$loan->interest}}" >

       <input type="hidden" placeholder="enter account" name="ac_num" value="{{$loan->account->ac_num}}">

      <button type="submit">Emi pay</button>
      
    </div>

     
    </div>
  </form>
</div>

</div>
</div>

@endauth

<div class="section">

<h1>Emi installment record</h1>

@foreach($loan->emis as $emi)
<h3 class="col" id="title"> {{$emi->amount}} BDT  Paid at: {{$emi->created_at->isoFormat('dddd D/M/Y h:m a')}} </h3>


@endforeach

</div>






@endsection