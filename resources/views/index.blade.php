@extends('main')
@section('title')
@section('breadcrumbs')

<div class="main-panel" >
    <div class="content-wrapper">
      {{-- <div class="page-header">
        <h1 class="page-title"> Welcome to the <strong> TheAcoustic!! </strong></h1>
      </div> --}}


      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body" style="background-color: #2C394B">
            <h2 class="card-title text-lg-center">Trayodasha Sangeeta Kala Pradarshana</h2>
            <hr>
            <p.h1>is an annual music and arts festival organized by SMKN 13 Bandung. This festival is takes place at the end of every school year. If you're looking for a show of good music, laughter, and fun, THEACOUSTIC is the perfect event for you. So, mark your calendars and don't miss this memorable event.

            </p>

            
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              

            </div>
          </div>
        </div>

      <div class="col-md-6 grid-margin stretch-card">
        <img src="{{ asset('assets/images/bg1.jpeg')}}" alt="">
      </div>


      </div>



    </div>
    @include('partials.footer')
  </div>
    
@endsection