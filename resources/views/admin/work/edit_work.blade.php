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
                        <h3>Edit Work</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('protfolio.update',$work->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" name="category_name" value="{{$work->category_name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Project Title</label>
                                <input type="text" name="title" value="{{$work->title}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"><br>
                                <img width="70" id="blah" src="{{asset($work->image)}}" alt="" height="70px" width="70px">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="update" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
