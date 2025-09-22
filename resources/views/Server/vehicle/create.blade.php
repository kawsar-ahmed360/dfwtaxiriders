@extends('Server.master')

@section('content')
<div class="container-fluid">
    <form action="{{route('VehicleManageStore')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
       <div class="col-md-12">
          <div class="card">
             <div class="card-body">
                <h4 class="card-title costom-card-title mb-30">Add Vehicle</h4>
                
                   <div class="form-body">
                      <div class="row">
                         
                         <div class="col-md-12">
                            <div class="form-group mb-3">
                               <label for="vehicleTitle" class="costom-label">Vehicle Title</label>
                               <input
                               id="vehicleTitle"
                               name="title"
                               type="text"
                               
                               required
                               class="form-control"
                               placeholder="Vehicle Title"
                               />
                            </div>
                         </div>
                         <div class="col-md-12">
                            <div class="form-group mb-3">
                               <label for="rate" class="costom-label">Rate</label>
                               <input
                               id="rate"
                               name="rate"
                               type="text"
                               
                               required
                               class="form-control"
                               placeholder="Rate"
                               />
                            </div>
                         </div>

                         <div class="col-md-6">
                            <div class="form-group mb-3">
                               <label for="rate" class="costom-label">Service Select</label>
                                <select class="form-control" name="service_name" id="">
                                    <option disabled selected>Select Once</option>
                                    <option value="DFW AIRPORT TRANSPORTATION">DFW AIRPORT TRANSPORTATION</option>
                                    <option value="DALLAS CORPORATE TRANSPORTATION">DALLAS CORPORATE TRANSPORTATION</option>
                                    <option value="DFW LONG TRANSPORTATION">DFW LONG TRANSPORTATION</option>
                                    <option value="DALLAS LIMOUSINE RENTALS">DALLAS LIMOUSINE RENTALS</option>
                                </select>
                            </div>
                         </div>

                         <div class="col-md-6">
                            <div class="form-group mb-3">
                               <label for="rate" class="costom-label">Areas We Serve Select</label>
                               <select class="form-control" name="areas_we_serve" id="">
                                <option disabled selected>Select Once</option>
                                <option value="Denton Texas">Denton, Texas</option>
                                <option value="Rockwall Texas">Rockwall, Texas</option>
                                <option value="Keller Texas">Keller, Texas</option>
                               
                            </select>
                            </div>
                         </div>

                         <div class="row">
                            <label for="rate" class="costom-label">Flat Rate</label>
                            <div class="col-md-3 form-group mb-3">
                               <input
                               id="10miles"
                               name="flat_rate_10_miles"
                               type="text"
                               
                               required
                               class="form-control"
                               placeholder="10miles"
                               />
                               
                            </div>
                            <div class="col-md-3 form-group mb-3">
                               <input
                               id="20miles"
                               name="flat_rate_20_miles"
                               type="text"
                               
                               required
                               class="form-control"
                               placeholder="20miles"
                               />
                               
                            </div>
                            <div class="col-md-3 form-group mb-3">
                               <input
                               id="30miles"
                               name="flat_rate_30_miles"
                               type="text"
                               
                               required
                               class="form-control"
                               placeholder="30miles"
                               />
                               
                            </div>
                            <div class="col-md-3 form-group mb-3">
                               <input
                               id="40miles"
                               name="flat_rate_40_miles"
                               type="text"
                               
                               required
                               class="form-control"
                               placeholder="40miles"
                               />
                               
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group mb-3">
                               <label for="bagCapacity" class="costom-label">Bag Capacity</label>
                               <input
                               id="bagCapacity"
                               name="bag_capacity"
                               type="text"
                               
                               required
                               class="form-control"
                               placeholder="Bag Capacity"
                               />
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group mb-3">
                               <label for="passengers" class="costom-label">Passengers</label>
                               <input
                               id="passengers"
                               name="passengers"
                               type="text"
                               
                               required
                               class="form-control"
                               placeholder="Passengers"
                               />
                            </div>
                         </div>
             

                         <div class="col-md-12">
                            <label for="imageUpload" class="costom-label">Image Upload</label>
                            <div class="input-group mb-3 flex-nowrap">
                               <div class="custom-file w-100">
                                  <input class="form-control" type="file" id="news-banner-input" name="image">
                               </div>
                               {{-- <button id="upload-button" class="btn btn-info" type="button">
                                  Upload
                               </button> --}}
                            </div>
                         </div>
                         <div class="col-md-12">
                            <div class="form-group mb-3">
                               <label class="costom-label">Selected Image</label>
                               <img id="news-banner-image" src="{{asset('Server/assets/images/image-not-available.png')}}" class="preview-image" alt="Profile Image">
                            </div>
                         </div>
                         <div class="col-md-12">
                            <div class="form-group mb-3">
                               <label for="newsTitle" class="costom-label">Description</label>
                               <textarea id="editor" class="form-control" rows="3"
                               name="description" required placeholder="Text Here..."></textarea>
                            </div>
                         </div>
                        
                      </div>
                      
                     
                   </div>
                   <div class="form-actions">
                      <div class="text-start">
                         <button type="submit" class="btn btn-info">Submit</button>
                         
                      </div>
                   </div>
                
             </div>
          </div>
       </div>
    </div>
    </form>
    
    
 </div>

@endsection