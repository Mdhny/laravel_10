@extends('layouts.master')
@section('content-header')

<h1> Consumer <small> Bagian Consumer </small>
</h1>

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Consumer</li>
</ol>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add Consumer</h3>
          </div>

          <form role="form" action="/consumer/store" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="hidden" name="_method" value="POST" />
                <label>Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
