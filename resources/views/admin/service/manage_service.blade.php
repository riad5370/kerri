@extends('layouts.dashboard')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Manage service</li>
    </ol>
</nav>
<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="card-body">
                <h6 class="card-title">Manage Service</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Si</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $key=>$service)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td style="font-family: fontawesome;">
                                        <i class="{{$service->icon}}"></i>
                                    </td>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->description}}</td>
                                    <td>
                                        <a href="{{route('services.status',$service->id)}}" class="btn btn-sm btn-{{$service->status == 1?'success':'secondary'}}">{{$service->status == 1?'Active':'Deactive'}}</a>
                                    </td>
                                    <td class="btn-group">
                                        <a href="{{route('services.edit',$service->id)}}" class="btn btn-success btn-sm mx-1">Edit</a>
                                        <form action="{{route('services.destroy',$service->id)}}" method="post">
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
