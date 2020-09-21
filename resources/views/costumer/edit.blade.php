@extends('layouts.master')
@section('content-header')

<h1> Pelanggan <small> Tambah Pelanggan</small>
</h1>

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Edit Pelanggan</li>
</ol>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Data Pelanggan</h3>`
          </div>

          <form role="form" action="/costumer/update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="hidden" name="_method" value="PUT" />
                  <input type="hidden" name="id" value="{{$data->id}}" />
              </div>
              <div class='form-group'>
                <label>Nama</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Masukkan Nama">
              </div>

              <div class="form-group">
                <label>Tipe Pengguna</label>
                <select class="form-control" name="consumer_id">
                    <option value="{{$data->consumer_id}}">
                      {{$data->consumer->name}}
                    </option>
                    @foreach ($consumer as $cons)
                      @if ($dept->id != $data->consumer_id)
                      <option value="{{$cons->id}}">
                          {{$cons->name}}
                      </option>
                      @endif
                    @endforeach
                </select>
            </div>

              <div class="form-group">
                  <label>Pelanggan</label>
                  <select class="form-control" name="packet_id">
                      <option value="{{$data->packet_id}}">
                        {{$data->packet->name}}
                      </option>
                      @foreach ($packet as $pac)
                        @if ($pac->id != $data->packet_id)
                        <option value="{{$pac->id}}">
                            {{$pac->name}}
                        </option>
                        @endif
                      @endforeach
                  </select>
              </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
