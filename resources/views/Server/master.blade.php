<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Experience the joy of luxury travel with our DFW black car and limo services. Book now for a truly unforgettable journey like never before." />
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Server/assets/images/favicon.png')}}">
    <!-- Custom CSS -->
    <!--<link href="{{asset('Server/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">-->
    <!--<link href="{{asset('Server/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">-->
    <!--<link href="{{asset('Server/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />-->
    
        <!--<link rel="stylesheet" href="{{asset('Server/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" />-->
      <!--<link rel="stylesheet" href="{{asset('Server/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css')}}" />-->
    
    <!-- Custom CSS -->
    <!--<link href="{{asset('Server/dist/css/style.css')}}" rel="stylesheet">-->
    @include('Server.include.c3_min')
    @include('Server.include.chartist_min')
    @include('Server.include.jquery_jvectormap')
    @include('Server.include.dataTables_bootstrap4')
    @include('Server.include.responsive')
    @include('Server.include.main_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <title>Your magnificent experience relay with our DFW Taxi Riders service</title>
    <meta name="keywords" content="DFW Taxi Riders,DFW Taxi Riders,DFW black car , dfw black car service, dfw black car dallas, dfw black car service llc, dfw black car and limo, dfw black limo service dallas"/>
    <meta name="country" content="Waxahachie ,Waco, Rockwall , Rowley ,Haslet ,Saginaw ,Heath ,Ronok,Southlake,North lake, Keller ,Westlake ,Justin, DFW airport ,Irving, Denton ,Plano, Richardson ,McKinney ,Aubrey, Little Elm, Frisco, Grapevine ,Lewisville ,Dallas, Fort worth ,Hurst, Euless ,North Richland Hill ,Haltom city, Garland ,Grand prairie ,Mansfield ,Arlington ,Prosper ,Austin, Oklahoma ,San Antonio, Richardson, Texas, TX, tx, united states of America,U.S,USA,U.S.A"/>
    
       
    
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- End Preloader Area -->
    

    <!-- Main div Start -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        
        <!-- Header Start -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-lg">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>

                    <!-- Logo -->

                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="{{route('home')}}">
                            <img src="{{asset('Server/assets/images/logo.png')}}" alt="" class="img-fluid">
                        </a>
                    </div>

                    <!-- End Logo -->


                    <!-- Toggle which is visible on mobile only -->

                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">

                    <!-- Right side toggle and nav items -->

                    <ul class="navbar-nav float-end">
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                               
                                @if(Auth::user()->image!=null)
                                <img src="{{asset('upload/Profile/'.Auth::user()->image)}}" alt="user" class="rounded-circle"
                                    width="40">

                                    @else
                                    <img src="{{asset('Server/assets/images/users/profile-pic.jpg')}}" alt="user" class="rounded-circle"
                                    width="40">
                                    @endif
                                
                                
                                    <span class="ms-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">{{Auth::user()->name??"johone doe"}}</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="{{route('ProfileUpdateForm')}}"><i data-feather="user"
                                        class="svg-icon me-2 ms-1"></i>
                                    My Profile</a>
                                
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('AccountSettingForm')}}"><i data-feather="settings"
                                        class="svg-icon me-2 ms-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i data-feather="power"
                                        class="svg-icon me-2 ms-1"></i>
                                    Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                               
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header End -->
        <!-- Sidebar Start -->
         <aside class="left-sidebar" data-sidebarbg="skin6">
            
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('home')}}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                       

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('BookingList')}}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Booking
                                </span></a>
                        </li>
                        
                          <li class="list-divider"></li>
       <li class="sidebar-item"> 
         <a class="sidebar-link sidebar-link" href="{{route('TestimonialIndex')}}"
            aria-expanded="false"><i class="fa fa-list"></i><span
            class="hide-menu">Testimonial Manage
         </span></a>
      </li>
                        
                              <li class="list-divider"></li>

   
      <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
              aria-expanded="false"><i class="fa fa-list"></i><span
                  class="hide-menu">Blog Manage</span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
              <li class="sidebar-item"><a href="{{route('BlogCreate')}}" class="sidebar-link"><span
                          class="hide-menu">Add Blog
                      </span></a>
              </li>
              <li class="sidebar-item"><a href="{{route('BlogIndex')}}" class="sidebar-link"><span
                          class="hide-menu">All Blog
                      </span></a>
              </li>
              
          </ul>
      </li>
                        <li class="list-divider"></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('CouponList')}}"
                                aria-expanded="false"><i class="fa fa-list"></i><span
                                    class="hide-menu">Coupon
                                </span></a>
                        </li>
                        <li class="list-divider"></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('VehicleManageList')}}"
                                aria-expanded="false"><i class="fa fa-car"></i><span
                                    class="hide-menu">Vehicle
                                </span></a>
                        </li>
                        <li class="list-divider"></li>

                        @if(Auth::user()->role==2)
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('UserRoleList')}}"
                                aria-expanded="false"><i class="fa fa-users"></i><span
                                    class="hide-menu">User Role
                                </span></a>
                        </li>
                        @endif


                        <li class="list-divider"></li>                        

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('ContactMessageList')}}"
                                aria-expanded="false"><i class="fa fa-address-book"></i><span
                                    class="hide-menu">Contact
                                </span></a>
                        </li>
                        <li class="list-divider"></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('LogManageList')}}"
                                aria-expanded="false"><i class="fa fa-history"></i><span
                                    class="hide-menu">Log
                                </span></a>
                        </li>
                        <li class="list-divider"></li>

                        
                        
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"
                                aria-expanded="false"><i class="fa fa-sign-out"></i><span
                                    class="hide-menu">Logout</span></a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                        </li>
                    </ul>
                </nav>
               
            </div>
           
        </aside>
         <!-- Sidebar End -->

        <div class="page-wrapper">
            
            
                <!-- Start First Cards -->
             
                @yield('content')


            
            <!-- End Container fluid  -->


            <!-- footer -->

           
 <!-- Footer Section Start -->
 <footer class="footer text-center text-muted">
    Copyright Ⓒ {{date('Y')}}; DFW Taxi Riders Transportation Services . All right reserved. <br> Designed and Developed by <a
        href="https://www.basetechit.com/">Basetechit</a>.
</footer>
<!-- Footer Section End -->





            <!-- End footer -->

        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- Main div End -->

    <!--<script src="{{asset('Server/assets/libs/jquery/dist/jquery.min.js')}}"></script>-->
    <!--<script src="{{asset('Server/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>-->
    <!-- apps -->
    <!-- apps -->
    <!--<script src="{{asset('Server/dist/js/app-style-switcher.js')}}"></script>-->
    <!--<script src="{{asset('Server/dist/js/feather.min.js')}}"></script>-->
    <!--<script src="{{asset('Server/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>-->
    <!--<script src="{{asset('Server/dist/js/sidebarmenu.js')}}"></script>-->
    <!--Custom JavaScript -->
    <!--<script src="{{asset('Server/dist/js/custom.min.js')}}"></script>-->
    <!--This page JavaScript -->
    <!--<script src="{{asset('Server/assets/extra-libs/c3/d3.min.js')}}"></script>-->
    <!--<script src="{{asset('Server/assets/extra-libs/c3/c3.min.js')}}"></script>-->
    <!--<script src="{{asset('Server/assets/libs/chartist/dist/chartist.min.js')}}"></script>-->
    <!--<script src="{{asset('Server/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>-->
    <!--<script src="{{asset('Server/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>-->
    <!--<script src="{{asset('Server/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>-->
    <!--<script src="{{asset('Server/dist/js/pages/dashboards/dashboard1.min.js')}}"></script>-->
    <!-- ck editor js -->
    <!--<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>-->
    

        
        
        <!--<script src="{{asset('Server/assets/libs/jquery/dist/jquery.min.js')}}"></script>-->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset('Server/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Server/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('Server/dist/js/feather.min.js')}}"></script>
    <script src="{{asset('Server/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    
    <script src="{{asset('Server/dist/js/sidebarmenu.js')}}"></script>
    
    <script src="{{asset('Server/assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{asset('Server/assets/extra-libs/c3/c3.min.js')}}"></script>
    <script src="{{asset('Server/assets/libs/chartist/dist/chartist.min.js')}}"></script>
    
    <script src="{{asset('Server/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('Server/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('Server/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('Server/dist/js/pages/dashboards/dashboard1.js')}}"></script>
 
    <script src="{{asset('Server/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('Server/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('Server/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    <!-- ck editor js -->
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('Server/dist/js/custom.min.js')}}"></script>
    
    
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('footer')

    <script>
         $(document).on('click','#delete',function(e){
          e.preventDefault();
            var link = $(this).attr('href');
    
               Swal.fire({
              title: 'Are you sure?',
              text: "You want to Delete This Item!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
    
               
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                window.location.href = link;
                DeleteAction();
              }else{
              Swal('Safe Data');
              }
          })
    
        })

    </script>

                                                                    
                                                                                                                                                 
</body>

</html>
