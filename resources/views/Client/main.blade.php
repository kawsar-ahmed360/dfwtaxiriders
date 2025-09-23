@extends('Client.master')

@section('slider')



    <!-- Floating Social Menu start -->
    <ul class="floatting-menu-wrap">
        <li>
            <a href="https://www.facebook.com/" target="_blank">
                <span class="background facebook"></span>
                <i class="fa fa-facebook-f"></i></a>
        </li>

        <li>
            <a href="https://wa.me/" target="_blank">
                <span class="background whatsapp"></span>
                <i class="fa fa-whatsapp"></i></a>
        </li>
        <li>
            <a href="tel:+14694268110">
                <span class="background phone"></span>
                <i class="fa fa-phone"></i></a>
        </li>
        <li>
            <a href="mailto:info@dfwblackcarlimollc.com">
                <span class="background envelope"></span>
                <i class="fa fa-envelope"></i></a>
        </li>
    </ul>

    <!-- Floating Social Menu end -->



    <section class="home-slider">
        <div class="baner-slider revslider-wrap tp-overflow-hidden slider-parallax clearfix" id="slider">
            <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper tp-overflow-hidden" data-alias="concept1"
                style="background-color: #000000; padding: 0px">
                <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
                <div id="rev_slider_202_1" class="rev_slider tp-overflow-hidden" style="display: none"
                    data-version="5.1.1RC">
                    <ul>
                        <!-- SLIDE  1-->
                        <li data-index="rs-670" class="dark" data-transition="slidingoverlayleft" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb=""
                            data-rotate="0" data-saveperformance="off" data-title="Car Image" data-description="">
                            <!-- MAIN IMAGE -->
                            <picture>
                                <source media="(max-width: 575px)" srcset="{{asset('Client/assets/img/Mobile-1.jpg')}}">
                                <img class="modify-img" data-bgposition="bottom" data-bgfit="cover"
                                    data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina
                                    src="{{asset('Client/assets/img/Desktop-1.jpg')}}" alt="" />
                            </picture>

                            <!-- Contents -->
                            <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="middle"
                                data-voffset="-100" data-transform_idle="o:1;"
                                data-transform_in="y:top;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:top;s:1000;e:Power2.easeInOut;" data-start="500">
                                <h2>DFW Taxi Riders is <br> Best & affordable limousine <br> service in Dallas,Tx,USA
                                    & Fort <br> Worth </h2>

                            </div>
                            <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="middle"
                                data-voffset="0" data-transform_idle="o:1;"
                                data-transform_in="y:top;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:top;s:1000;e:Power2.easeInOut;" data-start="1500">
                                <a href="{{route('Booking')}}" class="button">Book Now</a>
                            </div>

                        </li>

                        <!-- SLIDE  2-->
                        <li data-index="rs-671" class="dark" data-transition="slidingoverlayleft" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb=""
                            data-rotate="0" data-saveperformance="off" data-title="Car Image" data-description="">
                            <!-- MAIN IMAGE -->
                            <picture>
                                <source media="(max-width: 575px)" srcset="{{asset('Client/assets/img/Mobile-2.jpg')}}">
                                <img class="modify-img" data-bgposition="bottom" data-bgfit="cover"
                                    data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina
                                    src="{{asset('Client/assets/img/Desktop-2.jpg')}}" alt="" />
                            </picture>
                            <!-- Contents -->
                            <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="middle"
                                data-voffset="-100" data-transform_idle="o:1;"
                                data-transform_in="y:top;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:top;s:1000;e:Power2.easeInOut;" data-start="500">
                                <h2>DFW Taxi Riders is <br> Best & affordable Taxi service in <br>Irving,Tx &
                                    Dallas Fort Worth </h2>
                            </div>
                            <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="middle"
                                data-voffset="0" data-transform_idle="o:1;"
                                data-transform_in="y:top;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:top;s:1000;e:Power2.easeInOut;" data-start="1500">
                                <a href="{{route('Booking')}}" class="button">Book Now</a>
                            </div>


                        </li>

                        <!-- SLIDE  3-->
                        <li data-index="rs-672" class="dark" data-transition="slidingoverlayleft" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb=""
                            data-rotate="0" data-saveperformance="off" data-title="Car Image" data-description="">
                            <!-- MAIN IMAGE -->
                            <picture>
                                <source media="(max-width: 575px)" srcset="{{asset('Client/assets/img/Mobile-3.jpg')}}">
                                <img class="modify-img" data-bgposition="bottom" data-bgfit="cover"
                                    data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina
                                    src="{{asset('Client/assets/img/Desktop-3.jpg')}}" alt="" />
                            </picture>
                            <!-- Contents -->
                            <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="middle"
                                data-voffset="-100" data-transform_idle="o:1;"
                                data-transform_in="y:top;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:top;s:1000;e:Power2.easeInOut;" data-start="500">
                                <h2>DFW Taxi Riders is <br> Best & affordable Taxi <br> service in Irving ,Tx <br> & DFW </h2>
                            </div>
                            <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="middle"
                                data-voffset="0" data-transform_idle="o:1;"
                                data-transform_in="y:top;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:top;s:1000;e:Power2.easeInOut;" data-start="1500">
                                <a href="{{route('Booking')}}" class="button">Book Now</a>
                            </div>

                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important; color: #fff"></div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('parallax')

    <section class="parallax-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h5>“Your Trusted Taxi and Airport Transport Options”</h5>
                        <h2 class="text-white">Ride with Confidence – Welcome to DFW Taxi Riders</h2>
                        <p class="text-white">“DFW Taxi Riders offers high-end black car taxi services with expert drivers. Enjoy comfort, style, and punctual transportation for airport, business, or city travel.”.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-mini-feature mini-feature-1">
                        <div class="mini-feature-icon"> <i class="fa ti-car"></i>
                        </div>
                        <div class="mini-feature-info">
                            <h6>Safety First</h6>
                            <p>
                                DFW Taxi Riders – Highly Trained Drivers and Professional Chauffeurs
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-mini-feature mini-feature-2">
                        <div class="mini-feature-icon"> <i class="fa ti-thumb-up"></i>
                        </div>
                        <div class="mini-feature-info">
                            <h6>Cost-Effective Transportation </h6>
                            <p>
                                Reliable taxi service in DFW with a wide range of vehicles to suit your needs and budget.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-mini-feature mini-feature-3">
                        <div class="mini-feature-icon"> <i class="fa ti-truck"></i>
                        </div>
                        <div class="mini-feature-info">
                            <h6>Largest Fleet</h6>
                            <p>
                                Travel in style and comfort with our fleet of sedans, luxury limousines, coach buses, and taxis across Dallas-Fort Worth
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-mini-feature">
                        <div class="mini-feature-icon"> <i class="fa ti-map-alt"></i>
                        </div>
                        <div class="mini-feature-info">
                            <h6>DFW Services</h6>
                            <p>
                                Safe, comfortable, and dependable transportation services available across Texas with DFW Taxi Riders
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


{{-- @section('about')

<section class="partner-video-slider">
    <div class="container valued-institute__section-container">
        <div class="row partner-video-slider__section-container__section-row">
            <div class="col-md-4 partner-video-slider__section-container__section-row__section-text-wapper">
                <div class="partner-video-slider__section-container__section-row__section-text-wapper__text">
                    <h1 class="section-title textSplit splitted-text-animation">
                        Reach Your Destinations With <strong>Maximum Comfort</strong>
                    </h1>
                    <div
                        class="partner-video-slider__section-container__section-row__section-text-wapper__button__count">
                        <span class="pagingInfo"></span>
                    </div>
                    <div
                        class="partner-video-slider__section-container__section-row__section-text-wapper__text__button">
                        <div
                            class="partner-video-slider__section-container__section-row__section-text-wapper__text__button__slider-button">
                            <div
                                class="partner-video-slider__section-container__section-row__section-text-wapper__text__button__slider-button__left-btn partner-video-slider-prev">
                                <svg id="Group_150171" data-name="Group 15009" xmlns="http://www.w3.org/2000/svg"
                                    width="40" height="40" viewBox="0 0 40 40">
                                    <circle id="Ellipse_449" data-name="Ellipse 449" cx="20" cy="20" r="20"
                                        fill="#f39c12" />
                                    <circle class="hover-init-btn" id="Ellipse_15011" data-name="Ellipse 450" cx="20"
                                        cy="20" r="20" fill="#f39c12" />
                                    <g id="Group_15011" data-name="Group 15008" transform="translate(12.963 10)">
                                        <line id="Line_3809" data-name="Line 3809" x2="5" y2="5" fill="none"
                                            stroke="#ffffff" stroke-linecap="round" stroke-width="1" />
                                        <line id="Line_3810" data-name="Line 3810" y1="5" x2="5"
                                            transform="translate(0 5)" fill="none" stroke="#ffffff"
                                            stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </div>

                            <div
                                class="partner-video-slider__section-container__section-row__section-text-wapper__text__button__slider-button__right-btn partner-video-slider-next">
                                <svg id="Group_15017" data-name="Group 15009" xmlns="http://www.w3.org/2000/svg"
                                    width="40" height="40" viewBox="0 0 40 40">
                                    <circle id="Ellipse_449" data-name="Ellipse 449" cx="20" cy="20" r="20"
                                        fill="#f39c12" />
                                    <circle class="hover-init-btn" id="Ellipse_15011" data-name="Ellipse 450" cx="20"
                                        cy="20" r="20" fill="#f39c12" />
                                    <g id="Group_15011" data-name="Group 15008" transform="translate(12.963 10)">
                                        <line id="Line_3809" data-name="Line 3809" x2="5" y2="5" fill="none"
                                            stroke="#ffffff" stroke-linecap="round" stroke-width="1" />
                                        <line id="Line_3810" data-name="Line 3810" y1="5" x2="5"
                                            transform="translate(0 5)" fill="none" stroke="#ffffff"
                                            stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="partner-video-slider__section-container__section-row__section-text-wapper__button">
                    <div
                        class="partner-video-slider__section-container__section-row__section-text-wapper__button__slider-button">
                        <div
                            class="partner-video-slider__section-container__section-row__section-text-wapper__button__slider-button__left-btn partner-video-slider-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_5984" data-name="Group 5984" transform="translate(-1168 -4841)">
                                    <circle id="Ellipse_380" data-name="Ellipse 380" cx="20" cy="20" r="20"
                                        transform="translate(1168 4841)" fill="rgba(193,188,182,0)" />
                                    <circle class="hover-init-btn" id="Ellipse_350" data-name="Ellipse 385" cx="20"
                                        cy="20" r="1" transform="translate(1168 4841)" fill="rgba(193,188,182,0)" />
                                    <g id="Group_5983" data-name="Group 5983"
                                        transform="translate(1184 4866) rotate(-90)">
                                        <line id="Line_352" data-name="Line 352" y1="5" x2="5" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-width="1" />
                                        <line id="Line_353" data-name="Line 353" x1="5" y1="5" transform="translate(5)"
                                            fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <div
                            class="partner-video-slider__section-container__section-row__section-text-wapper__button__slider-button__right-btn partner-video-slider-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_5984" data-name="Group 5984" transform="translate(-1168 -4841)">
                                    <circle id="Ellipse_380" data-name="Ellipse 380" cx="20" cy="20" r="20"
                                        transform="translate(1168 4841)" fill="rgba(193,188,182,0)" />
                                    <circle class="hover-init-btn" id="Ellipse_350" data-name="Ellipse 385" cx="20"
                                        cy="20" r="1" transform="translate(1168 4841)" fill="rgba(193,188,182,0)" />
                                    <g id="Group_5983" data-name="Group 5983"
                                        transform="translate(1184 4866) rotate(-90)">
                                        <line id="Line_352" data-name="Line 352" y1="5" x2="5" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-width="1" />
                                        <line id="Line_353" data-name="Line 353" x1="5" y1="5" transform="translate(5)"
                                            fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 row partner-video-slider__section-container__section-row__init">
                <div class="col-md-12 partner-video-slider__section-container__section-row__section-col">
                    <div
                        class="col-md-6 partner-video-slider__section-container__section-row__section-col__image-wapper Light anim box-slide-left">
                        <img src="{{asset('Client/assets/img/car1.webp')}}" alt="" />
                    </div>

                    <div
                        class="col-md-6 partner-video-slider__section-container__section-row__section-col__content-wrapper">
                        <svg class="quotation-mark" xmlns="http://www.w3.org/2000/svg" width="30" height="19.787"
                            viewBox="0 0 30 19.787">
                            <g id="Group_16062" data-name="Group 16062" transform="translate(-841.85 -2250.802)">
                                <path id="Path_7707" data-name="Path 7707" d="M6.619,0,0,19.787H9.9L16.516,0Z"
                                    transform="translate(841.851 2250.802)" fill="#f39c12" opacity="0.5" />
                                <path id="Path_7708" data-name="Path 7708" d="M58.321,0,51.7,19.787h9.9L68.22,0Z"
                                    transform="translate(803.63 2250.802)" fill="#f39c12" opacity="0.5" />
                            </g>
                        </svg>



                        <p class="anim fade-up video-content">
                            Experienced staff and professionally trained chauffeurs
                        </p>

                        <div class="desig">
                            <h5 class="textSplit splitted-text-animation video-content-info">Safety First</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 partner-video-slider__section-container__section-row__section-col">
                    <div
                        class="col-md-6 partner-video-slider__section-container__section-row__section-col__image-wapper Light anim box-slide-left">
                        <img src="{{asset('Client/assets/img/car2.webp')}}" alt="" />
                    </div>

                    <div
                        class="col-md-6 partner-video-slider__section-container__section-row__section-col__content-wrapper">
                        <svg class="quotation-mark" xmlns="http://www.w3.org/2000/svg" width="30" height="19.787"
                            viewBox="0 0 30 19.787">
                            <g id="Group_16062" data-name="Group 16062" transform="translate(-841.85 -2250.802)">
                                <path id="Path_7707" data-name="Path 7707" d="M6.619,0,0,19.787H9.9L16.516,0Z"
                                    transform="translate(841.851 2250.802)" fill="#f39c12" opacity="0.5" />
                                <path id="Path_7708" data-name="Path 7708" d="M58.321,0,51.7,19.787h9.9L68.22,0Z"
                                    transform="translate(803.63 2250.802)" fill="#f39c12" opacity="0.5" />
                            </g>
                        </svg>

                        <p class="anim fade-up video-content">
                            We can offer you the right vehicle at the right price to fit your budget
                        </p>

                        <div class="desig">
                            <h5 class="textSplit splitted-text-animation video-content-info">Reasonable Rates</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 partner-video-slider__section-container__section-row__section-col">
                    <div
                        class="col-md-6 partner-video-slider__section-container__section-row__section-col__image-wapper Light anim box-slide-left">
                        <img src="{{asset('Client/assets/img/car3.webp')}}" alt="" />
                    </div>

                    <div
                        class="col-md-6 partner-video-slider__section-container__section-row__section-col__content-wrapper">
                        <svg class="quotation-mark" xmlns="http://www.w3.org/2000/svg" width="30" height="19.787"
                            viewBox="0 0 30 19.787">
                            <g id="Group_16062" data-name="Group 16062" transform="translate(-841.85 -2250.802)">
                                <path id="Path_7707" data-name="Path 7707" d="M6.619,0,0,19.787H9.9L16.516,0Z"
                                    transform="translate(841.851 2250.802)" fill="#f39c12" opacity="0.5" />
                                <path id="Path_7708" data-name="Path 7708" d="M58.321,0,51.7,19.787h9.9L68.22,0Z"
                                    transform="translate(803.63 2250.802)" fill="#f39c12" opacity="0.5" />
                            </g>
                        </svg>

                        <p class="anim fade-up video-content">
                            We offer an extensive fleet of vehicles including sedans, limousines and coach buses
                        </p>

                        <div class="desig">
                            <h5 class="textSplit splitted-text-animation video-content-info">Largest Fleet</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 partner-video-slider__section-container__section-row__section-col">
                    <div
                        class="col-md-6 partner-video-slider__section-container__section-row__section-col__image-wapper Light anim box-slide-left">
                        <img src="{{asset('Client/assets/img/car1.webp')}}" alt="" />
                    </div>

                    <div
                        class="col-md-6 partner-video-slider__section-container__section-row__section-col__content-wrapper">
                        <svg class="quotation-mark" xmlns="http://www.w3.org/2000/svg" width="30" height="19.787"
                            viewBox="0 0 30 19.787">
                            <g id="Group_16062" data-name="Group 16062" transform="translate(-841.85 -2250.802)">
                                <path id="Path_7707" data-name="Path 7707" d="M6.619,0,0,19.787H9.9L16.516,0Z"
                                    transform="translate(841.851 2250.802)" fill="#f39c12" opacity="0.5" />
                                <path id="Path_7708" data-name="Path 7708" d="M58.321,0,51.7,19.787h9.9L68.22,0Z"
                                    transform="translate(803.63 2250.802)" fill="#f39c12" opacity="0.5" />
                            </g>
                        </svg>

                        <p class="anim fade-up video-content">We provide our transportation services in Texas, USA</p>

                        <div class="desig">
                            <h5 class="textSplit splitted-text-animation video-content-info">Texas Service</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection --}}

@section('our_benefits')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h5>Main features</h5>
                        <h2>Experience the DFW Taxi Riders Difference</h2>
                    </div>
                </div>
            </div>
            <div class="our_benifits">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4 item-row">
                            <div class="our_benifits_item">
                                <div class="benifits_icon_container"><i class="fa fa-money benifits_icon"></i></div>
                                <div class="our_benifits_content">
                                    <div class="benifits_item_title">Fixed Price</div>
                                    <p class="benifits_item_text">The fixed fare is set in every taximeter as the main
                                        tariff.</p>
                                </div>
                            </div>
                            <div class="our_benifits_item">
                                <div class="benifits_icon_container"><i class="fa fa-tag benifits_icon"></i></div>
                                <div class="our_benifits_content">
                                    <div class="benifits_item_title">No Fee</div>
                                    <p class="benifits_item_text">We guarantee fixed price and you should not pay fees.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <img src="https://getcab.ancorathemes.com/wp-content/uploads/2016/10/car.jpg" alt="yellow-cab">
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 item-row">
                            <div class="our_benifits_item right">
                                <div class="our_benifits_content right">
                                    <div class="benifits_item_title">100% Pleasure</div>
                                    <p class="benifits_item_text">We have a lot of standing customers and high ratings.</p>
                                </div>
                                <div class="benifits_icon_container"><i class="fa fa-thumbs-up benifits_icon"></i></div>
                            </div>
                            <div class="our_benifits_item right">
                                <div class="our_benifits_content right">
                                    <div class="benifits_item_title">Nationwide</div>
                                    <p class="benifits_item_text">Our application is the easiest way to book a taxi.</p>
                                </div>
                                <div class="benifits_icon_container"><i class="fa fa-globe benifits_icon"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('choose_your_car')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h5>Car Classes and rates</h5>
                        <h2>Choose Your Cars</h2>
                    </div>
                </div>
            </div>
            <div class="choose_your_car">
                <div class="row gap-3">
                    <div class="col-12 col-md-4">
                        <div class="choose_your_car_card">
                            <div class="card_icon_container">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="card_title">Economy Class</div>
                            <div class="card_des">Our taxi service offers a big car selection from luxury vehicles to budget
                                car</div>
                            <div class="card_price">$1,5/mi</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="choose_your_car_card">
                            <div class="card_icon_container">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="card_title">Standard Class</div>
                            <div class="card_des">Our taxi service offers a big car selection from luxury vehicles to budget
                                cars</div>
                            <div class="card_price">$2,5/mi</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="choose_your_car_card">
                            <div class="card_icon_container">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="card_title">Business Class</div>
                            <div class="card_des">Our taxi service offers a big car selection from luxury vehicles to budget
                                cars</div>
                            <div class="card_price">$3,5/mi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{-- @section('feature_two')

<section class="what-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="what-area-image">
                    <img src="{{asset('Client/assets/img/about-car.jpg')}}" class="img-fluid w-100" alt="Car" />
                    <div class="outer-image">
                        <img src="{{asset('Client/assets/img/ceo.jpg')}}" class="img-fluid" alt="CEO" />
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="about-ceo">
                    <svg class="quotation-mark" xmlns="http://www.w3.org/2000/svg" width="30" height="19.787"
                        viewBox="0 0 30 19.787">
                        <g id="Group_16062" data-name="Group 16062" transform="translate(-841.85 -2250.802)">
                            <path id="Path_7707" data-name="Path 7707" d="M6.619,0,0,19.787H9.9L16.516,0Z"
                                transform="translate(841.851 2250.802)" fill="#f39c12" opacity="1" />
                            <path id="Path_7708" data-name="Path 7708" d="M58.321,0,51.7,19.787h9.9L68.22,0Z"
                                transform="translate(803.63 2250.802)" fill="#f39c12" opacity="1" />
                        </g>
                    </svg>
                    <h3>I invite you to try our service and I personally guarantee
                        you will have a fully satisfied experience.</h3>
                    <h5>Md. Rabi-Ul-Alam - CHAIRMAN & CEO</h5>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection --}}

@section('feature_three')

    <section class="requirement">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="requirement-image loader">
                        <img class="modify-img" data-image-small="{{asset('Client/assets/img/requirement.jpg')}}"
                            data-image-large="{{asset('Client/assets/img/requirement.jpg')}}"
                            data-image-standard="{{asset('Client/assets/img/requirement.jpg')}}" data-src=""
                            src="{{asset('Client/assets/img/blur.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="requirement-text">
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                            “DFW Taxi Riders – Full-Service Taxi and Airport Transportation”
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                               “DFW Taxi Riders offers comprehensive fleet management solutions for businesses of all sizesFrom small fleets to large-scale operations,our services help improve vehicle performance, reduce operating costs, and boost productivity. Trust our expert team to provide reliable, efficient, and cost-effective fleet solutions tailored to your business needs.”
                        </p>

                        <ol class="wow fadeInUp" data-wow-delay="0.2s">
                            <li>Highly Experienced Staff</li>
                            <li>Largest Fleet</li>
                            <li>Texas Services</li>
                            <li>Global Network</li>
                            <li>24/7 Full-Service Transportation</li>
                            <li>Longstanding Safety Record</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('testimonial')
    <section class="section-padding testimonial-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h5>Reviews</h5>
                        <h2 class="text-white">Our happy clients</h2>
                    </div>
                </div>
            </div>

            <div class="testimonial-home text-white"> <!-- fixed typo: testimonaial-home → testimonial-home -->
                <div class="testimonial-carousel owl-carousel"> <!-- add owl-carousel class -->
                    <div class="item">
                        <div class="icon-container"><i class="fa fa-commenting-o" aria-hidden="true"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quibusdam accusamus perferendis
                            architecto eius quas voluptatum, illo minima placeat, inventore ea asperiores beatae dolor modi
                            nobis saepe? Ipsa, ut aspernatur.</p>
                        <div class="author">Author</div>
                    </div>
                    <div class="item">
                        <div class="icon-container"><i class="fa fa-commenting-o" aria-hidden="true"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quibusdam accusamus perferendis
                            architecto eius quas voluptatum, illo minima placeat, inventore ea asperiores beatae dolor modi
                            nobis saepe? Ipsa, ut aspernatur.</p>
                        <div class="author">Author</div>
                    </div>
                    <div class="item">
                        <div class="icon-container"><i class="fa fa-commenting-o" aria-hidden="true"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quibusdam accusamus perferendis
                            architecto eius quas voluptatum, illo minima placeat, inventore ea asperiores beatae dolor modi
                            nobis saepe? Ipsa, ut aspernatur.</p>
                        <div class="author">Author</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('latest_news')
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h5>Stay in touch</h5>
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbQ_WshQjF1mL3M_Z4AZgFSZ72-TNSqg8Tsg&s"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text pb-4">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                     <div class="card mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbQ_WshQjF1mL3M_Z4AZgFSZ72-TNSqg8Tsg&s"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text pb-4">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="button ">Ream More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                     <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbQ_WshQjF1mL3M_Z4AZgFSZ72-TNSqg8Tsg&s"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text pb-4">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @section('have_question')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h5>“Need a Taxi Near You? See How DFW Taxi Riders Can Help</h5>
                        <h2>“Need Help Booking Your DFW Taxi Ride ? Call us or email us all the information are down below”</h2>
                        <p>“Got questions about DFW Taxi Riders? Learn more about our airport taxi service, city rides, pricing, and 24/7 availability.”</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp p-0 m-0" data-wow-delay="0.2s">
                    <div class="question-item q-item-1">
                        <div class="question-item-icon"> <i class="fa fa-map-marker" aria-hidden="true"></i>

                        </div>
                        <div class="question-item-info">
                            <h6>Our address</h6>
                            <p>
                                We can offer you the right vehicle at the right price to fit your budget
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp p-0 m-0" data-wow-delay="0.2s">
                    <div class="question-item q-item-2">
                        <div class="question-item-icon"> <i class="fa fa-phone" aria-hidden="true"></i>

                        </div>
                        <div class="question-item-info">
                            <h6>Our Phones</h6>
                            <p>
                                +1 (972) 415 5255
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp p-0 m-0" data-wow-delay="0.2s">
                   <div class="question-item">
                        <div class="question-item-icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i>

                        </div>
                        <div class="question-item-info">
                            <h6>Our Emails</h6>
                            <p>
                                info@dfwtaxiriders.com <br> rahman_pabel@yahoo.com
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection --}}

@section('service')

    <section class="service-area bg-white section-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="service-area-text text-center wow fadeInUp" data-wow-delay="0.2s">
                        <h2>“Trusted Dallas Taxi Service | Comfort, Safety & Customer Satisfaction”</h2>
                        <p>
                            “Need a dependable DFW taxi service near me? Count on DFW Taxi Riders for airport transfers, city rides, and black car service day or night.”
                        </p>
                        <a href="{{route('Booking')}}" class="button service-area-btn">Book Your Taxi</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-area-image wow fadeInUp" data-wow-delay="0.2s">
                        {{-- <a href="#"><img src="{{asset('Client/assets/img/home-slider1.jpg')}}" class="img-fluid"
                                alt="" /></a> --}}
                                <div class="grid-container">
                                    <div class="item tall">
                                        <img src="https://quanticalabs.com/wp_themes4/autoride/wp-content/uploads/sites/2/2019/10/image_04-2.jpg"
                                            alt="Image 1">
                                    </div>
                                    <div class="item small">
                                        <img src="https://quanticalabs.com/wp_themes4/autoride/wp-content/uploads/sites/2/2019/10/image_03-2.jpg"
                                            alt="Image 2">
                                    </div>
                                    <div class="item small">
                                        <img src="https://quanticalabs.com/wp_themes4/autoride/wp-content/uploads/sites/2/2019/10/image_02-2.jpg"
                                            alt="Image 3">
                                    </div>
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('fleet')


    <section class="products bg-gray pt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h5>WHAT WE OFFER</h5>
                        <h2>See What We Can Do for You</h2>
                    </div>
                </div>

                <div class="project__lists col-md-12">

                    @foreach (@$vehicle as $key => $v)



                        <div class="col-lg-4 col-md-6">
                            <div class="project__img-slider__init__slider-wrapper car-collection">
                                <div class="project__img-slider__init__slider-wrapper__img-first">
                                    <img class="modify-img"
                                        data-image-small="{{(@$v->image) ? url('upload/Vehicle/' . @$v->image) : ''}}"
                                        data-image-large="{{(@$v->image) ? url('upload/Vehicle/' . @$v->image) : ''}}"
                                        data-image-standard="{{(@$v->image) ? url('upload/Vehicle/' . @$v->image) : ''}}"
                                        data-src="{{(@$v->image) ? url('upload/Vehicle/' . @$v->image) : ''}}"
                                        src="{{(@$v->image) ? url('upload/Vehicle/' . @$v->image) : ''}}" alt="" />

                                </div>
                                <div class="project__img-slider__init__slider-wrapper__item-title">
                                    <div class="project__img-slider__init__slider-wrapper__item-title__inner">
                                        <div class="left">
                                            {{-- <h5>SUV</h5> --}}
                                            <h4>{{@$v->title}}</h4>
                                        </div>
                                        <svg id="Group_18" data-name="Group 18" xmlns="http://www.w3.org/2000/svg" width="30"
                                            height="30" viewBox="0 0 30 30">
                                            <circle id="Ellipse_2" data-name="Ellipse 2" cx="15" cy="15" r="15"
                                                fill="#f39c12" />
                                            <g id="Icon_feather-plus" data-name="Icon feather-plus"
                                                transform="translate(10 10)">
                                                <path id="Path_3" data-name="Path 3" d="M18,7.5v10"
                                                    transform="translate(-13 -7.5)" fill="none" stroke="#405672"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                                <path id="Path_4" data-name="Path 4" d="M7.5,18h10"
                                                    transform="translate(-7.5 -13)" fill="none" stroke="#405672"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <a class="more-details" href="#" target=""></a>
                                <div class="rate-details-content">
                                    <div class="rate-details" id="popupModal">
                                        <span class="close">&times;</span>
                                        <p>{{@$v->rate}}</p>

                                        <div class="table-responsive">
                                            <table class="table table-striped-columns">
                                                <thead>
                                                    <tr>
                                                        <th>Flat Rate</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="color-text">Up to</th>
                                                        <th scope="col">10 <span>miles</span></th>
                                                        <th scope="col">20 <span>miles</span></th>
                                                        <th scope="col">30 <span>miles</span></th>
                                                        <th scope="col">40 <span>miles</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="color-text">Price</th>
                                                        <td scope="row">{{@$v->flat_rate_10_miles}}</td>
                                                        <td scope="row">{{@$v->flat_rate_20_miles}}</td>
                                                        <td scope="row">{{@$v->flat_rate_30_miles}}</td>
                                                        <td scope="row">{{@$v->flat_rate_40_miles}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    @endforeach


                </div>
            </div>

        </div>
    </section>









@endsection


@section('team')

    <!--<section class="driver-area bg-gray section-padding">
             <div class="container">
                <div class="row d-flex align-items-center">
                   <div class="col-md-12">
                      <div class="section-title">
                         <h5>MEET OUR Team</h5>
                         <h2>Your Safety Is Our Top Priority</h2>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                      <div class="single-driver-content text-center">
                         <div class="driver-img">
                            <img src="{{asset('Client/assets/img/man.jpg')}}" class="img-fluid rounded-circle image" alt="" />
                         </div>

                         <div class="driver-info">
                            <h4>GEORGE SASIN</h4>
                            <h6>Driver</h6>
                            <p>
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, tenetur id! Numquam esse
                               voluptatum dolor amet magni odit corrupti explicabo?
                            </p>
                         </div>
                         <div class="driver-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                      <div class="single-driver-content text-center">
                         <div class="driver-img">
                            <img src="{{asset('Client/assets/img/man.jpg')}}" class="img-fluid rounded-circle image" alt="" />
                         </div>

                         <div class="driver-info">
                            <h4>GEORGE SASIN</h4>
                            <h6>Driver</h6>
                            <p>
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, tenetur id! Numquam esse
                               voluptatum dolor amet magni odit corrupti explicabo?
                            </p>
                         </div>
                         <div class="driver-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                      <div class="single-driver-content text-center">
                         <div class="driver-img">
                            <img src="{{asset('Client/assets/img/man.jpg')}}" class="img-fluid rounded-circle image" alt="" />
                         </div>

                         <div class="driver-info">
                            <h4>GEORGE SASIN</h4>
                            <h6>Driver</h6>
                            <p>
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, tenetur id! Numquam esse
                               voluptatum dolor amet magni odit corrupti explicabo?
                            </p>
                         </div>
                         <div class="driver-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-12">
                      <div class="text-center mt-80"><a class="button" href="{{route('ContactUs')}}">Contact Us</a></div>
                   </div>
                </div>
             </div>
          </section>-->

@endsection

@section('counter')

    <section class="home-counter section-padding bg-black-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"">
                      <div class=" home-counter_text">
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                        Optimal Comfort Meets Reliable Travel – Only with <br>DFW TAXI RIDERS.</br>
                    </h2>
                    <h4 class="wow fadeInUp" data-wow-delay="0.2s">
                        Finest Transportation Of taxi services in irving,Tx.
                    </h4>
                </div>

            </div>
            <div class="col-md-12">
                <div class="br-bottom"></div>
            </div>
        </div>
        <div class="row pb-100">
            <div class="col-lg-4 col-md-6">
                <div class="home-counter_text">
                    <h3 class="wow fadeInUp" data-wow-delay="0.2s">
                        No Delays
                    </h3>

                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                       Effortless Taxi Rides Across Dallas-Fort Worth with Zero Hassle
                    </p>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="home-counter_text">
                    <h3 class="wow fadeInUp" data-wow-delay="0.2s">
                        Premium Support
                    </h3>

                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                       At DFW Taxi Riders, exceptional customer service is the heart of our transportation services. We go beyond standard taxi rides by offering clean, reliable vehicles driven by experienced professionals who prioritize safety, comfort, and punctuality. Every ride is designed to deliver a personalized experience, ensuring stress-free travel across Dallas-Fort Worth. Our commitment is simple — to provide you with dependable, comfortable, and customer-focused transportation every time
                    </p>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="home-counter_text">
                    <h3 class="wow fadeInUp" data-wow-delay="0.2s">
                        Comprehensive variety
                    </h3>

                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Experience reliable taxi service in Dallas-Fort Worth with DFW Taxi Riders. Premium cars, comfort, and professional drivers.
                    </p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="home-counter_text">
                    <h3 class="wow fadeInUp" data-wow-delay="0.2s">
                        DFW Taxi Riders | Safe, Reliable & Convenient Rides
                    </h3>
                    <h4 class="wow fadeInUp" data-wow-delay="0.2s">
                        Professional chauffeurs
                    </h4>

                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        <b>DFW Taxi Riders</b>, our professional chauffeurs are the foundation of our service. Each driver is highly trained, experienced, and dedicated to delivering safe, comfortable, and reliable transportation. With a strong focus on professionalism, attention to detail, and customer care, our chauffeurs go the extra mile to meet your needs and exceed expectations on every ride.
                    </p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="home-counter_image">
                    <a href="https://dfwblackcarlimollc.com">
                        <img class="modify-img" data-image-small="{{asset('Client/assets/img/counter-car3.jpg')}}"
                            data-image-large="{{asset('Client/assets/img/counter-car3.jpg')}}"
                            data-image-standard="{{asset('Client/assets/img/counter-car3.jpg')}}" data-src=""
                            src="{{asset('Client/assets/img/blur.jpg')}}" alt="" />
                    </a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="home-counter_image">
                    <a href="https://dfwblackcarlimollc.com">
                        <img class="modify-img" data-image-small="{{asset('Client/assets/img/counter-car4.webp')}}"
                            data-image-large="{{asset('Client/assets/img/counter-car4.webp')}}"
                            data-image-standard="{{asset('Client/assets/img/counter-car4.webp')}}" data-src=""
                            src="{{asset('Client/assets/img/blur.jpg')}}" alt="" />
                    </a>

                </div>
            </div>

        </div>

        </div>
    </section>

@endsection

@section('counter_two')

    <section class="home-counter section-padding bg-black">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="home-counter_image">
                        <a href="https://dfwblackcarlimollc.com">
                            <img class="modify-img" data-image-small="{{asset('Client/assets/img/counter-car1.jpg')}}"
                                data-image-large="{{asset('Client/assets/img/counter-car1.jpg')}}"
                                data-image-standard="{{asset('Client/assets/img/counter-car1.jpg')}}" data-src=""
                                src="{{asset('Client/assets/img/blur.jpg')}}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="home-counter_image">
                        <a href="https://dfwblackcarlimollc.com">
                            <img class="modify-img" data-image-small="{{asset('Client/assets/img/counter-car2.jpg')}}"
                                data-image-large="{{asset('Client/assets/img/counter-car2.jpg')}}"
                                data-image-standard="{{asset('Client/assets/img/counter-car2.jpg')}}" data-src=""
                                src="{{asset('Client/assets/img/blur.jpg')}}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="home-counter_text md-mt-60">
                        <h3 class="wow fadeInUp" data-wow-delay="0.2s">
                            Luxury Car & Taxi Service in Dallas-Fort Worth | DFW Taxi Riders
                        </h3>
                        <h4 class="wow fadeInUp" data-wow-delay="0.2s">
                            Safe, Reliable & On-Time Taxi Service at Dallas Fort-Worth
                        </h4>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            “Reliable rides, exceptional service. DFW Taxi Riders is dedicated to making every trip across Dallas-Fort Worth convenient, safe, and enjoyable. With experienced drivers, well-maintained taxis, and a focus on customer satisfaction, we redefine what it means to travel with comfort and ease.”
                        </p>
                    </div>
                    <div class="row home-counter_counter">
                        <div class="col-md-4">
                            <div class="counter-single wow fadeInUp" data-wow-delay="0.2s">
                                <h5><span data-count-start="0" data-count-end="10" class="countIt">10+</span>+</h5>
                                <h6>YEARS OF EXPERIRNCE</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-single wow fadeInUp" data-wow-delay="0.2s">
                                <h5><span data-count-start="0" data-count-end="1500" class="countIt">1500</span>+</h5>
                                <h6>Happy Clients</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-single wow fadeInUp" data-wow-delay="0.2s">
                                <h5><span data-count-start="0" data-count-end="1000" class="countIt">1000</span>+</h5>
                                <h6>Services</h6>
                            </div>
                        </div>
                        <div class="col-md-12 mt-60 mb-60">
                            <a href="{{route('Booking')}}" class="button button-full">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
