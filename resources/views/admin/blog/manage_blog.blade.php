@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('update'))
                    <div class="alert alert-success">{{session('update')}}</div>
                @endif
                @if (session('delete'))
                    <div class="alert alert-success">{{session('delete')}}</div>
                @endif
                <div class="card-header">
                    <h3>Manage Service</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <tr>
                            <th>Si</th>
                            <th>Author Name</th>
                            <th>Title</th>
                            <th>date</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($blogs as $key=>$blog)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$blog->author_name}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->date}}</td>
                                <td>{{$blog->description}}</td>
                                <td>
                                    <img src="{{asset($blog->image)}}" alt="">
                                </td>
                                <td>
                                    <a href="{{route('status',$blog->id)}}" class="btn btn-sm btn-{{$blog->status == 1?'success':'secondary'}}">{{$blog->status == 1?'Active':'Deactive'}}</a>
                                </td>
                                <td class="btn-group">
                                    <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-success btn-sm mx-1">Edit</a>
                                    <form action="{{route('blogs.destroy',$blog->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure Delete this!!')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

