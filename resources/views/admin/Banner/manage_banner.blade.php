@extends('layouts.dashboard')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Manage Banner</li>
    </ol>
</nav>
<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning">{{session('warning')}}</div>
            @endif
            <div class="card-body">
                <h6 class="card-title">Manage Banner</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Si</th>
                                <th>Header</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $key=>$banner)
                                <tr>
                                    <th>{{$key+1}}</th>
                                    <td>{{$banner->header_name}}</td>
                                    <td>{{$banner->title}}</td>
                                    <td>{{$banner->header_desp}}</td>
                                    <td>
                                        <img src="{{asset($banner->image)}}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('banners.status',$banner->id)}}" class="btn btn-sm btn-{{$banner->status == 1?'success':'secondary'}}">{{$banner->status == 1?'Active':'Deactive'}}</a>
                                    </td>
                                    <td class="btn-group">
                                        <a href="{{route('banners.edit',$banner->id)}}" class="btn btn-success btn-sm mx-1">Edit</a>
                                        <form action="{{route('banners.destroy',$banner->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure Delete this!!')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection