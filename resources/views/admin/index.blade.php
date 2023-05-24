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
            <div align="right"><a href="{{ url('admin_tiket/create')}}" class="mdi mdi-plus"></a></div> 
            <h4 class="card-title">List Data Tiket Konser</h4>
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
                    <th>ID Tiket</th>
                    <th>Tipe</th>
                    <th>Nama Konser</th>
                    <th>Jadwal</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($tiketAdmin as $tiket_admin)
                    <tr>
                    <td>{{$tiket_admin -> id_tiket}}</td>
                    <td>{{$tiket_admin -> jenis_tiket}}</td>
                    <td>{{$tiket_admin -> nama_konser}}</td>
                    <td>{{$tiket_admin -> jadwal}}</td>
                    <td>{{$tiket_admin -> stok}}</td>
                    <td>{{$tiket_admin -> harga}}</td>
                    <td> 
                        <form action="{{ url('admin_tiket/' .$tiket_admin->id_tiket)}}" method="post" class="d-inline" 
                            onsubmit="return confirm('Yakin Hapus Data Tiket Konser Ini ? ')">
                            @method('delete')
                            @csrf
                            <button class="btn btn btn-sm" > <i class="mdi mdi-delete"></i></button>  
                        </form> 
                    </td> 
                        <td>
                          <a href="{{ url('admin_tiket/'.$tiket_admin->id_tiket.'/edit')}}" class="mdi mdi-pencil"></a>
                        </td>  
                    </tr>
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