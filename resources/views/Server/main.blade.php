@extends('Server.master')
<meta charset="UTF-8" />
<title>Your magnificent experience relay with our DFW Taxi Riders service</title>
        <meta name="description" content="Experience the joy of luxury travel with our DFW black car and limo services. Book now for a truly unforgettable journey like never before."/>
         <meta name="keywords" content="DFW Taxi Riders,DFW Taxi Riders,DFW black car , dfw black car service, dfw black car dallas, dfw black car service llc, dfw black car and limo, dfw black limo service dallas"/>
         <meta name="country" content="Waxahachie ,Waco, Rockwall , Rowley ,Haslet ,Saginaw ,Heath ,Ronok,Southlake,North lake, Keller ,Westlake ,Justin, DFW airport ,Irving, Denton ,Plano, Richardson ,McKinney ,Aubrey, Little Elm, Frisco, Grapevine ,Lewisville ,Dallas, Fort worth ,Hurst, Euless ,North Richland Hill ,Haltom city, Garland ,Grand prairie ,Mansfield ,Arlington ,Prosper ,Austin, Oklahoma ,San Antonio, Richardson, Texas, TX, tx, united states of America,U.S,USA,U.S.A"/>
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hello {{Auth::user()->name??"jhon doe"}}!</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('MainIndex')}}">Dashboard</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        
    </div>
</div>

     @php
      $total_booking = App\Models\BookingManage::get()->count();
    @endphp

<div class="container-fluid">
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card border-end">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">{{@$total_booking??0}}</h2>
                            
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate text-center">Total Rental
                                        
                        </h6>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

  @php
    $currentMonth = now()->month;
    $currentYear = now()->year;
    $total_booking_this_month = App\Models\BookingManage::whereMonth('created_at', $currentMonth)
                                                      ->whereYear('created_at', $currentYear)
                                                      ->count();
@endphp

    <div class="col-sm-6 col-lg-3">
        <div class="card border-end ">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">{{@$total_booking_this_month??0}}</h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate text-center">
                            Rental This Month
                        </h6>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

  @php
    $lastMonth = now()->subMonth()->month;
    $lastYear = now()->subMonth()->year;
    $total_booking_last_month = App\Models\BookingManage::whereMonth('created_at', $lastMonth)
                                                        ->whereYear('created_at', $lastYear)
                                                        ->count();
@endphp

    <div class="col-sm-6 col-lg-3">
        <div class="card border-end ">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">{{@$total_booking_last_month??0}}</h2>
                            
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate text-center">Rental Last Month
                        </h6>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
        @php
      $total_vehicle = App\Models\VehicleManage::get()->count();
    @endphp
    <div class="col-sm-6 col-lg-3">
        <div class="card border-end ">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">{{@$total_vehicle??0}}</h2>
                            
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate text-center">Total Vehicle
                        </h6>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  
</div>
<!-- End First Cards -->

<!-- Start Location and Earnings Charts Section -->
    <!-- Start Location and Earnings Charts Section -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <h4 class="card-title mb-0">Earning Statistics</h4>
                                    <div class="ms-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="javascript:void(0)">Insert</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Update</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-4 mb-5">
                                    <div class="stats ct-charts position-relative" style="height: 315px;"></div>
                                </div>
                                <ul class="list-inline text-center mt-4 mb-0">
                                    <li class="list-inline-item text-muted fst-italic">Earnings for this month</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
<!-- End Location and Earnings Charts Section -->

 @php
      $list = App\Models\BookingManage::with(['Vehicle'])->OrderBy('id','desc')->get()->take(6);
    @endphp

 
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Upcomming Rentals</h4>
                                
                                <div class="table-responsive">
                                    <table id="default_order" class="table border table-striped table-bordered text-nowrap"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Date</th>
                                                <th>CUSTOMER INFO</th>
                                                <th>CAR</th>
                                                <th>PICKUP</th>
                                                <th>DROP OFF</th>
                                                <!--<th>TOTAL</th>-->
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            @foreach(@$list as $key=>$l)
                                            <tr>
                                                <td>
                                                <a href="booking-details.php">
                                                <a href="{{route('BookingDetails',@$l->id)}}" class="btn waves-effect waves-light btn-outline-primary">
                                                    {{@$l->reg_id}}
</a>
                                                </a>                
                                                </td>
                                                <td>{{ now()->format('d/m/Y h:i A') }}</td>
                                                <td>{{@$l->f_name}} {{@$l->l_name}}</td>
                                                <td>{{@$l->Vehicle->title}}</td>
                                                <td>{{ $l->pickup_date }} <br> {{ date('(g:i A)', strtotime($l->pickup_time)) }}</td>
                                                <td>{{ $l->drowp_date }} <br> {{ date('(g:i A)', strtotime($l->drowp_time)) }}</td>
                                              <!--<td>-->
                                                  
                                              <!--    @if(isset($l->total_amount) && isset($l->hours_distance))-->
                                                  
                                              <!--   ${{ ($l->total_amount ) * ($l->hours_distance ) }}-->
                                                  
                                                  
                                                 
                                                  
                                              <!--    @endif-->
                                                  
                                                  
                                                  
                                              <!--    </td>-->
                                              
                                                
                                                <td>
                                                    @if(@$l->payments=='Cash')
                                                <button type="button" class="btn btn-info btn-rounded">
                                                <i class="far fa-money-bill-alt"></i> Cash
                                                </button>      
                                                
                                                @elseif(@$l->payments=='Paypal')
                                                <button type="button" class="btn btn-info btn-rounded">
                                                <i class="fab fa-cc-paypal"></i> PayPal
                                                </button>
                                                @endif
                                                </td>
                                            </tr>

                                            @endforeach
                                      
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Start Top Leader Table -->
<!-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Top Leaders</h4>
                    <div class="ms-auto">
                        <div class="dropdown sub-dropdown">
                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                id="dd1" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i data-feather="more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                <a class="dropdown-item" href="javascript:void(0)">Insert</a>
                                <a class="dropdown-item" href="javascript:void(0)">Update</a>
                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">Team Lead
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Project
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Team</th>
                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                    Status
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                    Weeks
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Budget</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-top-0 px-2 py-4">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="me-3"><img
                                                src="{{asset('Server/assets/images/users/widget-table-pic1.jpg')}}"
                                                alt="user" class="rounded-circle" width="45"
                                                height="45" /></div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                Gover</h5>
                                            <span class="text-muted font-14">hgover@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">Elite Admin</td>
                                <td class="border-top-0 px-2 py-4">
                                    <div class="popover-icon">
                                        <a class="btn btn-primary rounded-circle btn-circle font-12"
                                            href="javascript:void(0)">DS</a>
                                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                            href="javascript:void(0)">SS</a>
                                        <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item"
                                            href="javascript:void(0)">RP</a>
                                        <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                            href="javascript:void(0)">+</a>
                                    </div>
                                </td>
                                <td class="border-top-0 text-center px-2 py-4"><i
                                        class="fa fa-circle text-primary font-12"
                                        data-bs-toggle="tooltip" data-placement="top"
                                        title="In Testing"></i></td>
                                <td
                                    class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                    35
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">$96K
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="me-3"><img
                                                src="{{asset('Server/assets/images/users/widget-table-pic2.jpg')}}"
                                                alt="user" class="rounded-circle" width="45"
                                                height="45" /></div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Daniel
                                                Kristeen
                                            </h5>
                                            <span class="text-muted font-14">Kristeen@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-muted px-2 py-4 font-14">Real Homes WP Theme</td>
                                <td class="px-2 py-4">
                                    <div class="popover-icon">
                                        <a class="btn btn-primary rounded-circle btn-circle font-12"
                                            href="javascript:void(0)">DS</a>
                                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                            href="javascript:void(0)">SS</a>
                                        <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                            href="javascript:void(0)">+</a>
                                    </div>
                                </td>
                                <td class="text-center px-2 py-4"><i
                                        class="fa fa-circle text-success font-12"
                                        data-bs-toggle="tooltip" data-placement="top" title="Done"></i>
                                </td>
                                <td class="text-center text-muted font-weight-medium px-2 py-4">32</td>
                                <td class="font-weight-medium text-dark px-2 py-4">$85K</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-4">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="me-3"><img
                                                src="{{asset('Server/assets/images/users/widget-table-pic3.jpg')}}"
                                                alt="user" class="rounded-circle" width="45"
                                                height="45" /></div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Julian
                                                Josephs
                                            </h5>
                                            <span class="text-muted font-14">Josephs@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-muted px-2 py-4 font-14">MedicalPro WP Theme</td>
                                <td class="px-2 py-4">
                                    <div class="popover-icon">
                                        <a class="btn btn-primary rounded-circle btn-circle font-12"
                                            href="javascript:void(0)">DS</a>
                                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                            href="javascript:void(0)">SS</a>
                                        <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item"
                                            href="javascript:void(0)">RP</a>
                                        <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                            href="javascript:void(0)">+</a>
                                    </div>
                                </td>
                                <td class="text-center px-2 py-4"><i
                                        class="fa fa-circle text-primary font-12"
                                        data-bs-toggle="tooltip" data-placement="top" title="Done"></i>
                                </td>
                                <td class="text-center text-muted font-weight-medium px-2 py-4">29</td>
                                <td class="font-weight-medium text-dark px-2 py-4">$81K</td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0 px-2 py-4">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="me-3"><img
                                                src="{{asset('Server/assets/images/users/widget-table-pic4.jpg')}}"
                                                alt="user" class="rounded-circle" width="45"
                                                height="45" /></div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Jan
                                                Petrovic
                                            </h5>
                                            <span class="text-muted font-14">hgover@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-bottom-0 text-muted px-2 py-4 font-14">Hosting Press
                                    HTML</td>
                                <td class="border-bottom-0 px-2 py-4">
                                    <div class="popover-icon">
                                        <a class="btn btn-primary rounded-circle btn-circle font-12"
                                            href="javascript:void(0)">DS</a>
                                        <a class="btn btn-success text-white font-20 rounded-circle btn-circle"
                                            href="javascript:void(0)">+</a>
                                    </div>
                                </td>
                                <td class="border-bottom-0 text-center px-2 py-4"><i
                                        class="fa fa-circle text-danger font-12"
                                        data-bs-toggle="tooltip" data-placement="top"
                                        title="In Progress"></i></td>
                                <td
                                    class="border-bottom-0 text-center text-muted font-weight-medium px-2 py-4">
                                    23</td>
                                <td class="border-bottom-0 font-weight-medium text-dark px-2 py-4">$80K
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Top Leader Table -->
</div>
@endsection