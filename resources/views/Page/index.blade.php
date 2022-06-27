@extends('layouts.stuff')

@section('Somiti', 'Small banking')


@section('content')

<div class="slider">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
                <img src="{{ asset('dashboard/img/front.jpg') }}" class="img-fluid"  alt="first">
                <div class="carousel-caption d-none d-md-block">
                  <div  class="title">
                  <h5 class="">Samiti</h5>
                  <p>Our mission to make poor people financially independent</p>
                  </div>
                </div>

              </div>
                  
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

   </div>



   <div>
     <h1 style="text-align: center; font-family: arial">Why Choose Us</h1>
   </div>

   <div class="first-col" >

    <div class="container" >   
    <div class="row" >
    
        <div class="col-md">
    
        <img src="{{ asset('dashboard/img/fund.png') }}" alt="design" width="auto"  height="auto"  class="img-fluid" id="webside">
    </div>
    <div class="col-md">  
        <div class="web1">
            <h3> Funding</h3>    
            <p>Funding of MFI activities has come primarily from outright donor grants, government subsidies, and often debt capital, including debt with non-market terms favorable to the MFI. These traditional sources of MFI financing may not be sufficient to allow MFIs to provide maximum services.
                    
                    
    
            </p>
            </div>
    </div>
       
    </div>
    </div>
    </div>
    
    
    <div class="second-col" >
    
            <div class="container" >   
            <div class="row" >
            
    
    
            <div class="col-md">  
                <div class="web2">
                    <h3> Social Economy</h3>  
    
                    <p> The social economy is formed by a rich diversity of enterprises and organisations, such as cooperatives, mutuals, associations, foundations, social enterprises and paritarian institutions, sharing common values and features: Primacy of the individual and the social objective over capital.</p>
                </div>
            </div>
    
       
            
                <div class="col-md"> 
                    <img src="{{ asset('dashboard/img/social.jpg') }}" alt="design" width="600px" height="400px"  class="img-fluid" id="dv">
    
                 </div>
    
    
                </div>
            </div>
    </div>
    
    
    
    
    <div class="first-col" >
    
        <div class="container" >   
        <div class="row" >
        
            <div class="col-md">
        
            <img src="{{ asset('dashboard/img/entrepreneur.jpg') }}" alt="design" width="auto" height="auto"  class="img-fluid" id="webside">
        </div>
        <div class="col-md">  
            <div class="web1">
                <i class="fal fa-browser"></i>
                <h3> For Entrepreneurs</h3>    
                <P>We are a non-traditional small business financing option for growing and emerging businesses. We can lend outside the parameters of conventional business financing to ensure entrepreneurs with viable projects have the capital they need to propel their business forward. We also partner with banks, economic development lenders, investors and others as a gap lender on projects.</P>
                </div>
        </div>
           
        </div>
        </div>
        </div>
    

   <div>
     
     <table style="margin: 50px 0px 0px 0px;" class="table table-borderless text-center">
  <thead style="font-size: 21px; font-family: arial">
    <tr>
      <th scope="col">Office </th>
      <th scope="col">Contact</th>
      <th scope="col">Next Step</th>
    </tr>
  </thead>
  <tbody style="font-size: 15px; font-family: arial">
    <tr>
      <td>Choidana, NU, Gazipur-1704</td>
      <td>Phone: 01627889973 <br>Email: info@asharaloltd.com</td>
      <td>We want to make a Financial Zone here in Gazipur.</td>
    </tr>
  </tbody>
</table>
   </div>



   <footer class="foot">
      
                <div class="container text-center">
                    <div class="footer">
                        <div class="footi" id="footerline">
                            &copy; 2021 <a target="_blank" href="https://dynamicrobosoft.com/" title="Software Company"> Software Design and Distributed By Dynamic Robo Soft</a>
                        </div>
                        <div class="">
                            
                        </div>
                    </div>
                </div>
            
      </footer>




  @endsection