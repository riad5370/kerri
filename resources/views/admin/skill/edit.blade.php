@extends('layouts.dashboard')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('skills.index')}}">Manage Skill</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Skill</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Skill</h6>
                    <form class="forms-sample" action="{{route('skills.update',$skill->id)}}" method="POST">
                        @csrf
                        @method('Put')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{$skill->name}}" class="form-control" placeholder="name">
                            @error('name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Percentage</label>
                            <input type="number" name="percentage" value="{{$skill->percentage}}"  class="form-control" placeholder="Percentage">
                            @error('percentage')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection