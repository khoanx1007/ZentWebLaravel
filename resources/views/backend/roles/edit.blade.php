@extends('backend.layouts.master')
@section('title')
Chỉnh sửa User
@endsection
@section('content')
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Chỉnh Sửa User</h3>
              </div>
              <form action="{{route('backend.roles.update',$role->id) }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                <input type="hidden" name="_method" value="put"/>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên Role</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nhập tên..." value="{{ $role->name  }}">
                  </div>
                  <div class="form-group col-12" >
                    <label>Quyền</label>
                    <select class="form-control" multiple="" name='permissions[]'>
                      @foreach ($permissions as $item)
                        @foreach ($role->permissions as $roles_pemissions)
                          @php
                            $selected = "";
                            if ($roles_pemissions->id == $item->id){
                              $selected = "selected";
                              break;
                            }
                          @endphp
                        @endforeach
                        <option value="{{$item->id}}" {{ $selected }}>{{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Chỉnh sửa</button>
                </div>
              </form>
            </div> 
@endsection