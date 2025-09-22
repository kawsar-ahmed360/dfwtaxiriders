<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\ContactUs;
use App\Models\VehicleManage;
use App\Models\BookingManage;
use App\Models\Coupon;
use App\Models\Testimonial;
use App\Models\BlogManage;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PDF;

class FrontendController extends Controller
{
    //

    public function MainIndex()
    {


        $data['vehicle'] = VehicleManage::get();
        $data['testimonial'] = Testimonial::get();
        return view('Client.main', $data);
    }

    public function Blog()
    {

        $data['vehicle'] = VehicleManage::get();
        $data['blog'] = BlogManage::get();
        return view('Client.single_page.blog', $data);
    }

    public function BlogDetails($slug)
    {

        $data['vehicle'] = VehicleManage::get();
        $data['blog'] = BlogManage::where('slug', $slug)->first();
        $data['rel_blog'] = BlogManage::OrderBy('id', 'desc')->take(4)->get();
        return view('Client.single_page.blog_details', $data);
    }


    //--------------Service Method --------
    public function PremiumDfwAirportLimoBlackCarServices()
    {

        $data['vehicle'] = VehicleManage::where('service_name', 'DFW AIRPORT TRANSPORTATION')->get();
        return view('Client.single_page.Service.premium-dfw-airport-limo-black-car-services', $data);
    }

    public function DallasCorporateTransportationBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'DALLAS CORPORATE TRANSPORTATION')->get();
        return view('Client.single_page.Service.dallas-corporate-transportation-black-car-service', $data);
    }
    public function DallaLongTransportationBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'DFW LONG TRANSPORTATION')->get();
        return view('Client.single_page.Service.dallas-long-transportation-black-car-service', $data);
    }

    public function DallasLimousineBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'DALLAS LIMOUSINE RENTALS')->get();
        return view('Client.single_page.Service.dallas-limousine-black-car-service', $data);
    }


    //-----------Areas We Server---------

    public function DentonTexasBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'Denton Texas')->get();
        return view('Client.single_page.AreaWeServe.denton-texas-black-car-service', $data);
    }

    public function RockwallTexasBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'Rockwall Texas')->get();
        return view('Client.single_page.AreaWeServe.rockwall-texas-black-car-service', $data);
    }
    public function KellerTexasBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'Keller Texas')->get();
        return view('Client.single_page.AreaWeServe.keller-texas-black-car-service', $data);
    }


    public function DallasTexasBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'Keller Texas')->get();
        return view('Client.single_page.AreaWeServe.dallas-texas-black-car-service', $data);
    }

    public function ForthWorthTexasBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'Keller Texas')->get();
        return view('Client.single_page.AreaWeServe.forth-worth-texas-black-car-service', $data);
    }

    public function SanAntonioTexasBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'Keller Texas')->get();
        return view('Client.single_page.AreaWeServe.san-antonio-texas-black-car-service', $data);
    }

    public function HoustonTexasBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'Keller Texas')->get();
        return view('Client.single_page.AreaWeServe.houston-texas-black-car-service', $data);
    }

    public function AustinTexasBlackCarService()
    {
        $data['vehicle'] = VehicleManage::where('service_name', 'Keller Texas')->get();
        return view('Client.single_page.AreaWeServe.austin-texas-black-car-service', $data);
    }


    public function Fleet()
    {
        $data['vehicle'] = VehicleManage::paginate(10);
        return view('Client.single_page.fleet', $data);
    }

    public function About()
    {

        return view('Client.single_page.about');
    }


    //---------------Contact Method---------
    public function ContactUs()
    {

        return view('Client.single_page.contact_us');
    }

    public function Booking()
    {
        $data['vehicle'] = VehicleManage::get();
        return view('Client.single_page.Booking.booking', $data);
    }

    public function ContactUsPost(Request $request)
    {


        $store = new ContactUs();
        $store->name = $request->name;
        $store->l_name = $request->l_name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->message = $request->message;
        $store->save();


        $this->MailSend($request);

        return response()->json(['success_app' => 'Successfully Message Received']);
    }
    public function ContactUsPostContact(Request $request)
    {


        $store = new ContactUs();
        $store->name = $request->name;
        $store->l_name = $request->l_name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->message = $request->message;
        $store->save();


        // $this->MailSend($request);

        return response()->json(['success_app' => 'Successfully Message Received']);
    }

    public function MailSend(Request $request)
    {


        $data = array(
            'nam' => $request->name,
            'l_nam' => $request->l_name,
            'ema' => $request->email,
            'ad_ema' => 'dfwblackcarlimollc@gmail.com',
            'ph' => $request->phone,
            'mess' => $request->message,
        );



        Mail::send('mail/mail_send', $data, function ($message) use ($data) {
            $message->from($data['ad_ema'], 'Admin');
            $message->to('no-reply@dfwblackcarlimollc.com', 'Admin');
            $message->subject('Contact Mail');
        });
    }

    public function CouponApplaySumit(Request $request)
    {

        $coupon = Coupon::where('coupon_code', $request->coupon_name)->first();

        if ($coupon) {
            // Check if today's date is within the valid range of the coupon
            $today = Carbon::now();
            $startDate = Carbon::parse($coupon->start_date);


            $endDate = Carbon::parse($coupon->end_date);

            if ($today->isAfter($startDate->subDay()) && $today->isBefore($endDate)) {


                // Return a success response or any necessary data
                return response()->json(['message' => 'Coupon successfully validated', 'coupon' => $coupon], 200);
            } else {
                // Coupon is not valid due to date range
                return response()->json(['message' => 'Coupon is not valid for the current date'], 400);
            }
        } else {
            // Coupon code does not match any coupon
            return response()->json(['message' => 'Coupon code not found'], 404);
        }
    }


    public function SuccessPage()
    {

        return view('Client.single_page.success');
    }

    public function BookingPost(Request $request)
    {



        $store = new BookingManage();
        $store->trip_type = $request->trip_type;
        $store->occasion = $request->occasion;
        $store->total_passengers = $request->total_passengers;
        $store->luggage = $request->luggage;
        $store->pickup_date = $request->pickup_date;
        $store->pickup_time = $request->pickup_time;
        $store->drowp_date = $request->drowp_date;
        $store->drowp_time = $request->drowp_time;
        $store->pickup_location = $request->pickup_location;
        $store->drowp_location = $request->drowp_location;
        $store->vehicle_id = $request->vehicle_id;
        $store->f_name = $request->f_name;
        $store->l_name = $request->l_name;
        $store->company = $request->company;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->second_phone = $request->second_phone;
        $store->message = $request->message;
        $store->payments = $request->payments;
        $store->reg_id = $this->generateUniqueRegId();
        $store->total_amount = $request->total_amount_final;
        $store->hours_distance = $request->hours_distance;


        if ($request->billing_checked == 'on') {
            $store->company_resgister_name = $request->company_resgister_name;
            $store->text_number = $request->text_number;
            $store->street = $request->street;
            $store->street_number = $request->street_number;

            $store->city = $request->city;
            $store->state = $request->state;
            $store->postal_code = $request->postal_code;
            $store->country = $request->country;
        }

        if (isset($request->coupon_id)) {
            $coupon = Coupon::where('id', $request->coupon_id)->first();
            $store->coupon_name = $coupon->coupon_name;
            $store->coupon_id = $request->coupon_id;
            $store->coupon_tk = $coupon->discount_amount;
        }

        $store->status = 1;
        $store->admin_status = 1;
        $store->save();


        // Set a session flash message
        Session::flash('toastr', ['type' => 'success', 'message' => 'Your work has been saved']);


        $this->SendMailAttachPdf($request, $store->reg_id);

        return redirect()->route('SuccessPage');
        // return redirect()->back();

    }

public function generateUniqueRegId(): string
{
    do {
        $regId = Carbon::now()->format('Ymd_His') . '_' . strtoupper(Str::random(4));
    } while (BookingManage::where('reg_id', $regId)->exists());

    return $regId;
}



    public function SendMailAttachPdf(Request $request, $identifier)
    {

        $data['link_gen'] = 'https://dfwblackcarlimollc.com/pdf-view/' . $identifier;

        $data["email"] = $request->email;
        $data["iden"] = $identifier;
        $data["body"] = "This is Demo";
        $data["title"] = "Booking Invoice";
        $data['booking'] = BookingManage::with(['Vehicle'])->where('reg_id', $identifier)->first();
        // $pdf = PDF::loadView('emails.myTestMail', $data);


        Mail::send('emails.myTestMail', $data, function ($message) use ($data) {
            $message->from('dfwblackcarlimollc@gmail.com', 'Admin');
            $recipients = [$data['email'], 'no-reply@dfwblackcarlimollc.com'];
            $message->to($recipients, 'Dear Customer');
            $message->subject($data["title"]);
            // $message->attachData($pdf->output(), "text.pdf");
        });
    }

    public function PdfView($id)
    {



        //   dd($data['list']);
        $data["body"] = "This is Demo";
        $data['booking'] = BookingManage::where('reg_id', $id)->first();
        return view('emails.pdf', $data);
    }
}
