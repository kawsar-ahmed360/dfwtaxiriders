@extends('Server.master')
@section('content')

<div class="container-fluid">
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Booking</h4>
                                
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
                                                <th>TOTAL</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
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
                                                <td>{{ @$l->pickup_date }} <br> {{ date('(g:i A)', strtotime($l->pickup_time)) }}</td>
                                                <td>{{ @$l->drowp_date }} <br> {{ date('(g:i A)', strtotime($l->drowp_time)) }}</td>
                                                <td>     
                                                
                                                
                                                @if(isset($l->total_amount) && isset($l->hours_distance))
                                                  
                                                  
                                                @if(isset($l->coupon_id))
                                                
                                                ${{ ($l->total_amount ) * ($l->hours_distance ) - $l->coupon_tk }}
                                                  
                                                
                                                @else
                                                ${{ ($l->total_amount ) * ($l->hours_distance ) }}
                                                  
                                                @endif
                                                 
                                                  
                                                 
                                                  
                                                  @endif
                                                  
                                                  </td>
                                                
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
                                                
                                                <td>
                                                <a href="{{route('BookingDetailsInvoice',@$l->id)}}" class="btn btn-info btn-sm"><i class="fa fa-print"></i></a>
                                                <a href="{{route('BookingDelete',@$l->id)}}" id="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
               
               
            </div>



@endsection