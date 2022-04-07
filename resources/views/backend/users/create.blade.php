@extends('backend.layouts.master')
@section('title')
Tạo User
@endsection
@section('content')
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Tạo mới User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('backend.users.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
              @csrf  
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên User</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nhập tên...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Nhập email...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Nhập mật khẩu...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Chỉnh sửa</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Tạo mới</button>
                </div>
              </form>
            </div>
@endsection