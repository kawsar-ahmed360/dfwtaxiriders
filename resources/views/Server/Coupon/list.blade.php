@extends('Server.master')
@section('content')

<div class="container-fluid">
    <div class="row">
       <div class="col-md-12">
       <div class="card">
                 <div class="card-body">
                     <h4 class="card-title">Coupon</h4>
                     <a href="{{route('CouponCreate')}}" class="btn waves-effect waves-light btn-dark">Add Coupon</a>
                 </div>
                 <div class="table-responsive">
                     <table class="table table-striped">
                         <thead>
                             <tr>
                                 <th scope="col">Sl</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Code</th>
                                 <th scope="col">Starts</th>
                                 <th scope="col">Ends</th>
                                 
                                 <th scope="col">Edit</th>
                                 <th scope="col">Delete</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach ($list as $key=>$l)
                                
                           
                             <tr>
                                 <th scope="row">{{$key+1}}</th>
                                 <td>{{$l->coupon_name}}</td>
                                 <td>{{$l->coupon_code}}</td>
                                 <td>{{ date('m-d-Y (g:i A)', strtotime($l->start_date)) }}</td>
                                 <td>{{ date('m-d-Y (g:i A)', strtotime($l->end_date)) }}</td>
                                 
                                 <td>
                                  <a href="{{route('CouponEdit',$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-info">
                                     Edit
                                  </a>
                                 </td>
                                 @if(Auth::user()->role==2)
                                 <td>
                                  <a id="delete" href="{{route('CouponDelete',@$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-danger">
                                     Delete
                                  </a>
                                 </td>
                                 @endif
                             </tr>

                             @endforeach
                            
                         </tbody>
                     </table>
                 </div>
             </div>
       </div>
    </div>
    
    
 </div>

@endsection