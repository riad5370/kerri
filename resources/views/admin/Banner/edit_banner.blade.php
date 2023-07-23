@extends('layouts.dashboard')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('banners.index')}}">Manage Banner</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Banner</li>
    </ol>
</nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Banner</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('banners.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{$banner->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Header Name</label>
                                <input type="text" name="header_name" value="{{$banner->header_name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Header Description</label>
                                <input type="text" name="header_desp" value="{{$banner->header_desp}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <img src="{{asset($banner->image)}}" width="100" id="blah" alt="">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add Banner" class="btn btn-sm btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
