@extends('layouts.master')
@section('content-header')

<h1> Price <small> Daftar Harga </small>
</h1>

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Price</li>
</ol>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add Price</h3>
          </div>

          <form role="form" action="/price/store" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="hidden" name="_method" value="POST" />
                <label>Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
              </div>

              <div class="form-group">
                <label> Jenis Paket</label>
                  <select class="form-control" name="packet_id">
                      @foreach ($packet as $pac)
                      <option value="{{$pac->id}}">
                      {{$pac->name}}
                      </option>
                      @endforeach
                  </select>
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
