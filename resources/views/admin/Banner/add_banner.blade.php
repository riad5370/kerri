@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                 @endif
                <div class="card-header">
                    <h3 class="card-title">Add Banner Content</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('banners.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Header Name</label>
                            <input type="text" name="header_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Header Description</label>
                            <input type="text" name="header_desp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img src="" width="100" id="blah" alt="">
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
