<div>
 <!-- Begin Page Content -->
 <div class="container-fluid" id="app">
    @if (session('msg'))
        <p class="alert alert-info">{{ session('msg') }}</p>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">About {{ Auth::user()->name }}</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-11">
            <div class="card  shadow mb-4">
                <div class="card-header">
                    <a href=""  class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i></a>
                </div>
                <div class="card-body ">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">About</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $angkaAwal = 1
                            @endphp
                            @forelse ($abouts as $about)
                            <tr>
                                <th scope="row">{{ $angkaAwal++ }}</th>
                                <td>{!! $about->description !!}</td>
                                <td>
                                    <a href="" wire:click="edit({{ $about->id }})" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @empty
                                <p class="alert alert-info">About Kosong</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@include('livewire.backend.about.about-create')
@include('livewire.backend.about.about-edit')
</div>
@push('after_script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('create').on('change', function(e){
        @this.set('description', e.editor.getData());
    });
</script>
<script>
    CKEDITOR.replace('edit').on('change', function(e){
        @this.set('description', e.editor.getData());
    });
</script>
@endpush
<!-- /.container-fluid -->
</div>
