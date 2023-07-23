@extends('layouts.dashboard')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Manage Skill</li>
    </ol>
</nav>
<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="card-body">
                <h6 class="card-title">Manage Skill</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Si</th>
                                <th>Name</th>
                                <th>Parcentage</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $key=>$skill)
                                <tr>
                                    <th>{{$key+1}}</th>
                                    <td>{{$skill->name}}</td>
                                    <td>{{$skill->percentage}}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-{{$skill->status==0?'light':'info'}}">{{$skill->status==0?'Unpublished':'Published'}}</a>
                                    </td>
                                    <td class="btn-group">
                                        <a href="{{route('skills.edit',$skill->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{route('skills.status',$skill->id)}}" class="btn btn-sm mx-1 btn-{{$skill->status==0?'info':'light'}}">{{$skill->status==0?'Published':'Unpublished'}}</a>
                                        <form action="{{route('skills.update',$skill->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure delete this!')">Delete</button>
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