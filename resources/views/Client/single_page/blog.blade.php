@extends('Client.master')
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="DFW Taxi Riders is a premium luxury transportation service provider to dedicated the top notch-quality DFW Black car Limo rental service to clients in Dallas-Fort Worth Texas,USA"/>
    <meta name="keywords" content="DFW Taxi Riders,DFW Taxi Riders,DFW black car , dfw black car service, dfw black car dallas, dfw black car service llc, dfw black car and limo, dfw black limo service dallas,dallas love field to dallas fort worth,black car limo,legacy limo,dfw to downtown dallas,dfw to dal airport,dallas to dfw,dallas airport to plano tx,dfw airport to frisco,car service fort worth,dfw black car service,car service dallas tx,dallas limo and black car service,dfw airport limo car service dallas tx,area car service,dallas black car service,dfw car service,dallas car service,black car service dallas,dfw airport limo service,limousine dfw airport,car service fort worth,black car service dallas tx,dfw airport limousine service,dfw airport limousine,DFW airport service"/>
    <meta name="country" content="Waxahachie ,Waco, Rockwall , Rowley ,Haslet ,Saginaw ,Heath ,Ronok,Southlake,North lake, Keller ,Westlake ,Justin, DFW airport ,Irving, Denton ,Plano, Richardson ,McKinney ,Aubrey, Little Elm, Frisco, Grapevine ,Lewisville ,Dallas, Fort worth ,Hurst, Euless ,North Richland Hill ,Haltom city, Garland ,Grand prairie ,Mansfield ,Arlington ,Prosper ,Austin, Oklahoma ,San Antonio, Richardson, Texas, TX, tx, united states of America,U.S,USA,U.S.A"/>
    <meta name=”robots” content="index, follow">
    <meta name='copyright' content='Wezapps Limited'>
    <meta name='language' content='en'>
    <meta name='rating' content='General'>
    <meta name="revisit-after" content="30 days">
    <meta name="author" content="https://dfwblackcarlimollc.com"/>
    <meta name="author" content="https://www.dfwblackcarlimollc.com"/>

    <link rel=“canonical” href=“https://www.dfwblackcarlimollc.com” />
    <link rel=“DfwBlackCarLimollc” href=“https://www.dfwblackcarlimollc.com” />


@section('content')
<div class="page-title-area" id="about_us">
      <div class="d-table">
         <div class="d-table-cell">
            <div class="container">
               <div class="page-title-content">
                  <h2>Blogs</h2>
                  <ul>
                     <li><a href="https://dfwblackcarlimollc.com">Home</a></li>
                     <li>Blogs</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>




   <section class="section-padding">
      <div class="container">
         <div class="row">

             @foreach(@$blog as $key=>$b)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
               <div class="card text-center blog-card">
                  <img src="{{(@$b->image)?url('upload/BlogManage/'.@$b->image):''}}" class="card-img-top mx-auto" alt="Blog Image">
                  <div class="card-body">
                     <h5 class="card-title">{{@$b->title}}</h5>
                     <p class="card-text">{{@$b->short}}</p>
                  </div>
                  <div class="card- blog-card-footer">
                     <div class="d-flex justify-content-center">
                        <a href="{{route('BlogDetails',@$b->slug)}}" class="btn blog-btn">Read More</a>
                     </div>
                  </div>
               </div>
            </div>

           @endforeach

         </div>
      </div>
   </section>


@endsection
