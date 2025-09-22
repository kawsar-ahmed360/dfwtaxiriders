@extends('Server.master')

@section('content')

<div class="container-fluid">
    <div class="row">
       <div class="col-md-12">
       <div class="card">
                 <div class="card-body">
                     <h4 class="card-title">Contact List</h4>
                 </div>
                 <div class="table-responsive">
                  <a id="delete_multiple" class="btn btn-primary btn-sm visible_delete_icon" style="display:none"><i class="fa fa-trash"></i> <span id="del_count"></span> Delete</a>
                     <table id="default_order"  class="table border table-striped table-bordered text-nowrap">
                         <thead>
                             <tr>
                                <th><input type="checkbox" name="all_checkbox"></th>
                                 <th scope="col">Sl</th>
                                 <th scope="col">First Name</th>
                                 <th scope="col">Last Name</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Phone Number</th>
                                 <th scope="col">Message</th>
                                 <th scope="col">Date & Time</th>
                                 <th scope="col">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach (@$list as $key=>$l)
                                
                           
                             <tr>
                              <td><input type="checkbox" name="subscription_checkbox" value="{{$l->id}}"></td>
                                 <th scope="row">{{$key+1}}</th>
                                 <td>{{$l->name}}</td>
                                 <td>{{$l->l_name}}</td>
                                 <td>{{$l->email}}</td>
                                 <td>{{$l->phone}}</td>
                                 <td><button class="btn btn-info btn-sm" onclick="showmessage('{{ $l->message }}')">Click Me</button></td>
                                 <td> {{ date('m-d-Y (g:i A)', strtotime($l->created_at)) }}</td>
                                 
                                 @if(Auth::user()->role==2)
                                 
                                   <td>
                                    <a id="delete" href="{{route('ContactMessageDelete',@$l->id)}}" class="btn waves-effect waves-light btn-rounded btn-danger btn-sm">
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

     <form action="{{route('ContactMultiDelete')}}" method="POST" id="multi_form_submit">
         @csrf
        <div id="checked_ids_container"></div>
    </form>
 @section('footer')

 <script>
   function showmessage(Mesage){
     $('.modal').modal('show',4000)
     $('#message').val(Mesage);
   }

   function hidemessage(){
     $('.modal').modal('hide',4000)
   
   }
 </script>

 <script>


function updateHiddenInputs() {
    let container = $('#checked_ids_container');
    container.empty(); // Clear old hidden inputs

    checkedValues.forEach(function(val) {
        container.append('<input type="hidden" name="checked_ids[]" value="' + val + '">');
    });
}

    var checkedValues = [];

    // Master checkbox logic
    $('input[name="all_checkbox"]').on('click', function () {
        let isChecked = $(this).is(':checked');

        $('input[name="subscription_checkbox"]').prop('checked', isChecked);

        checkedValues = isChecked
            ? $('input[name="subscription_checkbox"]:checked').map(function () {
                  return $(this).val();
              }).get()
            : [];

          if(checkedValues.length>0){
              $(".visible_delete_icon").show();
               $("#del_count").text('('+checkedValues.length+')');
          }else{
              $(".visible_delete_icon").hide();
              $("#del_count").text("");
          }
          
          updateHiddenInputs();
         
        console.log("All Checkbox Clicked: ", checkedValues.length);
    });

    // Individual checkbox logic
    $('input[name="subscription_checkbox"]').on('change', function () {
        let value = $(this).val();

        if ($(this).is(':checked')) {
            if (!checkedValues.includes(value)) {
                checkedValues.push(value);
            }
        } else {
            checkedValues = checkedValues.filter(function (v) {
                return v !== value;
            });
        }

     

        // Optional: If one unchecked, uncheck master
        if (!$('input[name="subscription_checkbox"]:not(:checked)').length) {
            $('input[name="all_checkbox"]').prop('checked', true);
        } else {
            $('input[name="all_checkbox"]').prop('checked', false);
        }
        
        if(checkedValues.length>0){
            $(".visible_delete_icon").show();
              $("#del_count").text('('+checkedValues.length+')');
          }else{
              $(".visible_delete_icon").hide();
              $("#del_count").text("");
          }
          updateHiddenInputs();
           console.log("Single Checkbox Changed: ", checkedValues.length);
    });
</script>

<script>
    $(document).on('click','#delete_multiple',function(e){
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

            $("#multi_form_submit").submit();

            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
            // window.location.href = link;
        }else{
            Swal('Safe Data');
        }
    })

    })
</script>

 @endsection

 

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Message View</h5>
          <button type="button" onclick="hidemessage()" class="close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       
          <textarea class="form-control" name="message" cols="10" rows="20" id="message"></textarea>
          <input type="hidden" id="showid" name="">
        
        </div>
       
      </div>
    </div>
  </div>

@endsection