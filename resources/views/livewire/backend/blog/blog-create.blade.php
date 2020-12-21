<div>
@extends('layouts.master_dash')
@section('title', 'Dashboard | Kafri Bung Space')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Blog</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-11">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control"  value="{{ $blog->title ?? old('title') }}" autocomplete="off" autofocus placeholder="input title" id="title">
                            @if ($errors->has('title'))
                                <p class="alert alert-danger">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                        <div class="form-group" wire:ignore>
                            <label for="description">description</label>
                            <textarea  name="description"  id="description" class="form-control" placeholder="description">{{ $blog->description ?? old('description') }}</textarea>
                            @error('description')
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="btn  {{ $blog ? 'btn-primary' : 'btn-warning'}} float-right">{{ $blog ? 'Store' : 'Edit' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@push('after_script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('description', options );
</script>
{{-- Untuk ambil data dari ckEdiotr --}}
{{-- <script>
    CKEDITOR.replace('description').on('change', function(e){
        @this.set('description', e.editor.getData())
    })
</script> --}}
@endpush
@stop
</div>
