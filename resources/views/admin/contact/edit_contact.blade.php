@extends('layouts.dashboard')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <div class="card-header">
                        <h3>Edit Contact</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.contact')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$contact->first()->id}}">
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="number" value="{{$contact->first()->mobile}}" name="mobile" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" value="{{$contact->first()->email}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" value="{{$contact->first()->address}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Update Contact" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
