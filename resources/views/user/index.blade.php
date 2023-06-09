{{-- @extends('main')
@section('title')
@section('breadcrumbs')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"></h3>
      </div>
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div align="right"><a href="{{ url('user_tiket/create')}}" class="mdi mdi-plus"></a></div> 
            <h4 class="card-title">Tiket Konser Kamu</h4>
            <div class="table-responsive">

                @if (session('status'))   
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                   {{ session('status') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
                @endif 

              <table class="table" width="100%">
                <thead>
                  <tr>
                    <th>Kode Tiket</th>
                    <th>ID Tiket</th>
                    <th>Tipe</th>
                    <th>Nama Konser</th>
                    <th>Jadwal</th>
                    <th>Beli</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($tiketTersedias as $tiket_user)
                    <tr>
                    <td>{{$tiket_user -> kode}}</td>
                    <td>{{$tiket_user -> id_tiket}}</td>
                    <td>{{$tiket_user -> jenis_tiket}}</td>
                    <td>{{$tiket_user -> nama_konser}}</td>
                    <td>{{$tiket_user -> jadwal}}</td>
                
                    <td> 
                        <form action="{{ url('user_tiket/' .$tiket_user->kode)}}" method="post" class="d-inline" 
                            onsubmit="return confirm('Yakin Hapus Data Tiket Konser Ini ? ')">
                            @method('delete')
                            @csrf
                            <button type="button"  class="btn btn-inverse-success btn-fw"><a href="{{ url('user_tiket/')}}" class="btn">Bayar</a></button>

                        </form> 
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>--}}
    
{{-- @endsection --}} 







@extends('main')
@section('title')
@section('breadcrumbs')

<div class="main-panel" >
    <div class="content-wrapper">
      {{-- <div class="page-header">
        <h1 class="page-title"> Welcome to the <strong> TheAcoustic!! </strong></h1>
      </div> --}}




        <div class="page-header">
          <h3 class="page-title">Ticket Information</h3>
        </div>

        <br>

        <div class="col-md-12 grid-margin stretch-card">
          <div class="card-body text-lg-center">

            <h1 class="tic">Pilih tiket</h1>

          </div>
        </div>

        <br><br>

      <div class="row">

        @foreach($tiket as $tiket)
        <div class="col-md-6 grid-margin stretch-card">
        <div href="{{('./') }}" class="card ticket button btn {{ $tiket->jenis_tiket === 'VVIP' ? 'vip' : 'reg' }}" >
            <div class="card-body" >

              <h3>{{ $tiket->jenis_tiket}}</h3>
              <hr><br>
              <h4>{{ $tiket->harga }}</4>
              <br><br><br>

              <form action="" method="post">
                @csrf
                <input type="hidden" name="id_tiket" value="{{ $tiket->id_tiket }}">
                <button type="submit" class="btn btn-secondary btn-fw">Beli</button>
              </form>

            </div>
          </div>
        </div>  
        @endforeach        
        
        
        
      </div>
      
      <br><br><br><br>


    </div>
    @include('partials.footer')
  </div>
    
@endsection