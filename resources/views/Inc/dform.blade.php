<div>
 <!-- Button to open the modal -->
<button class="buton" onclick="document.getElementById('id2').style.display='block'">Create Loan</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id2').style.display='none'" class="close" title="Close Modal">times;</span>
  <form class="modal-content" method="Post" action="/Loan" enctype="form-data">
  	@csrf
    <div class="container">
      <h1>Create New Loan</h1>
      <p>Please fill in this form to create a loan.</p>
      <hr>
      <div class="form-group">
        <div class="col-8">
          <label for="ac_num">Loan Amount</label>
          <input type="Number" class="form-control" name="loan_amount" id="exampleInputEmail1" aria-describedby="required" placeholder="000000000">
          
      </div>

      <div class="form-group">
        <div class="col-8">
          <label for="interest">Interest %</label>
          <input type="Number" class="form-control" name="interest" id="exampleInputEmail1" aria-describedby="required" placeholder="20%">
          
      </div>

      <div class="col-8">
    <label for="type">Select One type</label>
    <select class="form-control" name="type" id="exampleFormControlSelect1">
      <option>Daily</option>
      <option>Weekly</option>
      <option>Biweekly</option>
      <option>Monthly</option>
    </select>
  </div>


      <div class="form-group">
        <div class="col-8">
          <label for="number">EMI Number</label>
          <input type="Number" class="form-control" name="number" id="exampleInputEmail1" aria-describedby="required" placeholder="90">
          
      </div>


      <div class="form-group">
        <div class="col-8">
          <label for="Emi_amount">EMI Amount</label>
          <input type="integer" class="form-control" name="Emi_amount" id="exampleInputEmail1" aria-describedby="required" placeholder="per emi amount">
          
      </div>


<div class="form-group">
        <div class="col-8">
          <label for="payable">Total Payable Amount</label>
          <input type="number" class="form-control" name="payable" id="exampleInputEmail1" aria-describedby="required" placeholder="Total payable amount">
          
      </div>


      <div class="form-group">
        <div class="col-8">
          
          <input type="hidden" class="form-control" name="account_id" id="exampleInputEmail1" aria-describedby="required" placeholder="user id" value="{{$account->id}}">
          
      </div>


      
       </div>
      
      

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id2').style.display='none'" class="btn btn-success">Cancel</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>

