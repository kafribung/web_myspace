<div>
    <!-- Begin Page Content -->
    <div class="container-fluid" id="app">
        @if (session('msg'))
            <p class="alert alert-info">{{ session('msg') }}</p>
        @endif
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Blog</h1>
        </div>
        <!-- Content Row -->
        <div class="row">
            @forelse ($blogs as $blog)
            <div class="col-lg-4">
                <div class="card mb-4 py-3 border-left-success">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $blog->title }}</h6>
                        <small class="d-block font-weight-bold text-info">{{ $blog->view }} Orang</small>
                    </div>
                    <div class="card-body">
                        <div>{!! Str::limit($blog->description, 200) !!}</div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="{{ route('blog.edit', $blog) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <button  wire:click="delete({{ $blog->id }})" id="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                @if ($blog->active == 0)
                                <button  wire:click="active({{ $blog->id }})" id="delete" class="btn btn-info btn-sm"><i class="fa fa-check "></i></button>
                                @else
                                <button  wire:click="noActive({{ $blog->id }})" id="delete" class="btn btn-dark btn-sm"><i class="fa fa-minus"></i></button>
                                @endif
                            </div>
                            <div>
                                <small>{{ $blog->user->name }}</small>
                                <small>{{ $blog->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <p class="alert alert-success">Data Blog is Null</p>
            @endforelse
        </div>

        {{-- <div class="row">
            @forelse ($blogs as $blog)
            <div class="col-lg-4">
                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $blog->title }}</h6>
                        <small class="d-block font-weight-bold text-info">{{ $blog->view }} Orang</small>
                    </div>
                    <div class="card-body">
                        <p>{!! Str::limit($blog->description, 10) !!}</p>
                    </div>
                </div>
            </div>
            @empty
                <p class="alert alert-success">Data Blog is Null</p>
            @endforelse
        </div> --}}
    <!-- /.container-fluid -->
</div>
