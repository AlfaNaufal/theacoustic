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
                <h4 class="card-title">Beli Tiket Konser</h4>
                <form class="forms-sample" action="{{url('user_tiket')}}" method="post" enctype="multipart/form-data">  
                  @csrf
                  {{-- @foreach ($tiketTersedia as $tikets)      --}}
                  <div class="form-group">
                    <label for="kode">Kode</label>
                    <?php $bytes = random_bytes(5);?>
                    <input   type="text" class="form-control bg-secondary text-light" id="kode" name="kode" value="<?php echo bin2hex($bytes);?>">
                  
                   
                  </div>
                  <div class="form-group">
                    <label for="id_tiket">ID Tiket</label>
                    <select class="form-control bg-secondary" id="id_tiket" name="id_tiket">
                      @foreach ($tiketTersedia as $item)
                      <option class="text-light"value="{{$item->id_tiket}}">{{$item->id_tiket}}</option>
                      @endforeach
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="jenis_tiket">Tipe</label>
                    <select   class="form-control bg-secondary" id="jenis_tiket" name="jenis_tiket" >
                      @foreach ($tiketTersedia as $item)
                      <option class="text-light"value="{{$item->jenis_tiket}}">{{$item->id_tiket}} - {{$item->jenis_tiket}}</option>
                      @endforeach
                   </select>
                  </div>

                  <div class="form-group">
                    <label for="nama_konser">Nama Konser</label>
                    <select class="form-control bg-secondary" id="nama_konser" name="nama_konser">
                      @foreach ($tiketTersedia as $item)
                      <option class="text-light" value="{{$item->nama_konser}}">{{$item->id_tiket}} - {{$item->nama_konser}}</option>
                      @endforeach
                   </select>
                  </div>

                  <div class="form-group">
                    <label for="jadwal">Jadwal</label>
                    <select   class="form-control bg-secondary" id="jadwal" name="jadwal">
                      @foreach ($tiketTersedia as $item)
                      <option class="text-light"value="{{$item->jadwal}}">{{$item->id_tiket}} - {{$item->jadwal}}</option>
                      @endforeach
                   </select>
                  </div>
                  
                  {{-- @endforeach --}}
                
                   
                  <button type="submit" id="simpan" name="simpan" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>

    <script src="{{asset('/forms.js')}}"></script>


@endsection