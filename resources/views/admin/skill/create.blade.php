@extends('layouts.dashboard')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Skill</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card-body">
                    <h6 class="card-title">Add Skill</h6>
                    <form class="forms-sample" action="{{route('skills.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="name">
                            @error('name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Percentage</label>
                            <input type="number" name="percentage" class="form-control" placeholder="Percentage">
                            @error('percentage')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection