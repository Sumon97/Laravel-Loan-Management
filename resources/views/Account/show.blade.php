@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')


<div class="section">




    @foreach($account->images as $image)

    
    
      <div class="col-md-4 col-sm-4">
        <img class="postphoto" class="img-fluid" alt="profile" src="{{asset('/storage/profile/' . $image->profile) }}" width="150px" height="150">
        <form method="post" action="{{route('Image.destroy', $image->id )}}">
        @csrf 
        {{method_field('DELETE')}}
        <input  type="submit" value="Delete" onclick="return confirm('Are you sure that you want to Delete this post for ever?')" class="btn btn-sm btn-danger" />

        </form>  
        </div>

          



       
     
    
    @endforeach

 @if($account->status == '1')

  <a href="{{url('/status',$account->id)}}" class="btn btn-success">Active</a>

@else

  <a href="{{url('/status',$account->id)}}" class="btn btn-danger">Inactive</a>

  @endif


<a class="btn  btn-success" href="/Account/{{$account->id}}/edit">Edit Account info</a>

    
                       

    <h2 class="col text-center">  Account Information </h2>


    <table style="text-align: center;" class="table table-hover responsive">
  <thead>
    <tr>
      <th style="text-align: center;" colspan="3"><h4> {{$account->name}}</h4></th>

      
    </tr>
     <tr>
      <th style="text-align: center;" colspan="3"><h5> {{$account->profession}}</h5></th>

      
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>A/C Number: {{$account->ac_num}}</td>
      <td> Father:  {{$account->father}}</td>
      <td> Mother:  {{$account->mother}}</td>

    </tr>
    <tr>
     
      <td> A/C Balance: {{$account->balance}} BDT</td>
      <td>Profession: {{$account->profession}}</td>
      <td> Mailling Address: {{$account->M_address}}</td>
    </tr>
    <tr>
      <td>Parmanent Address : {{$account->p_address}}</td>
      <td>NID No : {{$account->nid}}</td>
      <td>Birth : {{$account->dob}}</td>
    </tr>

    <tr>
      <td>Nationality : {{$account->nationality}}</td>
      <td>E-TIN : {{$account->etin}}</td>
      <td>Education : {{$account->education}}</td>
    </tr>

    <tr>
      <td>Maritual Status : {{$account->marital}}</td>
      <td>Phone : {{$account->phone}}</td>
      <td>Email : {{$account->email}}</td>
    </tr>

    <tr>
      <th style="text-align: center; text-decoration: underline;" colspan="3"><h4> Nominee</h4></th>
    </tr>
  
  <tr>
      <td>Name : {{$account->n_name}}</td>
      <td>Relation : {{$account->relation}}</td>
      <td>NID No : {{$account->n_nid}}</td>
    </tr>

     <tr>
      <td>Father : {{$account->n_father}}</td>
      <td>Mother : {{$account->n_mother}}</td>
      <td>Nationality : {{$account->n_nid}}</td>
    </tr>

  </tbody>
</table>





<h2 class="col text-center">  Loans </h2>


<table style="text-align: center;" class="table table-hover responsive">
    <thead>
      <tr class="col-sm">
        <th scope="col">Amount</th>
        <th scope="col">Issued</th> 
        <th scope="col">Payable</th>
        <th scope="col">Details</th> 
         
         
      </tr>
    </thead>
    <tbody>
    @foreach($account->loans as $loan) 
      <tr>
        <td >{{$loan->amount}}</td>
        <td >{{$loan->created_at->isoFormat('dddd D/M/Y')}}</td>
        <td >{{$loan->payable}} BDT</td>
        <td ><a class="btn btn-sm btn-success" href="/Loan/{{$loan->id}}">Loan details</a></td>
      </tr> 
    </tbody>

    @endforeach
  </table>

 

  


  


 







<h2 class="col text-center">  Fixed Deposits </h2>


<table style="text-align: center;" class="table table-hover responsive">
    <thead>
      <tr class="col-sm">
        <th scope="col">Amount</th>
        <th scope="col">Percentage</th> 
        <th scope="col">Duration</th> 
        <th scope="col">Fixed Deposit Date</th>
         
         
      </tr>
    </thead>
    <tbody>
 
      <tr>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ></td>
        
      </tr> 
    </tbody>

   
  </table>


  <h2 class="col text-center">  Fixed Deposit Withdraws </h2>


<table style="text-align: center;" class="table table-hover responsive">
    <thead>
      <tr class="col-sm">
        <th scope="col">Amount</th>
        <th scope="col">Withdraw Date</th>
         
         
      </tr>
    </thead>
    <tbody>
    @foreach($account->Dewithdraws as $dewithdraw) 
      <tr>
        <td >{{$dewithdraw->amount}}</td>
        <td >{{$dewithdraw->created_at}}</td>
        
      </tr> 
    </tbody>

    @endforeach
  </table>









  <h2 class="col text-center">  DPS </h2>
<div class="table-responsive">

<table style="text-align: center;" class="table table-hover"  >
    <thead>
      <tr class="col-sm">
        <th scope="col">Amount</th>
        <th scope="col">Duration</th> 
        <th scope="col">Paid</th> 
        <th scope="col">Return</th> 
        <th scope="col">Date</th>
        <th scope="col">Details</th>
         
      </tr>
    </thead>
    <tbody>
    
      <tr>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ><a class="btn btn-sm btn-success" href="">DPS Details</a></td>
      </tr> 
    </tbody>

    
  </table>
</div>



  <h2 class="col text-center">  DPS Paid </h2>

<div class="table-responsive">
<table style="text-align: center;" class="table table-hover responsive">
    <thead>
      <tr class="col-sm">
        <th scope="col">Amount</th>
        <th scope="col">Duration</th> 
        <th scope="col">Paid</th> 
        <th scope="col">Paid by</th>
        <th scope="col">Date</th>
        <th scope="col">Details</th>
         
      </tr>
    </thead>
    <tbody>

      <tr>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ></td>
      
      </tr> 
    </tbody>

  
  </table>

</div>




  <h2 class="col text-center">  Share own </h2>


<table style="text-align: center;" class="table table-hover responsive">
    <thead>
      <tr class="col-sm">
        <th scope="col">Share price</th>
        <th scope="col">Share Number</th>
        <th scope="col">Total Price</th> 
        <th scope="col">Date</th>
        
         
         
      </tr>
    </thead>
    <tbody>

      <tr>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ></td>
       
      
    </tbody>


  </table>





  <h2 class="col text-center">  Share return </h2>


<table style="text-align: center;" class="table table-hover responsive">
    <thead>
      <tr class="col-sm">
        <th scope="col">Share price</th>
        <th scope="col">Share Number</th> 
        <th scope="col">Total price</th>
        <th scope="col">Date</th>
        
         
         
      </tr>
    </thead>
    <tbody>
  
      <tr>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ></td>
       
      
    </tbody>

    @endforeach

  </table>



     









      

<!-- Image upload -->


<!-- Profile -->
<!-- Button to open the modal login form -->


<button onclick="document.getElementById('id5').style.display='block'">Profile</button>
</div>
<!-- The Modal -->
<div id="id5" class="modal">
  <span onclick="document.getElementById('id5').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" method="Post" action="/Image" enctype="multipart/form-data">
    @csrf
  
    <div>
      <H3 style="text-align: center; margin: 20px 0px" >profile photo</H3>
    </div>
  
     <div class="container">
   
  
     
      <div class="form-group">
        <label for="File">Image:</label>
        <input type="file"  name="profile"  placeholder="choose">
        
      </div>
  
  
     
     <input type="hidden" placeholder="enter account" name="account_id" value="{{$account->id}}" >
  
       <button class="btn btn-success" type="submit">submit</button>
       
    
  
      
     </div>
   </form>
</div>




@auth('admin')





@endauth


@auth('staff')

<!-- Button to open the modal login form -->
<button class="section" onclick="document.getElementById('id2').style.display='block'">Deposit</button>

<!-- The Modal -->
<div id="id2" class="modal">
  <span onclick="document.getElementById('id2').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" method="Post" action="/Deposit" enctype="form-data">
   @csrf

   <div>
     <H3 style="text-align: center; margin: 20px 0px" >Deposit</H3>
   </div>

    <div class="container">

      <input type="hidden" placeholder="enter account" name="bank_id" value="1" >

      
      <input type="hidden" placeholder="enter account" name="account_id" value="{{$account->id}}" >
       <input type="hidden" placeholder="enter account" name="ac_num" value="{{$account->ac_num}}">

      <label for="amount"><b>Deposit Amount</b></label>
      <input type="number" placeholder="enter amount" name="amount" required>

      <button class="btn btn-success" type="submit">deposit</button>
      
    </div>

     
    </div>
  </form>
</div>

@endauth


@auth('admin')







<!-- Button to open the modal login form -->
<button class="section" onclick="document.getElementById('id01').style.display='block'">Withdraw</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" method="Post" action="/Withdraw" enctype="form-data">

    @csrf
    

    <div class="container">

      <div class="col-8">
          <input type="hidden" placeholder="enter account" name="bank_id" value="1" >
      </div>

      <input type="hidden" placeholder="enter account" name="ac_num" value="{{$account->ac_num}}">

      
      <input type="hidden" placeholder="enter account" name="account_id" value="{{$account->id}}" >

      <label for="amount"><b>Withdraw Amount</b></label>
      <input type="number" placeholder="enter amount" name="amount" required>

      <button class="btn btn-sm btn-success" type="submit">Withdraw</button>
     
    </div>

  </form>
</div>







<!-- Button to open the modal login form -->
<button class="section" onclick="document.getElementById('id012').style.display='block'"> Deposit Withdraw</button>

<!-- The Modal -->
<div id="id012" class="modal">
  <span onclick="document.getElementById('id012').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" method="Post" action="/Dewithdraw" enctype="form-data">

    @csrf
    <div class="container">

      <div class="col-8">
          <input type="hidden" placeholder="enter account" name="bank_id" value="1" >
      </div>

      <input type="hidden" placeholder="enter account" name="ac_num" value="{{$account->ac_num}}">

      
      <input type="hidden" placeholder="enter account" name="account_id" value="{{$account->id}}" >

      <label for="amount"><b>Withdraw Amount</b></label>
      <input type="number" placeholder="Enter Withdraw amount" name="amount" required>

      <button class="btn btn btn-success" type="submit">Create</button>
     
    </div>

  </form>
</div>





 <!-- Button to open the modal -->
<button class="section" class="button" onclick="document.getElementById('id6').style.display='block'">Loan</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id6" class="modal">
  <span onclick="document.getElementById('id6').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="Post" action="/Loan" enctype="form-data">
  	@csrf
    <div class="container">
      <h1>Create New Loan</h1>
      <p>Please fill in this form to create a loan.</p>
      <hr>
      <div class="form-group">
        <div class="col-12">
          <label for="ac_num">Loan Amount</label>
          <input type="Number" class="form-control" name="amount" id="exampleInputEmail1" aria-describedby="required" placeholder="000000000">
          
      </div>


        <div class="form-group">
        <div class="col-12">
          <input type="hidden" placeholder="enter account" name="bank_id" value="1" >
          
      </div>

      <div class="form-group">
        <div class="col-12">
          <label for="interest">Interest %</label>
          <input type="Number" class="form-control" name="interest" id="exampleInputEmail1" aria-describedby="required" placeholder="%">
          
      </div>

      <div class="col-12">
    <label for="type">Select One type</label>
    <select  class="form-control" name="type" id="exampleFormControlSelect1">
      <option>Daily</option>
      <option>Weekly</option>
      <option>Biweekly</option>
      <option>Monthly</option>
    </select>
  </div>


      <div class="form-group">
        <div class="col-12">
          <label for="number">EMI Number</label>
          <input type="Number" class="form-control" name="number" id="exampleInputEmail1" aria-describedby="required" placeholder="00">
          
      </div>


      <div class="form-group">
        <div class="col-12">
          <label for="Emi_amount">EMI Amount</label>
          <input type="number" class="form-control" name="Emi_amount" id="exampleInputEmail1" aria-describedby="required" placeholder="per emi amount">
          
      </div>


<div class="form-group">
        <div class="col-12">
          <label for="payable">Total Payable Amount</label>
          <input type="number" class="form-control" name="payable" id="exampleInputEmail1" aria-describedby="required" placeholder="Total payable amount">
          
      </div>


      <div class="form-group">
        <div class="col-12">
          
          <input type="hidden" class="form-control" name="account_id" id="exampleInputEmail1" aria-describedby="required" placeholder="user id" value="{{$account->id}}">
          
      </div>


       <input type="hidden" placeholder="enter account" name="ac_num" value="{{$account->ac_num}}">


      
       </div>
      <button class="btn btn btn-success" type="submit">Loan</button>
      

     
    </div>
  </form>
</div>

@endauth













</div>






<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 0 : 1; 
        var account_id = $(this).data('id'); 
         console.log(status);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/status',
            data: {'status': status, 'account_id': account_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>



@endsection


