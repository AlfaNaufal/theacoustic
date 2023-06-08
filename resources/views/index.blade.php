@extends('main')
@section('title')
@section('breadcrumbs')

<div class="main-panel" >
    <div class="content-wrapper">
      {{-- <div class="page-header">
        <h1 class="page-title"> Welcome to the <strong> TheAcoustic!! </strong></h1>
      </div> --}}

      <div class="page-header">
        <h3 class="page-title">Home</h3>
      </div>


      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body" style="background-color: #2C394B">
            <h2 class="card-title text-lg-center">TheAcoustic</h2>
            <hr>
            <p,h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eos sed ullam, maiores dignissimos assumenda quasi asperiores exercitationem maxime. Velit explicabo, id facere eos quos sequi dolorum possimus amet fugit. Vel optio at, dicta, omnis, possimus debitis repudiandae facere error incidunt assumenda natus adipisci quos porro ipsam. Tempora, perferendis dolorum.</p>
            {{-- <p>is an annual music and arts festival organized by SMKN 13 Bandung. This festival is takes place at the end of every school year. If you're looking for a show of good music, laughter, and fun, THEACOUSTIC is the perfect event for you. So, mark your calendars and don't miss this memorable event.
            </p> --}}

            
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body" style="background-color: #2C394B">

              <h2>Tim event</h2>
              <br>

              <h4>Muhammad Fakhri Habibillah</h4>
              <h4>Muhammad Naufal alfarizky</h4>
              <h4>Nisrina Nuraini</h4>
              <h4>Restu Pebriansyah</h4>

            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body" style="background-color: #2C394B">

              <h2>Tentang event</h2>
              <br>

              <p,<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illo vel porro libero repellendus veritatis aut reprehenderit, iusto numquam consectetur officia sed assumenda reiciendis natus eveniet unde ipsam! Aliquam assumenda aut repellendus amet natus harum, veritatis vitae repudiandae, error accusamus obcaecati consequuntur necessitatibus? Recusandae saepe dolorem alias, dignissimos culpa consectetur?</h3></p>

            </div>
          </div>
        </div>

        
        
      </div>
      
      {{-- <div class="col-md-12 grid-margin stretch-card"> --}}
        <div class="owl-carousel">
          <div class="item">

          <img class="" src="{{ asset('assets/images/bg1.jpeg')}}" alt="">
          
        </div>
        
        <div class="item">
        
          <img class="" src="{{ asset('assets/images/bg2.jpeg')}}" alt="">

          </div>

        </div >

      {{-- </div> --}}


    </div>
    @include('partials.footer')
  </div>
    
@endsection