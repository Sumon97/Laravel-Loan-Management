@extends('layouts.admin')

@section('Somiti', 'Small banking')


@section('content')

<div class="section">


<h2> Account info update </h2>

   
    <form  method="post" action="{{ route('Account.update', $account->id) }}" enctype="form-data">
      @method('PATCH')
        @csrf

      <div class="form-group">
        <div class="col-8">
          <label for="ac_num">Account Number</label>
          <input type="integer" class="form-control" name="ac_num" id="exampleInputEmail1" aria-describedby="required" value="{{$account->ac_num}}">
      </div>

       <div class="col-8">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->name}}">  
      </div>


      <div class="col-8">
          <label for="father">Father's Name</label>
          <input type="text" class="form-control" name="father" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->father}}">
          
      </div>

       <div class="col-8">
          <label for="mother">Mother's Name</label>
          <input type="text" class="form-control" name="mother" id="exampleInputEmail1" aria-describedby="emailHelp" value="mother">
          
      </div>

<div class="col-8">
          <label for="m_address">Present Addres</label>
          <input type="text" class="form-control" name="M_address" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->M_address}}">
          
      </div>

       <div class="col-8">
          <label for="p_address">Parmanent Address</label>
          <input type="text" class="form-control" name="p_address" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->p_address}}">
          
      </div>


      <div class="col-8">
          <label for="nid">National Id No</label>
          <input type="text" class="form-control" name="nid" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->nid}}">
          
      </div>

       <div class="col-8">
          <label for="bith">Birth Certificate No</label>
          <input type="text" class="form-control" name="birth" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->birth}}">
          
      </div>


     


      <div class="col-8">
    <label for="Nationality">Nationality</label>
    <select class="form-control" name="nationality" id="exampleFormControlSelect1">
      <option>Bangladeshi</option>
      <option>Indian</option>
      <option>pakistani</option>
    </select>
  </div>


      <div class="col-8">
          <label for="dob">Date Of Birth</label>
          <input type="Date" class="form-control" name="dob" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->dob}}">
          
      </div>

       <div class="col-8">
          <label for="etin">E-Tin No</label>
          <input type="text" class="form-control" name="etin" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->etin}}">
          
      </div>



       <div class="col-8">
    <label for="profession">Profession</label>
    <select class="form-control"  id="exampleFormControlSelect1" name="profession">
      <option>Doctor</option>
      <option>Engineer</option>
      <option>Teacher</option>
      <option>Small Businessman</option>
      <option>labour</option>
      <option>Driver</option>
      <option>Others</option>
      
    </select>
  </div>



   <div class="col-8">
    <label for="education">Educational Qualificaiton</label>
    <select class="form-control" id="exampleFormControlSelect1" name="education">
      <option>PhD</option>
      <option>Master or equivalent Degree</option>
      <option>Honours or equivalent Degree </option>
      <option>HSC or equivalent Degree</option>
      <option>SSC or equivalent Degree </option>
      <option>JSC or equivalent Degree</option>
      <option>Others </option>
    </select>
  </div>


      <div class="col-8">
          <label for="m_income">Monthly Income</label>
          <input type="text" class="form-control" name="m_income" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->m_income}}">
          
      </div>

    

       <div class="col-8">
    <label for="marital"> Marital Status</label>
    <select class="form-control" name="marital" id="exampleFormControlSelect1">
      <option>Married</option>
      <option>Single</option>
      <option>Divorce</option>
      <option>Others </option>
    </select>
  </div>



    <div class="col-8">
          <label for="phone">Contact Number</label>
          <input type="number" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->phone}}">
          
      </div>


      <div class="col-8">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->email}}">
      </div>


       <div class="col-8">
          <label for="n_name">Nominee's Name</label>
          <input type="text" class="form-control" name="n_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->n_name}}"> 
      </div>


      <div class="col-8">
          <label for="relation">Relation with Nominee</label>
          <input type="text" class="form-control" name="relation" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->relation}}">
          
      </div>

      



          <div class="col-8">
          <label for="f_name">Nominee's Father Name</label>
          <input type="text" class="form-control" name="n_father" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->n_father}}">
          
      </div>


      <div class="col-8">
          <label for="m_mother">Nominee's Mother's Name</label>
          <input type="text" class="form-control" name="n_mother" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->n_mother}}">
          
      </div>

       <div class="col-8">
          <label for="n_nationality">Nationality</label>
          <input type="text" class="form-control" name="n_nationality" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->n_nationality}}">
          
      </div>


             <div class="col-8">
          <label for="n_nid">NID</label>
          <input type="text" class="form-control" name="n_nid" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$account->n_nid}}">
          
      </div>


      


       </div>
       <div class="col-10">
        <button type="submit" class="btn btn-success">Submit</button>
        </div> 
      
    </form>

</div>

      @endsection