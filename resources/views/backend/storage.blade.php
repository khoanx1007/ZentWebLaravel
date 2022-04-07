@extends('backend.layouts.master')
@section('title')
Thư viện ảnh
@endsection
@section('content')
<div class="row">
    <!-- Left col -->
    <section class="col-12 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-folder mr-1"></i>
            Thư viện ảnh
          </h3>
        </div><!-- /.card-header -->
        <div class="card-body">  
          <div class="tab-content p-0" style="width:100%;display:flex;flex-wrap:wrap;">
            @foreach ($files as $file )
                  <div class="card-header w-25 text-center">
                    <img class="imgstorage" width="250px" height="250px" src="{{ Illuminate\Support\Facades\Storage::disk()->url($file) }}">
                    <div class="card-footer d-flex flex-wrap justify-content-center">
                      <form method="POST" action="{{ route('backend.storage.download',$file) }}">
                        @csrf
                        <input type="hidden" name="_medthod" value="download">  
                        <input type="hidden" name="file" value="{{ $file }}">                          
                        <button  class="btn btn-success"><i class="fas fa-download"></i></button>  
                      </form>
                      &nbsp; &nbsp;
                      <form method="POST" action="{{ route('backend.storage.destroy') }}">
                        @csrf
                        <input type="hidden" name="file" value="{{ $file }}">
                        <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                      </form> 
                        
                      
                    </div>
                  </div>  
            @endforeach
          </div>          
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <!-- right col -->
  </div>
@endsection