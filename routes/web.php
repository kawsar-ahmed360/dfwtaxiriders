<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Server\AccountSettingController;
use App\Http\Controllers\Server\ProfileUpdateController;
use App\Http\Controllers\Server\UserRoleManageController;
use App\Http\Controllers\Server\BlogManageController;
use App\Http\Controllers\Server\TestimonialController;
use App\Http\Controllers\Server\CouponManageController;
use App\Http\Controllers\Client\FrontendController;
use App\Http\Controllers\Server\ContactMessageManage;
use App\Http\Controllers\Server\LogManageController;
use App\Http\Controllers\Server\VehicleManageController;
use App\Http\Controllers\Server\AdminBookingManageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/pdf-view/{id}', [FrontendController::class, 'PdfView'])->name('PdfView');
Route::get('/', [FrontendController::class, 'MainIndex'])->name('MainIndex');
Route::get('/contact-us', [FrontendController::class, 'ContactUs'])->name('ContactUs');
Route::get('/blogs', [FrontendController::class, 'Blog'])->name('Blog');
Route::get('/blog-details/{slug}', [FrontendController::class, 'BlogDetails'])->name('BlogDetails');
Route::post('/contact-post', [FrontendController::class, 'ContactUsPost'])->name('ContactUsPost');

Route::post('/contact-post-contact', [FrontendController::class, 'ContactUsPostContact'])->name('ContactUsPostContact');

//-------------------Service ------------
Route::get('/premium-dfw-airport-limo-black-car-services', [FrontendController::class, 'PremiumDfwAirportLimoBlackCarServices'])->name('PremiumDfwAirportLimoBlackCarServices');
Route::get('/dallas-corporate-transportation-black-car-service', [FrontendController::class, 'DallasCorporateTransportationBlackCarService'])->name('DallasCorporateTransportationBlackCarService');
Route::get('/dallas-long-transportation-black-car-service', [FrontendController::class, 'DallaLongTransportationBlackCarService'])->name('DallaLongTransportationBlackCarService');
Route::get('/dallas-limousine-black-car-service', [FrontendController::class, 'DallasLimousineBlackCarService'])->name('DallasLimousineBlackCarService');

//-----------Areas We Serve -----------
Route::get('/denton-texas-black-car-service', [FrontendController::class, 'DentonTexasBlackCarService'])->name('DentonTexasBlackCarService');
Route::get('/rockwall-texas-black-car-service', [FrontendController::class, 'RockwallTexasBlackCarService'])->name('RockwallTexasBlackCarService');
Route::get('/keller-texas-black-car-service', [FrontendController::class, 'KellerTexasBlackCarService'])->name('KellerTexasBlackCarService');

Route::get('/dallas-texas-black-car-service', [FrontendController::class, 'DallasTexasBlackCarService'])->name('DallasTexasBlackCarService');

Route::get('/fort-worth-texas-black-car-service', [FrontendController::class, 'ForthWorthTexasBlackCarService'])->name('ForthWorthTexasBlackCarService');

Route::get('/san-antonio-texas-black-car-service', [FrontendController::class, 'SanAntonioTexasBlackCarService'])->name('SanAntonioTexasBlackCarService');

Route::get('/houston-texas-black-car-service', [FrontendController::class, 'HoustonTexasBlackCarService'])->name('HoustonTexasBlackCarService');

Route::get('/austin-texas-black-car-service', [FrontendController::class, 'AustinTexasBlackCarService'])->name('AustinTexasBlackCarService');


Route::get('/fleet', [FrontendController::class, 'Fleet'])->name('Fleet');
Route::get('/about', [FrontendController::class, 'About'])->name('About');
Route::get('/booking', [FrontendController::class, 'Booking'])->name('Booking');
Route::post('/booking-post', [FrontendController::class, 'BookingPost'])->name('BookingPost');
Route::get('/coupon-applay-submit', [FrontendController::class, 'CouponApplaySumit'])->name('CouponApplaySumit');

Route::get('/success-page', [FrontendController::class, 'SuccessPage'])->name('SuccessPage');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'Server','middleware' => 'auth','namespace'=>'Server'], function() {
    
    
    
          //................................Testimonial Section...............................
    route::get('Testimonial/testimonial-create',[TestimonialController::class,'TestimonialCreate'])->name('TestimonialCreate');
    route::post('Testimonial/testimonial-store',[TestimonialController::class,'TestimonialStore'])->name('TestimonialStore');
    route::get('Testimonial/testimonial-index',[TestimonialController::class,'TestimonialIndex'])->name('TestimonialIndex');
    route::get('Testimonial/testimonial-edit/{id}',[TestimonialController::class,'TestimonialEdite'])->name('TestimonialEdite');
    route::post('Testimonial/testimonial-update/{id}',[TestimonialController::class,'TestimonialUpdate'])->name('TestimonialUpdate');
    route::post('Testimonial/testimonial-multi-delete',[TestimonialController::class,'TestimonialMultiDelete'])->name('TestimonialMultiDelete');
    route::get('Testimonial/testimonial-delete/{id}',[TestimonialController::class,'TestimonialDelete'])->name('TestimonialDelete');
    route::get('Testimonial/testimonial-active/{id}',[TestimonialController::class,'TestimonialActive'])->name('TestimonialActive');
    route::get('Testimonial/testimonial-de-active/{id}',[TestimonialController::class,'TestimonialDeActive'])->name('TestimonialDeActive');
    route::get('Testimonial/testimonial-text-page',[TestimonialController::class,'TestimonialTextPage'])->name('TestimonialTextPage');
    route::post('Testimonial/testimonial-text-update',[TestimonialController::class,'TestimonialTextUpdate'])->name('TestimonialTextUpdate');
    
    
    
        //.........................Blog Manage Router.......
        Route::get('Blog-Manage/Blog-Manage-create', [BlogManageController::class, 'BlogCreate'])->name('BlogCreate');
        Route::get('Blog-Manage/Blog-Manage-index', [BlogManageController::class, 'BlogIndex'])->name('BlogIndex');
        Route::post('Blog-Manage/Blog-Manage-post', [BlogManageController::class, 'BlogPost'])->name('BlogPost');
        Route::post('Blog-Manage/Blog-Manage-update', [BlogManageController::class, 'BlogUpdate'])->name('BlogUpdate');
        Route::post('Blog-Manage/Blog-Manage-multiple-delete', [BlogManageController::class, 'BlogMultipleDelete'])->name('BlogMultipleDelete');
        Route::get('Blog-Manage/Blog-Manage-edit/{id}', [BlogManageController::class, 'BlogEdit'])->name('BlogEdit');
        Route::get('Blog-Manage/Blog-Manage-delete/{id}', [BlogManageController::class, 'BlogDelete'])->name('BlogDelete');

    //---------------------Account Setting Routes-------------------
    route::get('AccountSetting/account-setting-form',[AccountSettingController::class, 'AccountSettingForm'])->name('AccountSettingForm');
    route::post('AccountSetting/account-setting-post',[AccountSettingController::class, 'AccountSettingPost'])->name('AccountSettingPost');
    //---------------------Profile Update Routes-------------------
    route::get('ProfileUpdate/profile-update-form',[ProfileUpdateController::class, 'ProfileUpdateForm'])->name('ProfileUpdateForm');
    route::post('ProfileUpdate/profile-update-post',[ProfileUpdateController::class, 'ProfileUpdatePost'])->name('ProfileUpdatePost');
    //---------------------User Role Manage Routes-------------------
    route::get('UserRole/user-role-list',[UserRoleManageController::class, 'UserRoleList'])->name('UserRoleList');
    route::get('UserRole/user-role-create',[UserRoleManageController::class, 'UserRoleCreate'])->name('UserRoleCreate');
    route::get('UserRole/user-role-edit/{id}',[UserRoleManageController::class, 'UserRoleEdit'])->name('UserRoleEdit');
    route::get('UserRole/user-role-delete/{id}',[UserRoleManageController::class, 'UserRoleDelete'])->name('UserRoleDelete');
    route::post('UserRole/user-role-store',[UserRoleManageController::class, 'UserRoleStore'])->name('UserRoleStore');
    route::post('UserRole/user-role-update',[UserRoleManageController::class, 'UserRoleUpdate'])->name('UserRoleUpdate');

        //---------------------Coupon Manage Routes-------------------
    route::get('CouponManage/coupon-list',[CouponManageController::class, 'CouponList'])->name('CouponList');
    route::get('CouponManage/coupon-create',[CouponManageController::class, 'CouponCreate'])->name('CouponCreate');
    route::get('CouponManage/coupon-edit/{id}',[CouponManageController::class, 'CouponEdit'])->name('CouponEdit');
    route::get('CouponManage/coupon-delete/{id}',[CouponManageController::class, 'CouponDelete'])->name('CouponDelete');
    route::post('CouponManage/coupon-store',[CouponManageController::class, 'CouponStore'])->name('CouponStore');
    route::post('CouponManage/coupon-update',[CouponManageController::class, 'CouponUpdate'])->name('CouponUpdate');

       //---------------------Contact Message Manage Routes-------------------
       route::get('ContactMessage/contact-message',[ContactMessageManage::class, 'ContactMessageList'])->name('ContactMessageList');
       route::get('ContactMessage/contact-delete/{id}',[ContactMessageManage::class, 'ContactMessageDelete'])->name('ContactMessageDelete');
       route::post('ContactMessage/contact-multi-delete',[ContactMessageManage::class, 'ContactMultiDelete'])->name('ContactMultiDelete');

       //---------------------Log Manage Routes-------------------
       route::get('LogManage/log-manage-message',[LogManageController::class, 'LogManageList'])->name('LogManageList');
       route::get('LogManage/log-manage-delete/{id}',[LogManageController::class, 'LogDelete'])->name('LogDelete');


        //---------------------Vehicle Manage Routes-------------------
    route::get('VehicleManage/vehicle-manage-list',[VehicleManageController::class, 'VehicleManageList'])->name('VehicleManageList');
    route::get('VehicleManage/vehicle-manage-create',[VehicleManageController::class, 'VehicleManageCreate'])->name('VehicleManageCreate');
    route::get('VehicleManage/vehicle-manage-edit/{id}',[VehicleManageController::class, 'VehicleManageEdit'])->name('VehicleManageEdit');
    route::get('VehicleManage/vehicle-manage-delete/{id}',[VehicleManageController::class, 'VehicleManageDelete'])->name('VehicleManageDelete');
    route::post('VehicleManage/vehicle-manage-store',[VehicleManageController::class, 'VehicleManageStore'])->name('VehicleManageStore');
    route::post('VehicleManage/vehicle-manage-update',[VehicleManageController::class, 'VehicleManageUpdate'])->name('VehicleManageUpdate');


    //----------------Booking Manage Controler Amdin
    route::get('BookingManage/booking-list',[AdminBookingManageController::class, 'BookingList'])->name('BookingList');
    route::get('BookingManage/booking-details/{id}',[AdminBookingManageController::class, 'BookingDetails'])->name('BookingDetails');
    
     route::get('BookingManage/booking-details-invoice/{id}',[AdminBookingManageController::class, 'BookingDetailsInvoice'])->name('BookingDetailsInvoice');
     route::get('BookingManage/booking-delete/{id}',[AdminBookingManageController::class, 'BookingDelete'])->name('BookingDelete');

       
});
