@extends('Server.master')
@section('content')

<div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Booking Details</h4>
                                
                            </div>
                        </div>
                  </div>
                  
                  <div class="col-lg-6">
                           <div class="card">
                              <div class="card-body">
                                 <h4 class="card-title">Ride Details</h4>
                                 
                                 <div class="table-responsive">
                                       <table class="table">
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Trip Type</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->trip_type}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Occasion</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->occasion}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                       
                                       <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Total Passengers</th>
                                                   
                                             </tr>
                                       </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->total_passengers}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Luggage</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->luggage}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>  
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Pickup Date</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{ @$booking->pickup_date }}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>                                                                              
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Pickup Time</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{ date('(g:i A)', strtotime($booking->pickup_time)) }}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>                                       
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Drop Off Date</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{ @$booking->drowp_date }}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>                                                                              
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Drop Off Time</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{ date('(g:i A)', strtotime($booking->drowp_time)) }}</td>
                                                   
                                             </tr>
                                             
                                          </tbody> 
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Pickup Address</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->pickup_location}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>                                        
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Drop Off Address</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->drowp_location}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                       </table>
                                      
                                                                                                                 
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body">
                                          <h4 class="card-title">Coupon</h4>
                                          <div class="table-responsive">
                                             <table class="table">
                                             <thead class="bg-dark text-white">
                                                <tr>
                                                      <th>Coupon Code</th>
                                                      
                                                </tr>
                                             </thead>
                                             <tbody class="">
                                                 @if(isset($booking->coupon_id))
                                                <tr>
                                                      <td>{{@$coupon->coupon_code}}</td>
                                                      
                                                </tr>

                                                @else
                                                <tr>
                                                      <td>Not Found</td>
                                                      
                                                </tr>

                                                @endif
                                                
                                             </tbody>
                                          </table>
                                          </div>
                                          </div>                                          
                           </div>
                           <div class="card">
                              <div class="card-body">
                                          <h4 class="card-title">Payment Method</h4>
                                          <div class="table-responsive">
                                             <table class="table">
                                             <thead class="bg-dark text-white">
                                                <tr>
                                                      <th>Payment Via</th>
                                                      
                                                </tr>
                                                 
                                             </thead>
                                             <tbody class="">
                                                <tr>
                                                      <td>
                                                      @if(@$booking->payments=='Cash')
                                                <button type="button" class="btn btn-info btn-rounded">
                                                <i class="far fa-money-bill-alt"></i> Cash
                                                </button>      
                                                
                                                @elseif(@$booking->payments=='Paypal')
                                                <button type="button" class="btn btn-info btn-rounded">
                                                <i class="fab fa-cc-paypal"></i> PayPal
                                                </button>
                                                @endif
                                                      </td>
                                                      
                                                </tr>
                                                
                                             </tbody>
                                          </table>
                                          </div>
                                          </div>                                          
                           </div>

                            <div class="card">
                              <div class="card-body">
                                          <h4 class="card-title">History</h4>
                                          <div class="table-responsive">
                                             <table class="table">
                                             <thead class="bg-dark text-white">
                                                <tr>
                                                      <th>Total Hours</th>
                                                      
                                                </tr>
                                             </thead>
                                             <tbody class="">

                                               @if(isset($booking->hours_distance))
                                                <tr>
                                                      <td>{{@$booking->hours_distance}}</td>
                                                      
                                                </tr>

                                                @else
                                                <tr>
                                                      <td>Not Found</td>
                                                      
                                                </tr>

                                                @endif

                                                
                                                
                                             </tbody>


                                                <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Per Hours($)</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>${{@$booking->total_amount}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>


                                              <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Total($)</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>${{@$booking->total_amount*@$booking->hours_distance}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          </table>
                                          </div>
                                          </div>                                          
                           </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="card">
                              <div class="card-body">
                                 <h4 class="card-title">Contact Details</h4>
                                 
                                 <div class="table-responsive">
                                    <table class="table">
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>First Name</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->f_name}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Last Name</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->l_name}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Company Name</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->company}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                       
                                       <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Email</th>
                                                   
                                             </tr>
                                       </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->email}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Primary Phone Number</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->phone}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Secondary Phone Number</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->second_phone}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Message</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{!!@$booking->message!!}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                                                                    
                                          
                                       </table>                                                                          
                                 </div>
                              </div>
                     </div>                           
                     <div class="card">
                              <div class="card-body">
                                 <h4 class="card-title">Billing Address</h4>
                                 
                                 <div class="table-responsive">
                                    <table class="table">
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Company Registered Name</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->company_resgister_name??"not found"}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>TAX Number</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->text_number??"not found"}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Street</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->street??"not found"}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                       
                                       <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Street Number</th>
                                                   
                                             </tr>
                                       </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->street_number??"not found"}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>City</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->city??"not found"}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>State</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->state??"not found"}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Postal Code</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->postal_code??"not found"}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                          <thead class="bg-dark text-white">
                                             <tr>
                                                   <th>Country</th>
                                                   
                                             </tr>
                                          </thead>
                                          <tbody class="">
                                             <tr>
                                                   <td>{{@$booking->country??"not found"}}</td>
                                                   
                                             </tr>
                                             
                                          </tbody>
                                                                                    
                                          
                                       </table>                                                                          
                                 </div>
                              </div>
                     </div>                     
                  </div>

               </div>
               
            </div>

@endsection