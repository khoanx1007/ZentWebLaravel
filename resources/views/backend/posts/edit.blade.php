@extends('backend.layouts.master')
@section('title')
Chỉnh sửa Blog
@endsection
@section('content')
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Chỉnh Sửa Bài Viết</h3>
              </div>
              <form action="{{route('backend.posts.update',$post->id) }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                <input type="hidden" name="_method" value="put"/>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên bài viết</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter..." value="@error('title'){{ old('title') }} @else{{ $post->title }}@enderror" >
                    @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="description" value="@error('description'){{ old('description') }} @else{{ $post->description }}@enderror" class="form-control @error('description') is-invalid @enderror " placeholder="Enter..." >
                    @error('description')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Nội dung</label>
                    <textarea id="editor" class="form-control @error('content') is-invalid @enderror" name='content' value="">{{ $post->content }}</textarea>
                    @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group" >
                      <label>Danh mục</label>
                      <select class="form-control" name='category'>
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                              @if($post->category_id == $category->id) 
                                selected 
                              @endif
                              >{{$category->name}}</option>
                          @endforeach
                      </select>
                  </div>  
                  <div class="form-group">
                        <label>Tags</label>
                        <select multiple="" class="form-control" name='tags[]'>
                          @foreach ($tags as $item)
                            @foreach ($post->tags as $post_tag)
                              @php
                                $selected = "";
                                if ($post_tag->id == $item->id){
                                  $selected = "selected";
                                  break;
                                }
                              @endphp
                            @endforeach
                            <option value="{{$item->id}}" {{ $selected }}>{{$item->name}} </option>
                          @endforeach
                        </select>
                  </div>  
                  <div class="form-group" >
                    <label for="exampleInputFile">Hình nền</label>
                    <p><img src="{{ $post->my_image }}" width="300px"></p>
                    <div class="input-group">

                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="emxampleInputFile">Chọn Ảnh</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Tải lên</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Sửa</button>
                  <a href="" class="btn btn-default float-right">Huỷ</a>
                </div>
              </form>
            </div> 
@endsection
