@extends('layouts.master')
@section('content-header')

<h1> Pelanggan <small> Control Panel </small>
</h1>

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Costumer</li>
</ol>
@endsection
@section('content')
<div class="col-md-12">
    <a href="/costumer/create">
        <button class="btn btn-block btn-primary btn-flat">
            Add Pelanggan
        </button>
    </a>
</div>
      <div class="col-md-6">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Costumer</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-condesed">
              <tr>
                <th style="width: 10px">No.</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Phone</th>
                <th>Email</th>
                {{-- <th>tipe Pengguna</th> --}}
                <th>Pilihan Paket</th>

              </tr>
              @foreach ($data as $d)
              <tr>
                <td style="width: 10px">{{$loop->iteration}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->alamat}}</td>
                <td>{{$d->phone}}</td>
                <td>{{$d->email}}</td>
                {{-- <td>{{$d->consumer->name}}</td>> --}}
                <td>{{$d->packet->name}}</td>
                <td>
                    <a href="/costumer/edit/{{$d->id}}">EDIT | </a>
                    <a href="/costumer/destroy/{{$d->id}}">DELETE </a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    @endsection
