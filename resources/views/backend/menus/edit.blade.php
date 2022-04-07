@extends('backend.layouts.master')
@section('title')
Chỉnh sửa Menu
@endsection
@section('content')
  <div class="row">
      <div class="col-xl-12">
          <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card card-dark">
                  <div class="card-header">
                    <h3 class="card-title">Chỉnh Sửa Menu</h3>
                  </div>
                  <form action="{{route('backend.menus.update',$menu->id) }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="_method" value="put"/>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Tên Menu</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter..." value="@error('name'){{ old('name') }} @else{{ $menu->name }}@enderror" >
                        @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  <!-- /.card-body -->
      
                    <div class="card-footer">
                      <button type="submit" class="btn btn-success">Sửa</button>
                      <a href="" class="btn btn-default float-right">Huỷ</a>
                    </div>
                  </form>
                </div>
              </div>
          </div>
      </div>
  </div> 
@endsection
