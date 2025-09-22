@extends('Server.master')

@section('content')

<div class="container-fluid">
    <div class="row">
       <div class="col-md-12">
       <div class="card">
                 <div class="card-body">
                     <h4 class="card-title">Vehicle</h4>
                     <a href="{{route('VehicleManageCreate')}}" class="btn waves-effect waves-light btn-dark">Add Vehicle</a>
                 </div>
                 <div class="table-responsive">
                     <table class="table table-striped">
                         <thead>
                             <tr>
                                 <th scope="col">Sr</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Image</th>
                                 <th scope="col">Rate</th>
                                 <th scope="col">Edit</th>
                                 <th scope="col">Delete</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach (@$list as $key=>$l)
                                
                           
                             <tr>
                                 <th scope="row">{{$key+1}}</th>
                                 <td>{{@$l->title}}</td>
                                 <td><img class="table-small-image" src="{{(@$l->image)?url('upload/Vehicle/'.@$l->image):''}}" alt=""></td>
                                 <td>${{@$l->rate}}</td>
                                 <td>
                                  <a href="{{route('VehicleManageEdit',@$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-info">
                                     Edit
                                  </a>
                                 </td>
                                 <td>
                                  <a id="delete" href="{{route('VehicleManageDelete',@$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-danger">
                                     Delete
                                  </a>
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

@endsection