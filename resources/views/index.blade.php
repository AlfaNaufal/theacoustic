@extends('main')
@section('title')
@section('breadcrumbs')

<div class="main-panel" >
    <div class="content-wrapper">
      <div class="page-header">
        <h1 class="page-title"> Welcome to the <strong> TheAcoustic!! </strong></h1>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-6">

        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Apa itu THEACOUSTIC?</h3>
          <p class="fst-italic">
            THEACOUSTIC is an annual music and arts festival organized by SMKN XX Bandung. Which features several shows such as
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Music Show.</li>
            <li><i class="bi bi-check-circle"></i> Dance theater.</li>
          </ul>
          <p>
            This show is takes place at the end of every school year. If you're looking for a show of good music, laughter, and fun, THEACOUSTIC is the perfect event for you. So, mark your calendars and don't miss this memorable event.
          </p>
        </div>

      </div>

    </div>
    @include('partials.footer')
</div>
    
@endsection