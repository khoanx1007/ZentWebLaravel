@extends('backend.layouts.master')
@section('title')
Tạo Role
@endsection
@section('content')
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Tạo mới Role</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('backend.roles.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
              @csrf  
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên Role</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nhập tên...">
                  </div>
                  <div class="form-group">
                    <label>Quyền</label>
                    <select multiple="" class="form-control" name="permissions[]">
                      @foreach ($permissions as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                    </select>
                  </div> 
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Tạo mới</button>
                </div>
              </form>
            </div>
@endsection