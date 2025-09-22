<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name=”robots” content="index, follow">
    <meta name='copyright' content='Wezapps Limited'>
    <meta name='language' content='en'>
    <meta name='rating' content='General'>
    <meta name="revisit-after" content="30 days">
    <meta name='author' content='Wezapps Limited, contact@wezapps.com'>
    <meta name="google-site-verification" content="UVUn0se8IqFssSd3SNHFpurtTVjjSQM3AgaDdsF4Wpk" />

    <meta name="description"
        content="Experience the joy of luxury travel with our DFW Taxi Riders services in Dallas,Tx. Book now for a truly unforgettable journey like never before." />
    <meta name="keywords"
        content="DFW Taxi Riders,DFW black car , dfw black car service, dfw black car dallas, dfw black car service llc, DFW Taxi Riders, dfw black limo service dallas,dallas love field to dallas fort worth,black car limo,legacy limo,dfw to downtown dallas,dfw to dal airport,dallas to dfw,dallas airport to plano tx,dfw airport to frisco,car service fort worth,dfw black car service,car service dallas tx,dallas limo and black car service,dfw airport limo car service dallas tx,area car service,dallas black car service,dfw car service,dallas car service,black car service dallas,dfw airport limo service,limousine dfw airport,car service fort worth,black car service dallas tx,dfw airport limousine service,dfw airport limousine,DFW airport service" />
    <meta name="country"
        content="Dallas, Fort worth ,Waxahachie ,Waco, Rockwall , Rowley ,Haslet ,Saginaw ,Heath ,Ronok,Southlake,North lake, Keller ,Westlake ,Justin, DFW airport ,Irving, Denton ,Plano, Richardson ,McKinney ,Aubrey, Little Elm, Frisco, Grapevine ,Lewisville ,Hurst, Euless ,North Richland Hill ,Haltom city, Garland ,Grand prairie ,Mansfield ,Arlington ,Prosper ,Austin, Oklahoma ,San Antonio, Richardson, Texas, TX, tx, united states of America,U.S,USA,U.S.A" />


    <link rel=“canonical” href=“https://www.dfwtaxiriders.com” />
    <link rel=“DfwTaxiRiders” href=“https://www.dfwtaxiriders.com” />
    <!-- Google Fonts -->
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'" />
    <link rel="preload" href="https://fonts.googleapis.com/css?family=JetBrains Mono&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'" />

    <link rel="preload" href="https://fonts.googleapis.com/css?family=JetBrains Mono&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Site All Style Sheet Css -->
    <link href="{{asset('Client/assets/lib/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('Client/assets/lib/css/et-line.css')}}" rel="stylesheet" />
    <link href="{{asset('Client/assets/lib/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('Client/assets/lib/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('Client/assets/lib/css/animate.min.css')}}" rel="stylesheet" />
    {{-- <link href="{{asset('Client/assets/lib/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('Client/assets/lib/css/owl.theme.default.min.css')}}" rel="stylesheet" /> --}}
    <!-- Owl Carousel core CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Owl Carousel default theme -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-UTNPcHqM4fXq4Kx1zT/1FqnrqXXi8cXnT8vPq0WzSGrmjT9d/kwL3aJqkWmH4u7JWhU04rR+Jr2hUIGKQwYb8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{asset('Client/assets/lib/css/swiper.min.css')}}" rel="stylesheet" />
    <link href="{{asset('Client/assets/lib/css/slick.min.css')}}" rel="stylesheet" />
    <link href="{{asset('Client/assets/lib/css/rev-slider.min.css')}}" rel="stylesheet" />
    <link href="{{asset('Client/assets/lib/css/nice-select.css')}}" rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />

    <!-- Site Main Style Sheet Css -->
    <link href="{{asset('Client/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('Client/assets/css/responsive.css')}}" rel="stylesheet" />

    <title>Your magnificent experience relay with our DFW Taxi Riders service.</title>
</head>

<body>
    <!-- Navbar Area Start -->

    @include('Client.common.header')




    <!-- Navbar Area End -->

    <!-- Floating Social Menu start -->

    @yield('content')
    <!-- Floating Social Menu end -->


    <!-- Home Slider Section Start -->
    @yield('slider')
    <!-- Home Slider Section End -->

    <!-- Home Counter Section start -->
    @yield('counter')
    <!-- Home Counter Section end -->

    <!-- Home Counter Section start -->
    @yield('counter_two')
    <!-- Home Counter Section end -->

    <!-- Parallax Section Start -->
    @yield('parallax')
    <!-- Parallax Section End -->

    <!--our benefits section start-->
    {{-- @yield('about') --}}
    @yield('our_benefits')
    <!-- our benefits section end -->

       <!-- What Section Start -->
    @yield('feature_two')
    <!-- What Section End -->

    <!-- Requirement Section start -->
    @yield('feature_three')
    <!-- Requirement Section end -->

    <!--Choose your car section start-->
    {{-- @yield('about') --}}
    @yield('choose_your_car')
    <!-- Choose your car section end -->

            <!-- Requirement Section start -->
    @yield('latest_news')
    <!-- Requirement Section end -->




    <!-- Testimonial Section Start -->
    @yield('testimonial')
    <!-- Testimonial Section End -->


    <!-- Service Section Start -->
    @yield('service')
    <!-- Service Section End -->

    <!-- Fleet Section Start -->
    {{-- @yield('fleet') --}}
    <!-- Fleet Section End -->

    <!-- Driver Section Start -->
    @yield('team')
    <!-- Driver Section End -->

    <!-- Driver Section Start -->
    @yield('have_question')
    <!-- Driver Section End -->





    <!-- Footer Section Start -->
    @include('Client.common.footer')

    <!-- Footer Section End -->

    <!-- Site All Jquery Js -->
    <!-- Site All Jquery Js -->
    <script src="{{asset('Client/assets/lib/js/jquery-3.5.1.min.js')}}"></script>
    {{-- <script src="{{asset('Client/assets/lib/js/owl.carousel.min.js')}}"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YeR+f6QvJ6f8O3vK5gT3pL+sZyjYb06PpF0X+6T6h9N4JmR6R+7lE4A+7y6O+3tD6kY0aD+G+OZG3f2mCz0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


    {{-- <script src="{{asset('Client/assets/lib/js/jquery.min.js')}}"></script> --}}
    <script src="{{asset('Client/assets/lib/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Client/assets/lib/js/plugins.js')}}"></script>
    <script src="{{asset('Client/assets/lib/js/swiper.min.js')}}"></script>
    <script src="{{asset('Client/assets/lib/js/slick.js')}}"></script>
    <script src="{{asset('Client/assets/lib/js/rev-slider.min.js')}}"></script>
    <script src="{{asset('Client/assets/lib/js/wow.min.js')}}"></script>
    <script src="{{asset('Client/assets/lib/js/image-preloader.js')}}"></script>
    <script src="{{asset('Client/assets/lib/js/counter.js')}}"></script>
    <script src="{{asset('Client/assets/lib/js/image-preloader.js')}}"></script>
    <script src="{{asset('Client/assets/lib/js/jquery.nice-select.min.js')}}"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{asset('Client/assets/lib/js/wow.min.js')}}" async></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Site Main js-->
    <script src="{{asset('Client/assets/js/main.js')}}"></script>

    @yield('footer')

    <script>
        $(document).ready(function () {
            $(".testimonial-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                dots: true,
                nav: false
            });
        });
    </script>

    <script>
        $(document).on('click', '#delete', function (e) {
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
                } else {
                    Swal('Safe Data');
                }
            })

        })

    </script>

    <!--@yield('footer')-->

    <!-- Jquery End -->
</body>

</html>
