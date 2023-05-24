@extends('main')
@section('title')
@section('breadcrumbs')

    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"></h3>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Tiket Konser</h4>
                <form class="forms-sample" action="{{url('admin_tiket/'.$tiketAdmin->id_tiket)}}" method="post" enctype="multipart/form-data">  
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="id_tiket">ID Tiket</label>
                    <input type="text" class="form-control bg-secondary" id="id_tiket" name="id_tiket" placeholder="ID Tiket" value="{{$tiketAdmin->id_tiket}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="jenis_tiket">Tipe</label>
                    <input type="text" class="form-control bg-secondary" id="jenis_tiket" name="jenis_tiket" placeholder="Tipe" value="{{$tiketAdmin->jenis_tiket}}">
                  </div>
                  <div class="form-group">
                    <label for="nama_konser">Nama Konser</label>
                    <input type="text" class="form-control bg-secondary" id="nama_konser" name="nama_konser" placeholder="Nama Konser" value="{{$tiketAdmin->nama_konser}}">
                  </div>
                  <div class="form-group">
                    <label for="jadwal">Jadwal</label>
                    <input type="date" class="form-control bg-secondary" id="jadwal" name="jadwal" value="{{$tiketAdmin->jadwal}}">
                  </div>
                  <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control bg-secondary" id="stok" name="stok" placeholder="Stok" value="{{$tiketAdmin->stok}}">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control bg-secondary" id="harga" name="harga" placeholder="Harga" value="{{$tiketAdmin->harga}}">
                  </div>
                  <button type="submit" id="simpan" name="simpan" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>


@endsection