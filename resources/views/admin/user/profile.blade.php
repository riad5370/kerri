@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">

                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card-header">
                    <h3>profile Edit</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Profile Photo</label>
                            <input type="file" name="photo" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"><br>
                            <img width="100" id="blah" src="{{asset('uploads/user/'.(auth::user()->photo))}}" alt="">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="update" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                @if(session('password'))
                    <div class="alert alert-danger">{{session('password')}}</div>
                @endif
                @if(session('failed'))
                    <div class="alert alert-success">{{session('failed')}}</div>
                @endif
                <div class="card-header">
                    <h3>Password Change</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('password.update')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Old Password</label>
                            <input type="password" name="old_password" class="form-control">
                            @error('old_password')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">New Password</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                            @error('password_confirmation')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="change password" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{--        <div class="col-md-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h3>Change Profile Photo</h3>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{route('photo.update')}}" method="post" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="">Profile Photo</label>--}}
{{--                            <input type="file" name="photo" class="form-control">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="submit" value="change photo" class="btn btn-success">--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
@endsection
