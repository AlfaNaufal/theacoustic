@extends('main')
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
    @include('partials.footer')
</div>
    
@endsection