@extends('layouts.dashboard')
@push('css')
    <link rel="stylesheet" href="{{asset('backend')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
@endpush
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    @if(session('delete-success'))
                        <div class="alert alert-success">{{session('delete-success')}}</div>
                    @endif
                        @if(session('updated'))
                            <div class="alert alert-success">{{session('updated')}}</div>
                        @endif
                    <div class="card-body">
                        <h6 class="card-title">Manage Work</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>si</th>
                                    <th>Category Name</th>
                                    <th>Project Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($works as $key=>$work)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$work->category_name}}</td>
                                        <td>{{$work->title}}</td>
                                        <td>
                                            <img src="{{asset($work->image)}}" alt="" height="50px" width="50px">
                                        </td>
                                        <td>
                                            <a href="{{route('status',$work->id)}}" class="btn btn-{{$work->status == 1?'success':'secondary'}}">{{$work->status == 1?'Active':'Deactive'}}</a>
                                        </td>
                                        <td class="btn-group">
                                            <a href="{{route('protfolio.edit',$work->id)}}" class="btn btn-sm btn-primary mx-1">Edit</a>
                                            <form action="{{route('protfolio.destroy',$work->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit"  value="Delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure delete this!')">
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

    </div>
@endsection
@push('js')
    <script src="{{asset('backend')}}/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{asset('backend')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="{{asset('backend')}}/js/data-table.js"></script>
@endpush
