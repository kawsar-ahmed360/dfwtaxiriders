@extends('Client.master')
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Welcome to DFW Taxi Riders Transportation Services, your premier choice for luxury transportation to and from Dallas-Fort Worth International Airport In Texas,USA"/>
    <meta name="keywords" content="DFW Taxi Riders,DFW Taxi Riders,dfwblackcarlimollc.com,black car limo ,limo service ,limousine service ,Black car limousine ,Corporate car rental ,black car service near me ,best black car service in tx,best limo,service in Texas,best limo service in us,best limo service in USA,best limo service in U.S.A ,best black car rental in Texas,DFW,Dallas fort worth airport car rental,Dallas fort worth airport black car,Dallas fort worth airport limo service Dallas fort worth airport pickup,Dallas fort worth airport drop,Fort worth airport car rental,Texas black car,Texas limo service ,Texas limousine ,texas black car"/>
    <meta name="country" content="Waxahachie ,Waco, Rockwall , Rowley ,Haslet ,Saginaw ,Heath ,Ronok,Southlake,North lake, Keller ,Westlake ,Justin, DFW airport ,Irving, Denton ,Plano, Richardson ,McKinney ,Aubrey, Little Elm, Frisco, Grapevine ,Lewisville ,Dallas, Fort worth ,Hurst, Euless ,North Richland Hill ,Haltom city, Garland ,Grand prairie ,Mansfield ,Arlington ,Prosper ,Austin, Oklahoma ,San Antonio, Richardson, Texas, TX, tx, united states of America,U.S,USA,U.S.A"/>
    <meta name=”robots” content="index, follow">
    <meta name='copyright' content='Wezapps Limited'>
    <meta name='language' content='en'>
    <meta name='rating' content='General'>
    <meta name="revisit-after" content="30 days">
    <meta name="author" content="https://dfwblackcarlimollc.com"/>
    <meta name="author" content="https://www.dfwblackcarlimollc.com"/>
    
    <link rel=“canonical” href=“https://www.dfwblackcarlimollc.com” />
@section('content')

<div class="page-title-area" id="about_us">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="container">
                  <div class="page-title-content">
                     <h2>Booking</h2>
                     <ul>
                        <li><a href="{{route('MainIndex')}}">Home</a></li>
                        <li>Booking</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <section class="booking-area pt-100 pb-100">
         <div class="container">
             <div class="tab-content">
                 <div class="registration-form">
                     <form action="{{route('BookingPost')}}" id="msform" class="msform user-register-form booking-form" method="POST" data-multi-step>
                     @csrf
                     <ul class="registration-list step-list-two">
                             <li class="active">
                                 <a href="javascript:void(0)"> 1</a>
                             </li>
                             <li>
                                 <a href="javascript:void(0)"> 2 </a>
                             </li>
                             <li>
                                 <a href="javascript:void(0)"> 3 </a>
                             </li>
                         </ul>
 
                         <fieldset class="fieldset-info active row mt-60" data-step>
                             <div class="information-all col-md-12 mt-50">
                                 <h3 class="register-title">Enter Ride Details</h3>
                                 <div class="info-forms">
                                     <div class="single-forms">
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa fa-road"></i>
                                             </span>
                                             <select class="Select form--control" name="trip_type" id="trip_type" required>
                                                 <option value="" class="placeholder" disabled selected>Trip Type...</option>
                                                 <option value="One Way">One Way</option>
                                                 <option value="Round Trip">Round Trip</option>
                                                 <option value="As Directed/Hourly">As Directed/Hourly</option>
                                             </select>
 
 
                                         </div>
 
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa fa-car"></i>
                                             </span>
                                             <select class="Select form--control" name="occasion" id="occasion" required>
                                                 <option value="" class="placeholder" disabled selected>Occasion...</option>
                                                 <option value="Airport">Airport</option>
                                                 <option value="Airport (Arrival)">Airport (Arrival)</option>
                                                 <option value="Airport (Departure)">Airport (Departure)</option>
                                                 <option value="Anniversary">Anniversary</option>
                                                 <option value="Bachelor">Bachelor</option>
                                                 <option value="Birthday">Birthday</option>
                                                 <option value="City Tour">City Tour</option>
                                                 <option value="City Transfer">City Transfer</option>
                                                 <option value="Concert">Concert</option>
                                                 <option value="Corporate">Corporate</option>
                                                 <option value="Cruise Ship Transfer">Cruise Ship Transfer</option>
                                                 <option value="Dinner Outing">Dinner Outing</option>
                                                 <option value="Drive Around">Drive Around</option>
                                                 <option value="Funeral">Funeral</option>
                                                 <option value="Gentlemans Night">Gentlemans Night</option>
                                                 <option value="Graduation">Graduation</option>
                                                 <option value="Halloween Tour">Halloween Tour</option>
                                                 <option value="Hen Party">Hen Party</option>
                                                 <option value="Holiday Light Tour">Holiday Light Tour</option>
                                                 <option value="Just For Fun">Just For Fun</option>
                                                 <option value="Ladies Night">Ladies Night</option>
                                                 <option value="Marriage Proposal">Marriage Proposal</option>
                                                 <option value="Medical">Medical</option>
                                                 <option value="Night Out">Night Out</option>
                                                 <option value="Other">Other</option>
                                                 <option value="Prom">Prom</option>
                                                 <option value="Quincea���era">Quincea���era</option>
                                                 <option value="Seaport">Seaport</option>
                                                 <option value="Sightseeing">Sightseeing</option>
                                                 <option value="Staff Party">Staff Party</option>
                                                 <option value="Sweet 16">Sweet 16</option>
                                                 <option value="Tasting Tour">Tasting Tour</option>
                                                 <option value="Tour">Tour</option>
                                                 <option value="Transfer">Transfer</option>
                                                 <option value="Wedding">Wedding</option>
                                                 <option value="Wine Tour">Wine Tour</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="single-forms">
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa fa-user"></i>
                                             </span>
                                             <select class="Select form--control" name="total_passengers" id="total_passengers" required>
                                                 <option value="" class="placeholder" disabled selected>Total Passengers...</option>
 
                                                 <option value="1">1</option>
                                                 <option value="2">2</option>
                                                 <option value="3">3</option>
                                                 <option value="4">4</option>
                                                 <option value="5">5</option>
                                                 <option value="6">6</option>
                                                 <option value="7">7</option>
                                                 <option value="8">8</option>
                                                 <option value="9">9</option>
                                                 <option value="10">10</option>
                                                 <option value="11">11</option>
                                                 <option value="12">12</option>
                                             </select>
                                         </div>
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa ti-briefcase"></i>
                                             </span>
                                             <select class="Select form--control" name="luggage" id="luggage" required>
                                                 <option value="" class="placeholder" disabled selected>Luggage...</option>
 
                                                 <option value="1">1</option>
                                                 <option value="2">2</option>
                                                 <option value="3">3</option>
                                                 <option value="4">4</option>
                                                 <option value="5">5</option>
                                                 <option value="6">6</option>
                                                 <option value="7">7</option>
 
                                             </select>
                                         </div>
                                     </div>
 
                                     <div class="single-forms">
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa fa-calendar-check-o"></i>
                                             </span>
                                             <input type="text" class="form--control datepicker"  data-provide="datepicker" name="pickup_date" id="pickup_date" placeholder="Pickup Date" required />
                                         </div>
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa fa-clock-o"></i>
                                             </span>
                                             <input type="text" class="form--control timepicker hours_cal_pickup_time" name="pickup_time" id="pickup_time" placeholder="Pickup Time" required />
                                         </div>
                                        
                                     </div>
                                     <div id="result"></div>
                                     <div class="single-forms">
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa fa-calendar-check-o"></i>
                                             </span>
                                             <input type="text" class="form--control datepicker" name="drowp_date" id="drowp_date" data-provide="datepicker" placeholder="Drop Off Date" required />
                                         </div>
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa fa-clock-o"></i>
                                             </span>
                                             <input type="text" class="form--control timepicker hours_cal_drop_time" name="drowp_time" id="drowp_time" placeholder="Drop Off Time" required />
                                         </div>
                                     </div>

                                    


                                     <div class="single-forms">
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa fa-map-marker"></i>
                                             </span>
                                             <input class="form--control" type="text" name="pickup_location" id="pickupLocation" placeholder="Pick up address *" required />
                                         </div>
                                         <div class="input-single mt-30">
                                             <span class="login-icon">
                                                 <i class="fa fa-map-marker"></i>
                                             </span>
                                             <input class="form--control" type="text" name="drowp_location" id="dropLocation" placeholder="Drop off address *" required />
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <input type="button" name="name" class="button hours_show first-step-next md-mb-60" value="Choose a vehicle" data-next />
                             </div>
                         </fieldset>
                         <fieldset class="fieldset-service row mt-60" data-step>
                             <div class="information-all col-md-12 mt-50">
                                 <h3 class="register-title">Coose a Vehicle</h3>
 
                                 <div class="row">
                                     <div class="col-lg-3 mt-30 order-2 order-lg-1">
                                         <div class="booking-summery">
                                             <div class="booking-summery-details bg-gray">
                                                 <h4>Summary</h4>
                                                 <div class="summery-single">
                                                     <span>TRIP TYPE</span>
                                                     <h6 id="trip_type_text"></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>FROM - TO</span>
                                                     <h6><span id="pickup_address_text"></span> - <span id="drowp_address_text"></span></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>PICKUP DATE, TIME</span>
                                                     <h6><span id="pickup_date_text"></span>, <span id="pickup_time_text"></span></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>DROP OFF DATE, TIME</span>
                                                     <h6><span id="drop_date_text"></span>, <span id="drop_time_text"></span></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>TOTAL PASSENGER</span>
                                                     <h6 id="total_passanger_text"></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>TOTAL LUGGAGES</span>
                                                     <h6 id="total_luggages_text"></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>VEHICLE</span>
                                                     <h6 id="vehicle_title_Texts"></h6>
                                                 </div>
                                             </div>
                                             

                                             <div class="booking-summery-total">
                                                 <div class="selected-vehicle">
                                                     <span>Selected vehicle</span>
                                                     <span id="selecte_vehicle_total"></span>
                                                 </div>
                                                 <div class="total-price">
                                                     <span>Total</span>
                                                     <span id=""></span>
                                                 </div>
                                                 <div class="to-pay">
                                                     <span>To Pay
                                                         <p>(30% deposit)</p>
                                                     </span>
                                                     <span>$91.77</span>
                                                 </div>
                                             </div>

                                         </div>
                                     </div>

  

                                   <input type="hidden" name="vehicle_id" id="vehicle_id">

                                     <div class="col-lg-9 mt-30 order-1 order-lg-2">
                                         <h4 class="vehicle-filter-title">Vehicles Filter</h4>
                                         <div class="products__short">
                                             <div class="products__filter">
                                                 <h6>PASSENGERS</h6>
                                                 <select class="Select" id="passengersSelect">
 
                                                     <option value="1">1</option>
                                                     <option value="2">2</option>
                                                     <option value="3">3</option>
                                                     <option value="4">4</option>
                                                     <option value="5">5</option>
                                                     <option value="6">6</option>
                                                     <option value="7">7</option>
                                                     <option value="8">8</option>
                                                     <option value="9">9</option>
                                                     <option value="10">10</option>
                                                     <option value="11">11</option>
                                                     <option value="12">12</option>
                                                 </select>
                                             </div>
                                             <div class="products__filter">
                                                 <h6>SUITCASES</h6>
                                                 <select class="Select" id="suitcasesSelect">
 
                                                     <option value="1">1</option>
                                                     <option value="2">2</option>
                                                     <option value="3">3</option>
                                                     <option value="4">4</option>
                                                     <option value="5">5</option>
                                                     <option value="6">6</option>
                                                     <option value="7">7</option>
                                                     <option value="8">8</option>
                                                     <option value="9">9</option>
                                                     <option value="10">10</option>
                                                 </select>
                                             </div>
                                             <div class="products__filter">
                                                 <h6>Type</h6>
                                                 <select class="Select" id="typeSelect">
 
                                                     <option value="">- All Vehicles -</option>
                                                     @foreach (@$vehicle as $key=>$v)
                                                     <option value="{{@$v->title}}">{{@$v->title}} </option> 
                                                     @endforeach
                                                     
                                                    
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="vehicle-list mt-50" id="vehicleListContainer">
                                            
                                            @foreach (@$vehicle as $key=>$v)
                                                
                                            
                                            <div class="row vehicle-list_single">
                                                 <div class="col-lg-4 col-md-3 col-sm-12">
                                                     <div class="vehicle-list-single_image">
                                                         <img class="modify-img"
                                                          data-image-small="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}" 
                                                          data-image-large="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}" 
                                                          data-image-standard="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}" 
                                                          data-src="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}" 
                                                          src="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}" alt="" />
                                                     </div>
                                                 </div>
                                                 <div class="col-lg-8 col-md-9 col-sm-12">
                                                     <div class="vehicle-list-single_details">
                                                         <div class="vehicle-title-select">
                                                             <h4>{{@$v->title}}</h4>
                                                             <a href="#" onclick="SelectCar({{$v->id}},'{{ $v->title }}', '{{ $v->rate }}')" class="button">Select</a>
                                                         </div>

                                        
                                                         
                                                         <h3 class="vehicle-price">{{$v->rate}}</h3>
                                                         <div class="vehicle-details">
                                                             <p>
                                                                 {!!@$v->description!!}
                                                                </p>
                                                             <p class="strong">Rate: {{$v->rate}}</p>
 
                                                             <div class="table-responsive">
                                                                 <table class="table">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>Flat Rate</th>
                                                                             <th></th>
                                                                             <th></th>
                                                                             <th></th>
                                                                             <th></th>
                                                                         </tr>
                                                                         <tr>
                                                                             <th class="color-text">Up to</th>
                                                                             <th scope="col">10 <span>miles</span></th>
                                                                             <th scope="col">20 <span>miles</span></th>
                                                                             <th scope="col">30 <span>miles</span></th>
                                                                             <th scope="col">40 <span>miles</span></th>
                                                                         </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                         <tr>
                                                                             <th class="color-text">Price</th>
                                                                             <td scope="row">{{@$v->flat_rate_10_miles}}</td>
                                                                             <td scope="row">{{@$v->flat_rate_20_miles}}</td>
                                                                             <td scope="row">{{@$v->flat_rate_30_miles}}</td>
                                                                             <td scope="row">{{@$v->flat_rate_40_miles}}</td>
                                                                         </tr>
                                                                     </tbody>
                                                                 </table>
                                                             </div>
                                                             {{-- <div class="vehicle-details_table">
                                                                 <div class="vehicle-details_table_left">
                                                                     <div class="vehicle-details_text">
                                                                         <span>ENGINE</span>
                                                                         <h6>3000</h6>
                                                                     </div>
                                                                     <div class="vehicle-details_text">
                                                                         <span>INTERIOR COLOR</span>
                                                                         <h6>Black</h6>
                                                                     </div>
                                                                     <div class="vehicle-details_text">
                                                                         <span>POWER</span>
                                                                         <h6>285</h6>
                                                                     </div>
                                                                     <div class="vehicle-details_text">
                                                                         <span>FUEL TYPE</span>
                                                                         <h6>Diesel</h6>
                                                                     </div>
                                                                 </div>
                                                                 <div class="vehicle-details_table_right">
                                                                     <div class="vehicle-details_text">
                                                                         <span>LENGTH</span>
                                                                         <h6>5.1 meters</h6>
                                                                     </div>
                                                                     <div class="vehicle-details_text">
                                                                         <span>EXTERIOR COLOR</span>
                                                                         <h6>Silver</h6>
                                                                     </div>
                                                                     <div class="vehicle-details_text">
                                                                         <span>TRANSMISSION</span>
                                                                         <h6>Manual</h6>
                                                                     </div>
                                                                     <div class="vehicle-details_text">
                                                                         <span>EXTRAS</span>
                                                                         <h6>
                                                                             Leather Seats,
                                                                             <br />
                                                                             LED Lighting,
                                                                             <br />
                                                                             Radio
                                                                         </h6>
                                                                     </div>
                                                                 </div>
                                                             </div> --}}
                                                         </div>
                                                         <div class="more-info">
                                                             <a href="#" class="more-info_btn">
                                                                 <i class="fa ti-angle-down"></i>
                                                                 <span>More Info</span>
                                                             </a>
                                                             <div class="more-info_icons">
                                                                 <div class="more-info_icons_inner">
                                                                     <i class="fa ti-user"></i>
                                                                     <span>{{@$v->bag_capacity}}</span>
                                                                 </div>
                                                                 <div class="more-info_icons_inner">
                                                                     <i class="fa ti-briefcase"></i>
                                                                     <span>{{@$v->passengers}}</span>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>

                                             @endforeach

                                             
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-12 mb-60">
                                 <input type="button" name="name" class="button next-button" value="Enter Contact Details" data-next data-vehicle-select />
                                 <input type="button" name="name" class="button-previous" value="Choose Ride Details" data-previous />
                             </div>
                         </fieldset>
                         <fieldset class="fieldset-info row mt-60" data-step>
                             <div class="information-all booking-form col-md-12 mt-50">
                                 <h3 class="register-title">Enter Contact Details</h3>
                                 <div class="row">
                                     <div class="col-lg-3 mt-30 order-2 order-lg-1">
                                         <div class="booking-summery">

                                              <div class="booking-summery-details bg-gray">
                                                 <h4>Summary</h4>
                                                 <div class="summery-single">
                                                     <span>TRIP TYPE</span>
                                                     <h6 id="trip_type_text_second"></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>FROM - TO</span>
                                                     <h6><span id="pickup_address_text_second"></span> - <span id="drowp_address_text_second"></span></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>PICKUP DATE, TIME</span>
                                                     <h6><span id="pickup_date_text_second"></span>, <span id="pickup_time_text_second"></span></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>DROP OFF DATE, TIME</span>
                                                     <h6><span id="drop_date_text_second"></span>, <span id="drop_time_text_second"></span></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>TOTAL PASSENGER</span>
                                                     <h6 id="total_passanger_text_second"></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>TOTAL LUGGAGES</span>
                                                     <h6 id="total_luggages_text_second"></h6>
                                                 </div>
                                                 <div class="summery-single">
                                                     <span>VEHICLE</span>
                                                     <h6 id="vehicle_title_Texts_second"></h6>
                                                 </div>
                                             </div>

                                             

                                             <div class="booking-summery-total">
                                                 <div class="selected-vehicle">
                                                     <span>Selected vehicle</span>
                                                     <span id="selecte_vehicle_total_second"></span>
                                                 </div>
                                                 <div class="total-price">
                                                     <span>Total</span>
                                                     <span id=""></span>
                                                 </div>
                                                 <div class="to-pay">
                                                     <span>To Pay
                                                         <p>(30% deposit)</p>
                                                     </span>
                                                     <span>$91.77</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-lg-9 order-1 order-lg-2">
                                         <div class="info-forms">
                                             <div class="single-forms">
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-user"></i>
                                                     </span>
                                                     <input type="text" placeholder="First Name*" name="f_name" class="form--control" required />
                                                 </div>
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-user"></i>
                                                     </span>
                                                     <input type="text" placeholder="Last Name*" name="l_name" class="form--control" required />
                                                 </div>
                                             </div>
                                             <div class="single-forms">
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-pencil-square-o"></i>
                                                     </span>
                                                     <input type="text" placeholder="Company" name="company" class="form--control" />
                                                 </div>
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-envelope-o"></i>
                                                     </span>
                                                     <input type="email" placeholder="Email*" name="email" class="form--control" required />
                                                 </div>
                                             </div>
                                             <div class="single-forms">
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-phone"></i>
                                                     </span>
 
                                                     <input type="tel" name="phone" placeholder="Primary Phone Number*" class="form--control" required />
 
                                                 </div>
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-phone"></i>
                                                     </span>
 
                                                     <input type="tel" name="second_phone" placeholder="Secondary Phone Number*" class="form--control" required />
 
                                                 </div>
                                             </div>
                                             <div class="single-forms">
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-pencil-square-o"></i>
                                                     </span>
                                                     <textarea name="message" id="" placeholder="message" class="form--control"></textarea>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="booking-checkbox bg-gray">
                                             <div class="checkbox-inlines">
                                                 <input class="check-input" name="billing_checked" id="billing_checked" type="checkbox" />
                                                 <label class="checkbox-label" for="remember"> Billing Adress </label>
                                             </div>
                                         </div>
                                         <div class="info-forms bg-gray" id="billing-address">
                                             <div class="single-forms">
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-pencil-square-o"></i>
                                                     </span>
                                                     <input type="text" name="company_resgister_name" placeholder="Company Registered Name" class="form--control" />
                                                 </div>
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-pencil-square-o"></i>
                                                     </span>
                                                     <input type="text" name="text_number" placeholder="Tax Number" class="form--control" />
                                                 </div>
                                             </div>
                                             <div class="single-forms">
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-pencil-square-o"></i>
                                                     </span>
                                                     <input type="text" name="street" placeholder="Street" class="form--control" />
                                                 </div>
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-pencil-square-o"></i>
                                                     </span>
                                                     <input type="text" name="street_number" placeholder="Street Number" class="form--control" />
                                                 </div>
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-map-marker"></i>
                                                     </span>
                                                     <input type="text" name="city" placeholder="City" class="form--control" />
                                                 </div>
                                             </div>
                                             <div class="single-forms">
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-map-marker"></i>
                                                     </span>
                                                     <input type="text" name="state" placeholder="State" class="form--control" />
                                                 </div>
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-pencil-square-o"></i>
                                                     </span>
                                                     <input type="text" name="postal_code" placeholder="Postal Code" class="form--control" />
                                                 </div>
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-map-marker"></i>
                                                     </span>
                                                     <select class="Select form--control" name="country">
                                                         <option value="" class="placeholder" disabled selected>Country</option>
 
                                                         <option value="Afganistan">Afganistan</option>
                                                         <option value="Belgium">Belgium</option>
                                                         <option value="India">India</option>
                                                         <option value="Sri">Sri Lanka</option>
                                                         <option value="UK">United Kindom</option>
                                                         <option value="USA">United States</option>
                                                     </select>
 
                                                 </div>
                                             </div>
                                         </div>
                                         <input type="hidden" name="total_amount_final" id="total_amount_final" >
                                         <div class="booking-checkbox bg-gray mt-60">
                                             <div class="checkbox-inlines">
                                                 <input class="check-input" name="coupon_checked" id="coupon_checked" type="checkbox" />
                                                 <label class="checkbox-label" for="remember"> Coupon </label>
                                             </div>
                                            
                                         </div>
                                         <div class="info-forms bg-gray" id="coupon">
                                             <div class="single-forms">
                                                 <div class="input-single mt-30">
                                                     <span class="login-icon">
                                                         <i class="fa fa-pencil-square-o"></i>
                                                     </span>
                                                     <input type="text" name="coupon_name" id="coupon_field" placeholder="Enter Coupon Code" class="form--control" />
                                                     <input type="hidden" id="coupon_id" name="coupon_id">
                                                    </div>
                                                 <button style="margin-top: 28px;padding: 16px;" type="button" id="coupon_applay" class="btn btn-success btn-sm">Applay</button>
                                                 <button style="margin-top: 28px;padding: 16px;display:none" type="button" id="coupon_done" class="btn btn-success btn-sm">Applayed</button>
                                             </div>
 
                                         </div>
                                         <input type="hidden" name="payments" id="payments">
                                         <h4 class="payment-method-title">Choose payment method</h4>
                                         <ul class="payment-method">
                                             <li onclick="PyamentMethod('Cash')">
                                                 <a href="#">
                                                     <i class="fa ti-wallet" aria-hidden="true"></i>
                                                     <span>Cash</span>
                                                 </a>
                                                 <div class="checked-btn">
                                                     <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                 </div>
                                             </li>
 
                                             <li onclick="PyamentMethod('Paypal')">
                                                 <a href="#">
                                                     <img src="{{asset('Client/assets/img/paypal.png')}}" alt="">
                                                 </a>
                                                 <div class="checked-btn">
                                                     <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                 </div>
                                             </li>
 
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <input type="hidden" id="total_hours_distance" name="hours_distance">
                             <div class="col-md-12 mb-60">
                                 <input type="submit" name="submit" class="button" value="Confirm Booking" />
 
                                 <input type="button" name="name" class="button-previous" value="Choose A vehicle" data-previous />
                             </div>
                         </fieldset>
                     </form>
                 </div>
             </div>
         </div>
     </section>

  


     @section('footer')

<script>
    $('#trip_type').on('change',function(){
        var tripe_type = $('#trip_type').val();
        $('#trip_type_text').text(tripe_type);
        $('#trip_type_text_second').text(tripe_type);
    })

    $('#pickupLocation').on('keyup',function(){
        var pickupLocation_text = $('#pickupLocation').val();
        $('#pickup_address_text').text(pickupLocation_text);
        $('#pickup_address_text_second').text(pickupLocation_text);
    })

    $('#dropLocation').on('keyup',function(){
        var dropLocation_text = $('#dropLocation').val();
        $('#drowp_address_text').text(dropLocation_text);
        $('#drowp_address_text_second').text(dropLocation_text);
    })


    $('#pickup_date').on('change',function(){
        var pickup_date_texts = $('#pickup_date').val();
        $('#pickup_date_text').text(pickup_date_texts);
        $('#pickup_date_text_second').text(pickup_date_texts);
    })

    $('#pickup_time').on('change',function(){
        var pickup_time_texts = $('#pickup_time').val();
        $('#pickup_time_text').text(pickup_time_texts);
        $('#pickup_time_text_second').text(pickup_time_texts);
        
    })


    $('#drowp_date').on('change',function(){
        var drowp_date_texts = $('#drowp_date').val();
        $('#drop_date_text').text(drowp_date_texts);
        $('#drop_date_text_second').text(drowp_date_texts);
    })

    $('#drowp_time').on('change',function(){
        var drowp_time_texts = $('#drowp_time').val();
        $('#drop_time_text').text(drowp_time_texts);
        $('#drop_time_text_second').text(drowp_time_texts);
    })


    $('#total_passengers').on('change',function(){
        var total_passengers_texts = $('#total_passengers').val();
        $('#total_passanger_text').text(total_passengers_texts);
        $('#total_passanger_text_second').text(total_passengers_texts);
    })



   
    $('#luggage').on('change',function(){
        var total_luggages_texts = $('#luggage').val();
        $('#total_luggages_text').text(total_luggages_texts);
        $('#total_luggages_text_second').text(total_luggages_texts);
    })


function SelectCar(carId,title,rate){
    var numericRate = extractNumeric(rate);
     $('#vehicle_id').val(carId);
     $('#total_amount_final').val(numericRate);
    // $('#selecte_vehicle_total').text('$'+numericRate);


    // alert(numericRate);
    $('#vehicle_title_Texts').text(title);
    $('#vehicle_title_Texts_second').text(title);

}

function extractNumeric(text) {
    var numericValue = parseFloat(text.split('/')[0].replace(/[^0-9\.]/g, ""));
    return isNaN(numericValue) ? 0 : numericValue;
}

 function PyamentMethod(value){

     $('#payments').val(value);
 }

    

</script>


<script>
        $("#coupon_applay").click(function() {
        // Get the value of the coupon_name input field
        var couponName = $("input[name=coupon_name]").val();

        // Perform AJAX call
        $.ajax({
            url: "{{route('CouponApplaySumit')}}", // Replace with the actual URL of the route
            method: "GET", // Use the appropriate HTTP method (POST or GET)
            data: { coupon_name: couponName }, // Send coupon_name value in the request
            success: function(response) {
                // Handle the response from the server

                if(response.message=='Coupon successfully validated'){

                    $('#coupon_applay').hide();
                    $('#coupon_done').show();
                    $('#coupon_field').attr('readonly', 'readonly');
                    $('#coupon_id').val(response.coupon.id)

                    // console.log(response.coupon);
                    // console.log('yes')
                }
                // console.log("AJAX request successful:", response.message);
                // You can update the UI or perform any other actions based on the response
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the AJAX request
                console.error("AJAX request error:", status, error);
            }
        });
    });
</script>


<!-- <script>

   $('.hours_cal_pickup_time, .hours_cal_drop_time').on('change',function(){

       var hourse_pickup_time = $('.hours_cal_pickup_time').val();
       var hourse_cal_drop_time = $('.hours_cal_drop_time').val();
       
       console.log(hourse_pickup_time);
       console.log(hourse_cal_drop_time);
   })
</script> -->

<script>
  $('.hours_cal_pickup_time, .hours_cal_drop_time').on('blur', function () {
    var pickupTime = $('.hours_cal_pickup_time').val();
    var dropTime = $('.hours_cal_drop_time').val();

    if (pickupTime && dropTime) {
      var pickupDateTime = parseTime(pickupTime);
      var dropDateTime = parseTime(dropTime);

      var timeDifference = dropDateTime - pickupDateTime;

      if (!isNaN(timeDifference)) {
        var hours = Math.floor(timeDifference / (1000 * 60 * 60));
        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));

        // $('#result').text(`Time Duration: ${hours} hours and ${minutes} minutes`);
        // $('#total_hours_distance').val(`${hours}`);

        if (!isNaN(timeDifference) && hours >= 3) {
        // var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        // $('#result').text(`Time Duration: ${hours} hours and ${minutes} minutes`);
        $('#total_hours_distance').val(`${hours}`);

        $('.hours_show').css({
             "display":"block"
         });

      } else {
        $('#result').text('');
        $('.hours_show').css({
             "display":"none"
         });

        
        alert("Invalid input: The time duration must be at least 3 hours.");
      }



      } else {
        $('#result').text('Invalid input');
      }
    } else {
      $('#result').text('');
    }
  });

  function parseTime(timeString) {
    var parts = timeString.split(':');
    var hours = parseInt(parts[0]);
    var minutes = parseInt(parts[1]);

    if (timeString.indexOf('pm') !== -1 && hours !== 12) {
      hours += 12;
    } else if (timeString.indexOf('am') !== -1 && hours === 12) {
      hours = 0;
    }

    var currentDate = new Date();
    return new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), hours, minutes);
  }
</script>









@endsection

@endsection