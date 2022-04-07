@extends('backend.layouts.master')
@section('title')
Danh sách Role
@endsection
@section('content-header')
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
  </div>
@endsection
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-header">
          <a href="{{route('backend.roles.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr class="bg-success">
                <th>ID</th>
                <th>Role</th>
                <th>Quyền</th>
                <th>Ngày tạo</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>                     
              @foreach($roles as $role)
              <tr>
                <td>{{$role->id}}</td>
                <td>
                  {{$role->name}}
                  <p class="text-dark">Slug: {{$role->slug}}</p>
                </td>
                <td>
                  @foreach($role->permissions as $permission)
                      <span class="badge p-1 badge-warning">{{ $permission->name }}</span>
                    @endforeach
                </td>
                <td><span class="text-success">{{$role->created_at}}</span></td>
                <td>
                  <a href="{{route('backend.roles.edit',$role->id) }}"  class="btn btn-primary"><i class="fas fa-edit"></i></a>
                  <form method="POST" action="{{route('backend.roles.destroy',$role->id) }}">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                  </form>                         
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$roles->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
<!-- Small boxes (Stat box) -->
          
@endsection
