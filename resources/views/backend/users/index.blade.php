@extends('backend.layouts.master')
@section('title')
Danh sách User
@endsection
@section('content-header')
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Danh sách thành viên</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lí người dùng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách người dùng</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
  </div>
@endsection
@section('content')
  @if (session('error'))
  <div class="alert alert-danger" role="alert">
    {{ session('error') }}
  </div>
  @endif        
  @if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif        
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-header d-flex justify-content-between">
          <div>
            <a href="{{route('backend.users.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>
            <a href="{{route('backend.users.index2') }}"  class="btn btn-success"><i class="fas fa-recycle"></i></a>
          </div>
          <div class="card-tools">
            <form>
              <div class="input-group input-group-md" style="width: 400px;">
                <input type="text" name="email" class="form-control float-right" placeholder="Email" value="{{request()->get('email')}}">
                <input type="text" name="name" class="form-control float-right"  placeholder="Name" value="{{request()->get('name')}}">
                  <button type="submit" class="btn btn-default">
                    Filter
                  </button>
              </div>
            </form>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr class="bg-success">
                <th>ID</th>
                <th>Tên User</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Vai trò</th>
                <th>Ngày tạo</th>
              </tr>
            </thead>
            <tbody>                     
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>
                  @if (!empty($user->image))
                      <img src="{{ $user->my_image }}" width="100px">   
                  @endif
                </td>
                <td>{{$user->email}}</td>
                <td><span class="text-success">Chấp thuận</span></td>
                <td>{{$user->role}}</span></td>
                <td class="d-flex flex-wrap">
                  <a href="{{route('backend.users.show',$user->id) }}"  class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                  <a href="{{route('backend.users.edit',$user->id) }}"  class="btn btn-primary"><i class="fas fa-edit"></i></a>
                  <form method="POST" action="{{route('backend.users.destroy',$user->id) }}">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                  </form>                         
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$users->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>                          
@endsection
