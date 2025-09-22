<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Invoice </title>
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
  body { margin: 0; padding: 0; background: #e1e1e1; }
  div, p, a, li, td { -webkit-text-size-adjust: none; }
  .ReadMsgBody { width: 100%; background-color: #ffffff; }
  .ExternalClass { width: 100%; background-color: #ffffff; }
  body { width: 100%; height: 100%; background-color: #e1e1e1; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; }
  html { width: 100%; }
  p { padding: 0 !important; margin-top: 0 !important; margin-right: 0 !important; margin-bottom: 0 !important; margin-left: 0 !important; }
  .visibleMobile { display: none; }
  .hiddenMobile { display: block; }

  @media only screen and (max-width: 600px) {
  body { width: auto !important; }
  table[class=fullTable] { width: 96% !important; clear: both; }
  table[class=fullPadding] { width: 85% !important; clear: both; }
  table[class=col] { width: 45% !important; }
  .erase { display: none; }
  }

  @media only screen and (max-width: 420px) {
  table[class=fullTable] { width: 100% !important; clear: both; }
  table[class=fullPadding] { width: 85% !important; clear: both; }
  table[class=col] { width: 100% !important; clear: both; }
  table[class=col] td { text-align: left !important; }
  .erase { display: none; font-size: 0; max-height: 0; line-height: 0; padding: 0; }
  .visibleMobile { display: block !important; }
  .hiddenMobile { display: none !important; }
  }
</style>


<!-- Header -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td>
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
        <tr class="hiddenMobile">
          <td height="40"></td>
        </tr>
        <tr class="visibleMobile">
          <td height="30"></td>
        </tr>

        <tr>
          <td>
            <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
              <tbody>
                <tr>
                  <td>
                    <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                      <tbody>
                        <tr>
                          <td align="left"> <img src="{{asset('Server/assets/images/logo.png')}}" width="120" height="50" alt="logo" border="0" /></td>
                        </tr>
                        <tr class="hiddenMobile">
                          <td height="40"></td>
                        </tr>
                        <tr class="visibleMobile">
                          <td height="20"></td>
                        </tr>
                        <tr>
                          <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 11px; vertical-align: top; text-align: left;">
                            Hello {{@$booking->f_name}} {{@$booking->l_name}}, <br>
                            <br> Thank you very much for Booking this site
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                      <tbody>
                        <tr class="visibleMobile">
                          <td height="20"></td>
                        </tr>
                        <tr>
                          <td height="5"></td>
                        </tr>
                        <tr>
                          <td style="font-size: 21px; color: #0EADF0; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">
                            Invoice
                          </td>
                        </tr>
                        <tr>
                        <tr class="hiddenMobile">
                          <td height="50"></td>
                        </tr>
                        <tr class="visibleMobile">
                          <td height="20"></td>
                        </tr>
                        <tr>
                          <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                            <small>ID :</small> {{@$booking->reg_id}}<br />
                            <small>{{date('F d Y',strtotime($booking->created_at))}}</small>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!-- /Header -->
<!-- Order Details -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
  <tbody>
    <tr>
      <td>
        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
          <tbody>
            <tr>
            <tr class="hiddenMobile">
              <td height="30"></td>
            </tr>
            <tr class="visibleMobile">
              <td height="40"></td>
            </tr>
            <tr>
              <td>
                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                  <tbody>
                    <tr>
                      <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: bold; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;" width="52%" align="left">
                        Vehicle
                      </th>
                      <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: bold; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">
                        <small>Hours</small>
                      </th>
                      <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: bold; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="center">
                        Hoursly Price
                      </th>
                      <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: bold; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="right">
                        Subtotal
                      </th>
                    </tr>
                    <tr>
                      <td height="1" style="background: #bebebe;" colspan="4"></td>
                    </tr>
                    <tr>
                      <td height="10" colspan="4"></td>
                    </tr>
                    <tr>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #0EADF0;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">
                        {{@$booking->Vehicle->title}}
                      </td>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"><small>{{@$booking->hours_distance}}</small></td>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center">${{@$booking->total_amount}}</td>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right">
                          
                            @if(isset($booking->total_amount) && isset($booking->hours_distance))
                                                  
                                                  
                                                @if(isset($booking->coupon_id))
                                                
                                                ${{ ($booking->total_amount ) * ($booking->hours_distance ) - $booking->coupon_tk }}
                                                  
                                                
                                                @else
                                                ${{ ($booking->total_amount ) * ($booking->hours_distance ) }}
                                                  
                                                @endif
                                                 
                                                  
                                                 
                                                  
                                                  @endif
                          
                          </td>
                    </tr>
                    <tr>
                      <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<!-- /Order Details -->
<!-- Total -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
  <tbody>
    <tr>
      <td>
        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
          <tbody>
            <tr>
              <td>

                <!-- Table Total -->
                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                  <tbody>
                    
                   
                    <tr>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                        <strong>Grand Total </strong>
                      </td>
                      <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                        <strong>  @if(isset($booking->total_amount) && isset($booking->hours_distance))
                                                  
                                                  
                                                @if(isset($booking->coupon_id))
                                                
                                                ${{ ($booking->total_amount ) * ($booking->hours_distance ) - $booking->coupon_tk }}
                                                  
                                                
                                                @else
                                                ${{ ($booking->total_amount ) * ($booking->hours_distance ) }}
                                                  
                                                @endif
                                                 
                                                  
                                                 
                                                  
                                                  @endif</strong>
                      </td>
                    </tr>
                    <tr>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- /Table Total -->

              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<!-- /Total -->
<!-- Information -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
  <tbody>
    <tr>
      <td>
        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
          <tbody>
            <tr>
            <tr class="hiddenMobile">
              <td height="50">
                <h4 style="padding-left:56px ">Booking Details:</h4>
              </td>
            </tr>
            <tr class="visibleMobile">
              <td height="40"></td>
            </tr>
            <tr>
              <td>
                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                  <tbody>
                    <tr>
                      <td>
                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">

                          <tbody>
                            <tr>
                              <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                <strong style="text-decoration: underline;">RIDE DETAILS</strong>
                              </td>
                            </tr>
                            <tr>
                              <td width="100%" height="10"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                <strong>Trip Type:</strong> {{@$booking->trip_type}}
                                <br> 
                                 <strong>Occasion</strong> : {{@$booking->occasion}}<br>
                                 <strong>Total Passengers</strong> : {{@$booking->total_passengers}}<br> 
                                 <strong>Luggage</strong> : {{@$booking->luggage}}<br>
                                 <strong>Pickup Date</strong> : {{ date('m/d/Y', strtotime($booking->pickup_date)) }}<br>
                                 
                                  <strong>Pickup Time</strong> : {{ date('(g:i A)', strtotime($booking->pickup_time)) }}<br>
                                  
                                    <strong>Drop Off Date</strong> : {{ date('m/d/Y', strtotime($booking->drowp_date)) }}<br>
                                    
                                    <strong>Drop Off Time</strong> : {{ date('(g:i A)', strtotime($booking->drowp_time)) }}<br>
                                    
                                     <strong>Pickup Address</strong> : {{@$booking->pickup_location}}<br>
                                     
                                     <strong>Drop Off Address</strong> : {{@$booking->drowp_location}}<br>
                              </td>
                            </tr>
                          </tbody>
                        </table>


                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                          <tbody>
                            <tr class="visibleMobile">
                              <td height="20"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                <strong style="text-decoration: underline;">CONTACT DETAILS</strong>
                              </td>
                            </tr>
                            <tr>
                              <td width="100%" height="10"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                <strong>First Name:</strong> {{@$booking->f_name}}
                                <br> 
                                 <strong>Last Name</strong> : {{@$booking->l_name}}<br>
                                  <strong>Company Name</strong> : {{@$booking->company}}<br>
                                  <strong>Email</strong> : {{@$booking->email}}<br>
                                   <strong>Primary Phone Number</strong> : {{@$booking->phone}}<br>
                                   <strong>Secondary Phone Number</strong> : {{@$booking->second_phone}}<br>
                                    <strong>Message</strong> : {{@$booking->message}}<br>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                  <tbody>
                    <tr>
                      <td>
                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                          <tbody>
                            <tr class="hiddenMobile">
                              <td height="35"></td>
                            </tr>
                            <tr class="visibleMobile">
                              <td height="20"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                <strong style="text-decoration: underline;">BILLING ADDRESS</strong>
                              </td>
                            </tr>
                            <tr>
                              <td width="100%" height="10"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                <strong>Company Registered Name:</strong> {{@$booking->company_resgister_name}}
                                <br> 
                                 
                                 <strong>TAX Number</strong> : {{@$booking->text_number}}<br>
                                 <strong>Street</strong> : {{@$booking->street}}<br>
                                 <strong>Street Number</strong> : {{@$booking->street_number}}<br>
                                 <strong>City</strong> : {{@$booking->city}}<br>
                                 <strong>State</strong> : {{@$booking->state}}<br>
                                 <strong>Postal Code</strong> : {{@$booking->postal_code}}<br>
                                 <strong>Country</strong> : {{@$booking->country}}<br>
                                 
                              </td>
                            </tr>
                          </tbody>
                        </table>


                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                            <tbody>
                              <tr class="hiddenMobile">
                                <td height="35"></td>
                              </tr>
                              <tr class="visibleMobile">
                                <td height="20"></td>
                              </tr>
                              <tr>
                                <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                  <strong style="text-decoration: underline;">COUPON</strong>
                                </td>
                              </tr>
                              <tr>
                                <td width="100%" height="10"></td>
                              </tr>
                              <tr>
                                <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                    <strong>Coupon Code:</strong> @if(isset($booking->coupon_id)) {{@$coupon->coupon_code}} @else Not Found @endif 
                                    <br> 
                                     
                                </td>
                              </tr>
                            </tbody>
                          </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
                <td>
                  <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                    <tbody>
                      <tr>
                        <td>
                          <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                            <tbody>
                              <tr class="hiddenMobile">
                                <td height="35"></td>
                              </tr>
                              <tr class="visibleMobile">
                                <td height="20"></td>
                              </tr>
                              <tr>
                                <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                  <strong style="text-decoration: underline;">PAYMENT METHOD</strong>
                                </td>
                              </tr>
                              <tr>
                                <td width="100%" height="10"></td>
                              </tr>
                              <tr>
                                <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                    <strong>Payment Via:</strong>  @if(@$booking->payments=='Cash') <button type="button" class="btn btn-info btn-rounded" style="background: #3bb15f;
    border: none;
    padding: 4px;
    color: white;
    border-radius: 3px;">
                                                <i class="far fa-money-bill-alt"></i> Cash
                                                </button>
                                                
                                                @elseif(@$booking->payments=='Paypal')
                                                
                                                <button type="button" class="btn btn-info btn-rounded" style="background: #3bb15f;
    border: none;
    padding: 4px;
    color: white;
    border-radius: 3px;">
                                                <i class="fab fa-cc-paypal"></i> PayPal
                                                </button>
                                                @endif
                                    <br> 
                                     
                                </td>
                              </tr>
                            </tbody>
                          </table>
  
  
                          <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                              <tbody>
                                <tr class="hiddenMobile">
                                  <td height="35"></td>
                                </tr>
                                <tr class="visibleMobile">
                                  <td height="20"></td>
                                </tr>
                               
                                
                              </tbody>
                            </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            <tr class="hiddenMobile">
              <td height="5"></td>
            </tr>
            <tr class="visibleMobile">
              <td height="30"></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<!-- /Information -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">

  <tr>
    <td>
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
        <tr>
          <td>
            <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
              <tbody>
                <tr>
                  <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                    
                    
                    <br><br>Thank your for Booking
                    
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr class="spacer">
          <td height="50"></td>
        </tr>

      </table>
    </td>
  </tr>
  <tr>
    <td height="20"></td>
  </tr>
</table>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
    window.print();
});

</script>
