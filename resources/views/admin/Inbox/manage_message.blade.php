@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('delete'))
                    <div class="alert alert-success">{{session('delete')}}</div>
                @endif
                <div class="card-header">
                    <h3>Manage Message</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Si</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        @foreach($inboxs as $key=>$inbox)
                            <tr class="{{$inbox->status==0?'bg-secondary':''}}">
                                <td>{{$key+1}}</td>
                                <td>{{$inbox->name}}</td>
                                <td>{{$inbox->email}}</td>
                                <td>{{$inbox->subject}}</td>
                                <td>{{$inbox->message}}</td>
                                <td class="btn-group">
                                    <a href="{{route('view.message',$inbox->id)}}" class="btn btn-sm btn-primary mx-1">view</a>
                                    <form action="{{route('delete.message')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$inbox->id}}">
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

