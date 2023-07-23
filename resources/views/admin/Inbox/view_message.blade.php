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
                    <h3>view Message</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{$message->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$message->email}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$message->subject}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{$message->message}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection

