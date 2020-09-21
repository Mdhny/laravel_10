@extends('layouts.master')
@section('content-header')

<h1> Paket <small> Control Panel </small>
</h1>

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Paket</li>
</ol>
@endsection
@section('content')
<div class="col-md-12">
    <a href="/packet/create">
        <button class="btn btn-block btn-primary btn-flat">
            Create Paket
        </button>
    </a>
</div>
      <div class="col-md-6">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Paket</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-condesed">
              <tr>
                <th style="width: 10px">#</th>
                <th>Nama</th>
                <th>Tipe pengguna</th>

              </tr>
              @foreach ($data as $d)
              <tr>
                <td style="width: 10px">{{$loop->iteration}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->consumer->name}}</td>
                <td>
                    <a href="/packet/edit/{{$d->id}}">EDIT </a>
                    <a href="/packet/destroy/{{$d->id}}">DELETE </a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    @endsection
