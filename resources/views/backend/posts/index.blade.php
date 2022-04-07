@extends('backend.layouts.master')
@section('title')
Danh sách Blog
@endsection
@section('content-header')
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Danh sách Blog </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lý Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách Blog</li>
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
            @can('create-post', App\Models\Post::class)
            <a href="{{route('backend.posts.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>
            @endcan
            <a href="{{route('backend.users.index2') }}"  class="btn btn-success"><i class="fas fa-recycle"></i></a>
          </div>
          <div class="card-tools">
            <form>
              <div class="input-group input-group-md" style="width: 400px;">
                <input type="text" name="title" class="form-control float-right" placeholder="Title">
                <input type="text" name="status" class="form-control float-right" placeholder="Status">
                  <button type="submit" class="btn btn-default">
                    Filter
                  </button>
              </div>
            </form>
          </div>
        </div>                 
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr class="bg-success" aria-expanded="false">
                <th>ID</th>
                <th>Tên bài viết</th>
                <th>Ảnh bìa</th>
                <th>Danh mục</th>
                <th>Tình Trạng</th>
                <th>Tag</th>
                {{-- <th>Nguời tạo</th> --}}
                <th>Ngày tạo</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
              <tr data-widget="expandable-table" aria-expanded="true">
                <td>{{$post->id}}</td>
                <td class="text-primary" style="max-width:180px;" >{{$post->title}}
                <p class="text-dark">Slug: {{$post->slug}}</p>
                </td>
                <td>
                  @if (!empty($post->image))
                      <img src="{{ $post->my_image }}" width="100px">
                    
                  @endif
                </td>
                <td>{{$post->category->name}}</td>
                <td>{{$post->status_text}}</td>
                <td>
                    @foreach($post->tags as $tag)
                      <span class="badge badge-info">{{ $tag->name }}</span>
                    @endforeach
                  </td>
                {{-- <td>{{$post->user->name}}</td> --}}
                <td>{{$post->created_at}}</td>
                <td>
                  <a href="{{route('backend.posts.show',$post->id) }}"  class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                  @can('update-post',$post)
                    <a href="{{route('backend.posts.edit',$post->id) }}"  class="btn btn-primary"><i class="fas fa-edit"></i></a>
                  @endcan
                  @can('delete-post',$post)
                    <form method="POST" action="{{route('backend.posts.destroy',$post->id) }}">
                      @csrf
                      @method('DELETE')
                      <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                    </form>     
                  @endcan           
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          {{$posts->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>        
@endsection
