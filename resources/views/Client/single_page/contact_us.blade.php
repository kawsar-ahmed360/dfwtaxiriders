@extends('Client.master')

@section('content')

<div class="map-area">
         <div class="map-content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3352.3895135590747!2d-96.9352683!3d32.834937!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e832594edea33%3A0x1158e91827c435a0!2s1110%20Belew%20St%2C%20Irving%2C%20TX%2075061%2C%20USA!5e0!3m2!1sen!2sbd!4v1702238549165!5m2!1sen!2sbd" width="100" height="450" style="position: relative;width: 100%;height: 100vh;margin-bottom: -2px;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="map-info">
                        <h3>
                           DFW Taxi Riders – Airport Taxi & City Rides in Dallas-Fort Worth
                        </h3>
                        <div class="map-info-details">
                           <p>
                              1110 Belew Street <br> Irving Texas ,75061
                           </p>
                           <a target="_blank"
                            href="https://maps.app.goo.gl/cvuU3ZvBHcYttWaDA"
                            class="button">Plan Route</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="contact-info">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 contact-info-content bg-white">
                  <div class="contact-info-inner">
                     <h3>DFW Taxi Riders – Airport Taxi & City Rides in Dallas-Fort Worth</h3>
                     <p>1110 Belew Street , Irving Texas ,75061</p>
                     <p>
                        Phone: (972) 415-5255

                     </p>
                     <p>Email: <a href="mailto:info@dfwtaxiriders.com">info@dfwtaxiriders.com</a><br><a href="mailto:rahman_pabel@yahoo.com ">rahman_pabel@yahoo.com </a></p>

                  </div>
               </div>
               <div class="col-md-6 contact-info-content bg-gray">
                  <div class="contact-info-inner">
                     <h3>Chairman Of the Board</h3>
                     <p>Md. Hafizur Rahman</p>
                     <p>Phone: +1 (972) 415-5255</p>
                     <p>Email: <a href="mailto:info@dfwtaxiriders.com">info@dfwtaxiriders.com </a><br><a href="mailto:rahman_pabel@yahoo.com">rahman_pabel@yahoo.com </a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <section class="contact-form bg-white section-padding">
         <div class="container">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title">
                        <h2>
                           Private chauffeur, sightseeing tour? <br>
                           Please fill out the form below with questions or comments
                        </h2>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-12 form_wrapper">
                  <span style="text-align: center;
    margin: 0 auto;
    display: none;
    padding: 10px;
    border: 1px solid green;
    background-color: #99cd99;
    color: white;" id="success_message_show"></span>

                     <form id="appointmentForm" action="{{route('ContactUsPost')}}" method="post">
                       @csrf
                         <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" placeholder="First Name" name="name" class="form-control" >
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" placeholder="Last Name" name="l_name" class="form-control" >
                           </div>
                           <div class="form-group col-md-6">
                              <input type="email" placeholder="Email" class="form-control" name="email">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="tel" placeholder="Phone Number" class="form-control"  name="phone">
                           </div>

                           <div class="form-group col-md-12">
                              <textarea  id="" placeholder="Message" class="form-control" name="message"></textarea>
                           </div>
                           <div class="form-group col-md-12 text-center">
                              <button type="submit" id="submitBtn_click" class="form-btn">
                                 <span>submit</span>
                                 <span><img src="{{asset('Client/assets/img/form-btn.svg')}}" alt=""></span>
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <style>
	.error-input{
		border:1px solid red !important;
	}
</style>
      @section('footer')


<script>
    $('#submitBtn_click').on('click', function(e) {
        e.preventDefault();

        var form = $('#appointmentForm');
        var isValid = true;

        // Validate specific fields
        var drNameInput = form.find('input[name="name"]');
        if (drNameInput.val().trim() === '') {
            isValid = false;
            // Display error message or perform any desired action
			drNameInput.addClass('error-input');

        }else{
			drNameInput.removeClass('error-input');
		}


		var drNameInput = form.find('input[name="l_name"]');
        if (drNameInput.val().trim() === '') {
            isValid = false;
            // Display error message or perform any desired action
			drNameInput.addClass('error-input');

        }else{
			drNameInput.removeClass('error-input');
		}


		var drNameInput = form.find('input[name="email"]');
        if (drNameInput.val().trim() === '') {
            isValid = false;
            // Display error message or perform any desired action
			drNameInput.addClass('error-input');

        }else{
			drNameInput.removeClass('error-input');
		}



		var drNameInput = form.find('input[name="phone"]');
        if (drNameInput.val().trim() === '') {
            isValid = false;
            // Display error message or perform any desired action
			drNameInput.addClass('error-input');

        }else{
			drNameInput.removeClass('error-input');
		}


        var messageInput = form.find('textarea[name="message"]');
        if (messageInput.value === '') {
        isValid = false;
        // Display error message or perform any desired action
        messageInput.addClass('error-input');
        } else {
        messageInput.removeClass('error-input');
        }


        // Add more specific field validations here

        if (isValid) {
            var url = form.attr('action');
            var formData = form.serialize();

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle the success response here



                      Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Message has been saved',
                showConfirmButton: false,
                timer: 1500
            });

					$('#success_message_show').css({
						"display":"block"
					});
					$('#success_message_show').text(response.success_app);
    $('#success_message_show').show();
					 form.trigger('reset');

					 setTimeout(function() {
    $('#success_message_show').fadeOut('slow', function() {
        $(this).empty().hide();
    });
}, 3000);

                },
                error: function(xhr) {
                    // Handle the error response here
                    console.log(xhr.responseText);
                }
            });
        }
    });
</script>


      @endsection

@endsection
