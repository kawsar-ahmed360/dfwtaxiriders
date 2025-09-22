@extends('Client.master')
@section('content')

<div class="page-title-area" id="about_us">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="container">
                  <div class="page-title-content">
                     <h2>Our Fleet</h2>
                     <ul>
                        <li><a href="{{route('MainIndex')}}">Home</a></li>
                        <li>Our Fleet</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>




    





      <section class="products bg-white pt-100">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title">
                     <h5>WHAT WE OFFER</h5>
                     <h2>See What We Can Do for You</h2>
                  </div>
               </div>
               
               <div class="project__lists col-md-12">
      
                  @foreach (@$vehicle as $key=>$v)
                     
                  
      
                  <div class="col-lg-4 col-md-6">
                     <div class="project__img-slider__init__slider-wrapper car-collection">
                        <div class="project__img-slider__init__slider-wrapper__img-first">
                           <img
                              class="modify-img"
                              data-image-small="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}"
                              data-image-large="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}"
                              data-image-standard="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}"
                              data-src="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}"
                              src="{{(@$v->image)?url('upload/Vehicle/'.@$v->image):''}}"
                              alt=""
                           />
                        
                        </div>
                        <div class="project__img-slider__init__slider-wrapper__item-title">
                           <div class="project__img-slider__init__slider-wrapper__item-title__inner">
                              <div class="left">
                                 {{-- <h5>SUV</h5> --}}
                                 <h4>{{@$v->title}}</h4>
                              </div>
                              <svg
                                 id="Group_18"
                                 data-name="Group 18"
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="30"
                                 height="30"
                                 viewBox="0 0 30 30"
                              >
                                 <circle id="Ellipse_2" data-name="Ellipse 2" cx="15" cy="15" r="15" fill="#f39c12" />
                                 <g id="Icon_feather-plus" data-name="Icon feather-plus" transform="translate(10 10)">
                                    <path
                                       id="Path_3"
                                       data-name="Path 3"
                                       d="M18,7.5v10"
                                       transform="translate(-13 -7.5)"
                                       fill="none"
                                       stroke="#405672"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       stroke-width="1"
                                    />
                                    <path
                                       id="Path_4"
                                       data-name="Path 4"
                                       d="M7.5,18h10"
                                       transform="translate(-7.5 -13)"
                                       fill="none"
                                       stroke="#405672"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       stroke-width="1"
                                    />
                                 </g>
                              </svg>
                           </div>
                        </div>
                        <a class="more-details" href="#" target=""></a>
                        <div class="rate-details-content">
                           <div class="rate-details" id="popupModal">
                              <span class="close">&times;</span>
                              <p>{{@$v->rate}}</p>
                             
                              <div class="table-responsive">
                                 <table class="table table-striped-columns">
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
                           </div>
                        </div>
                        
                     </div>
                  </div>
      
                  @endforeach
                  
                
                 
                  
               </div>
            </div>
              {{@$vehicle->links()}}
                        
         </div>
      </section>

     

@endsection