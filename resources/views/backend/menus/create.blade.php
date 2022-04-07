@extends('backend.layouts.master')
@section('title')
Tạo Menu
@endsection
@section('content')
  <div class="row">
      <div class="col-xl-12">
          <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card card-dark">
                  <div class="card-header">
                      <h1 class="card-title">Tạo Menu mới</h1>
                  </div>   
                      <!-- /.card-header -->
                    <!-- form start -->
                  <form action="{{route('backend.menus.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label>Tên Menu</label>
                          <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror " placeholder="Enter..." >
                          @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-success">Tạo</button>
                        <a href="" class="btn btn-default float-right">Huỷ</a>
                      </div>
                  </form>
                </div>
              </div>
      </div>
  </div>
@endsection
