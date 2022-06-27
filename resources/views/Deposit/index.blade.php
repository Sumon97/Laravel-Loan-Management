@if(count($deposits) > 0) 
    
        @foreach($deposits as $deposit)
     
    


<h3> Loan Amount: {{$deposit->amount}}</h3>




<a class="btn btn-sm btn-primary" href="/Deposit/{{$deposit->id}}">show</a>





  
        @endforeach
    @else 
      <p>No account found </p>


    


            
    @endif  

   