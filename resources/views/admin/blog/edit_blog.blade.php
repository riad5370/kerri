@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Blog</h6>
                        <form class="forms-sample" action="{{route('blogs.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('Put')
                            <div class="form-group">
                                <label>Author Name</label>
                                <input type="text" name="author_name" value="{{$blog->author_name}}" class="form-control" placeholder="author name">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="date" value="{{$blog->date}}" class="form-control" placeholder="date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="description" class="form-control" placeholder="Description">{{$blog->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <br>
                                <img width="100" src="{{asset($blog->image)}}" id="blah" alt="">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

