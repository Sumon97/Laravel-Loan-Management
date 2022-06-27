
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <script src="https://kit.fontawesome.com/6f1898888a.js" crossorigin="anonymous"></script>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('dashboard/img/iconlogo.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Bank
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('dashboard/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="dashboard/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Bank
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Account/create">
               <i class="fas fa-user-plus"></i>
              <p>Create New Account</p>
            </a>
          </li>

           <li class="nav-item ">
            <a class="nav-link" href="/search">
               <i class="fas fa-search"></i>
              <p>Search Account</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/view">
              <i class="fas fa-search-dollar"></i>
              <p>Profit Check</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Account">
              <i class="fas fa-users"></i>
              <p>Total Accounts</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Loan">
              <i class="fas fa-coins"></i>
              <p>Loans</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Emi">
              <i class="fas fa-coins"></i>
              <p>Installments</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/reg">
              <i class="fas fa-user-plus"></i>
              <p>Add Stuff</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Fdeposit">
              <i class="fas fa-funnel-dollar"></i>
              <p> Fixed Deposits</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="/Invest/create">
              <i class="fas fa-wallet"></i>
              <p>Invest</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="/Bwithdraw/create">
              <i class="fas fa-money-bill-wave"></i>
              <p>Withdraw</p>
            </a>
          </li>

            <li class="nav-item ">
            <a class="nav-link" href="/Expenses/create">
              <i class="fas fa-dollar"></i>
              <p>Create new Cost Type</p>
            </a>
          </li>

           <li class="nav-item ">
            <a class="nav-link" href="/Cost/create">
              <i class="fas fa-file-invoice-dollar"></i>
              <p>Cost Create</p>
            </a>
          </li>


            <li class="nav-item ">
            <a class="nav-link" href="/Bacc/create">
              <i class="fas fa-file-invoice-dollar"></i>
              <p>Reserve Bank</p>
            </a>
          </li>


          <li class="nav-item ">
            <a class="nav-link" href="/Bacc">
              <i class="fas fa-file-invoice-dollar"></i>
              <p>Reserve/Restore Amount</p>
            </a>
          </li>


             <li class="nav-item ">
            <a class="nav-link" href="/Salary/create">
              <i class="fab fa-amazon-pay"></i>
              <p>Pay Salary</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="/Employee/create">
              <i class="fas fa-user-check"></i>
              <p>Add Employee Record</p>
            </a>
          </li>


           <li class="nav-item ">
            <a class="nav-link" href="/Active">
              <i class="fas fa-funnel-dollar"></i>
              <p>Collections</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="/Apply">
              <i class="fas fa-feather"></i>
              <p>Loan Applications</p>
            </a>
          </li>


           <li class="nav-item ">
            <a class="nav-link" href="/Statement/create">
              <i class="fas fa-user-clock"></i>
              <p>Account Statement</p>
            </a>
          </li>

           <li class="nav-item ">
            <a class="nav-link" href="/Report/create">
              <i class="fas fa-info-circle"></i>
              <p>All Report</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                 <!-- <a class="dropdown-item" href="#">Log out</a> -->


                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                               
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-sort-amount-up"></i>
                  </div>
                  <p class="card-category">Total Balance</p>
                  <h3 class="card-title">
                    <small>{{$bank}}</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                    <a href="javascript:;">Running</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-coins"></i>
                  </div>
                  <p class="card-category">Totall Revenue</p>
                  <h3 class="card-title"> {{$emi}} BDT</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                     <i class="fas fa-coins"></i>
                  </div>
                  <p class="card-category">Reserve</p>
                  <h3 class="card-title">{{$reserve}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                  </div>
                  <p class="card-category">Totall Loan</p>
                  <h3 class="card-title">{{$loan}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i>Last update
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-mountain"></i>
                  </div>
                  <p class="card-category">Totall Loan Amount</p>
                  <h3 class="card-title">{{$total}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                     <i class="fas fa-funnel-dollar"></i>
                  </div>
                  <p class="card-category">Totall Fixed Deposti Amount</p>
                  <h3 class="card-title">{{$fd}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-money-bill-alt"></i>
                  </div>
                  <p class="card-category">Totall Cost</p>
                  <h3 class="card-title">{{$cost}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-coins"></i>
                  </div>
                  <p class="card-category">Todays Collection</p>
                  <h3 class="card-title">{{$today + $detoday +$instoday}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">

                    <i class="material-icons">access_time</i> Last Update
                  </div>
                </div>
              </div>
            </div>
          </div>


<div class="row">

  <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <a href="/Invest" style="color: white;">  <i class="fas fa-coins"></i> </a>
                  </div>
                  <p class="card-category">Total Invest</p>
                  <h3 class="card-title">
                    <small>{{$invest}} BDT</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                    <a href="javascript:;">Running</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                   <a href="/Bwithdraw" style="color: white;"> <i class="fas fa-coins"></i></a>
                  </div>
                  <p class="card-category">  Totall Bank Withdraw</p>
                  <h3 class="card-title"> {{$bwithdraw}} BDT</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>

  <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                  </div>
                  <p class="card-category">Running Loan</p>
                  <h3 class="card-title">{{$ploan}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-box"></i>
                  </div>
                  <p class="card-category">Totall DPS</p>
                  <h3 class="card-title"> {{$dps}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>

           
  

</div>





<div class="row">

  <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <a href="/Invest" style="color: white;">  <i class="fas fa-users"></i> </a>
                  </div>
                  <p class="card-category">Total Account</p>
                  <h3 class="card-title">
                    <small>{{$account}}</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                    <a href="javascript:;">Last update</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                   <a href="/Bwithdraw" style="color: white;"> <i class="fas fa-coins"></i></a>
                  </div>
                  <p class="card-category">  Totall Bank Withdraw</p>
                  <h3 class="card-title"> {{$bwithdraw}} BDT</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>

  <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                  </div>
                  <p class="card-category">Running Loan Amount</p>
                  <h3 class="card-title">{{$trloan}} BDT</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-box"></i>
                  </div>
                  <p class="card-category">Remaining Loan Amount</p>
                  <h3 class="card-title"> {{$rloan}} BDT</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">access_time</i> Last update
                  </div>
                </div>
              </div>
            </div>

           
  

</div>










      
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <div>
                        <h4> Accounts </h4>
                        <p>Last few Accounts</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
 

<table class="table table-hover">
    <thead>
      <tr class="col-sm">
        <th scope="col">Name</th>
        <th scope="col">Acc Number</th> 
        <th scope="col">Profession</th> 
        <th scope="col">Balance</th> 
      
      </tr>
    </thead>
    <tbody>
    @foreach($acc as $ac) 
      <tr>
        <th scope="row"><a href="/Account/{{$ac->id}}">{{$ac->name}}</a></th>
        <td >{{$ac->ac_num}}</td>
        
        <td >{{$ac->profession}}</td>
        <td >{{$ac->balance}} BDT</td>
      </td>
        
      </tr>
      
    </tbody>

    @endforeach
  </table>
  


                    
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-header card-header-warning">
                    <h4 class="card-title">Loans Created</h4>
                    <p class="card-category">New loans</p>
                  </div>
                  <div class="card-body table-responsive">
                    
<table class="table table-hover">
    <thead>
      <tr class="col-sm">
        <th scope="col">Amount</th>
        <th scope="col">Type</th> 
        <th scope="col">Payable</th> 
        <th scope="col">Created</th> 
      
      </tr>
    </thead>
    <tbody>
    @foreach($loans as $lo) 
      <tr>
        <th scope="row">{{$lo->amount}} BDT</th>
        <td >{{$lo->type}}</td>
        <td >{{$lo->payable}} BDT</td>
        <td >{{$lo->created_at->isoFormat('dddd D/M/Y')}} </td>
      </td>
        
      </tr>
      
    </tbody>

    @endforeach
  </table>




                  </div>
                </div>
              </div>






            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Instalments</h4>
                  <p class="card-category">Todays instalments</p>
                </div>
                <div class="card-body table-responsive">
                  
<table class="table table-hover">
    <thead>
      <tr class="col-sm">
        <th scope="col">Name</th> 
        <th scope="col">Amount</th> 
        <th scope="col">Created</th> 
      
      </tr>
    </thead>
    <tbody>
    @foreach($emis as $em) 
      <tr>
        <th scope="row"> <a style="color: #f7a52a;" href="/Account/{{$em->loan->account->id}}">{{$em->loan->account->name}}</a></th>
        <th >{{$em->amount}} BDT</th>
        <td >{{$em->created_at->isoFormat('dddd D/M/Y h:m a')}} </td>
      </td>
        
      </tr>
      
    </tbody>

    @endforeach
  </table>






                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://dynamicrobosoft.com/">
                  Dyanamic Robo Soft
                </a>
              </li>
              <li>
                <a href="https://dynamicrobosoft.com/about">
                  About Us
                </a>
              </li>
              <li>
                <a href="https://dynamicrobosoft.com/robotics">
                  Robotics Plan
                </a>
              </li>
              
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Developed <i class="material-icons">favorite</i> by
            <a href="https://dynamicrobosoft.com/" target="_blank">Dynamic Robo Soft</a> for better Technogly.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="/dashboard/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="/dashboard/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="/dashboard/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="/dashboard/img/sidebar-4.jpg" alt="">
          </a>
        </li>
       
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../dashboard/js/core/jquery.min.js"></script>
  <script src="../dashboard/js/core/popper.min.js"></script>
  <script src="../dashboard/js/core/bootstrap-material-design.min.js"></script>
  <script src="../dashboard/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../dashboard/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../dashboard/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../dashboard/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../dashboard/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../dashboard/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../dashboard/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../dashboard/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../dashboard/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../dashboard/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../dashboard/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../dashboard/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../dashboard/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../dashboard/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../dashboard/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../dashboard/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../dashboard/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>