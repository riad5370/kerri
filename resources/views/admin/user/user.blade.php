@extends('layouts.dashboard')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">User</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title"> Manage User<span style="float: right;">Total User: {{$user_count}}</span></h6>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>si</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key=>$user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->photo == null)
                                        <img src="{{Avatar::create($user->name)->toBase64();}}" alt="">
                                    @else
                                        <img width="100" src="{{asset('uploads/user/'.$user->photo)}}" alt="">
                                    @endif
                                </td>
                                <td>
                                    <form action="{{route('user.delete')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure Delete this!!')" class="btn btn-sm btn-danger">
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

