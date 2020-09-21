@extends('layouts.master')
@section('content-header')

<h1> Consumer <small> Consumer List </small>
</h1>

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Consumer</li>
</ol>
@endsection
@section('content')
<div class="col-md-12">
    <a href="/consumer/create">
        <button class="btn btn-block btn-primary btn-flat">
           Add Consumer
        </button>
    </a>
</div>
      <div class="col-md-6">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Consumer</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-condesed">
              <tr>
                <th style="width: 10px"> Nomor </th>
                <th>Type Pelanggan</th>

              </tr>
              @foreach ($data as $d)
              <tr>
                <td style="width: 10px">{{$loop->iteration}}</td>
                <td>{{$d->name}}</td>

                <td>
                    <a href="/consumer/edit/{{$d->id}}">EDIT |</a>
                    <a href="/consumer/destroy/{{$d->id}}">DELETE </a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    @endsection
