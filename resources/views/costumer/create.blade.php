@extends('layouts.master')
@section('content-header')

<h1> Pelanggan <small> Daftar Pelanggan </small>
</h1>

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Costumer</li>
</ol>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add Pelanggan</h3>
          </div>

          <form role="form" action="/costumer/store" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="hidden" name="_method" value="POST" />
              </div>
              <div class="form-group">
              <label>Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
                <label>No. Telepon</label>
                <input type="text" class="form-control" name="phone" placeholder="Masukkan Nomor">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Masukkan email">
              </div>

              {{-- <div class="form-group">
                <label>Tipe Pengguna</label>
                  <select class="form-control" name="consumer_id">
                      @foreach ($consumer as $cons)
                      <option value="{{$cons->id}}">
                      {{$cons->name}}
                      </option>
                      @endforeach
                  </select>
              </div> --}}

              <div class="form-group">
                <label>Pilihan Paket</label>
                  <select class="form-control" name="packet_id">
                      @foreach ($packet as $pac)
                      <option value="{{$pac->id}}">
                      {{$pac->name}}
                      </option>
                      @endforeach
                  </select>
              </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
