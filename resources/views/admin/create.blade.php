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
                <h4 class="card-title">Tambah Tiket Konser</h4>
                <form class="forms-sample" action="{{url('admin_tiket')}}" method="post" enctype="multipart/form-data">  
                  @csrf
                  
                  <div class="form-group">
                    <label for="id_tiket">ID Tiket</label>
                    <input type="text" class="form-control bg-secondary" id="id_tiket" name="id_tiket" placeholder="ID Tiket">
                  </div>
                  <div class="form-group">
                    <label for="jenis_tiket">Tipe</label>
                    <select class="form-control bg-secondary" id="jenis_tiket" name="jenis_tiket">
                      <option value="Reguler"  selected='selected'>Reguler</option>
                      <option value="VVIP">VVIP</option>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_konser">Nama Konser</label>
                    <input type="text" class="form-control bg-secondary" id="nama_konser" name="nama_konser" placeholder="Nama Konser">
                  </div>
                  <div class="form-group">
                    <label for="jadwal">Jadwal</label>
                    <input type="date" class="form-control bg-secondary" id="jadwal" name="jadwal">
                  </div>
                  <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control bg-secondary" id="stok" name="stok" placeholder="Stok" >
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control bg-secondary" id="harga" name="harga" placeholder="Harga" >
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