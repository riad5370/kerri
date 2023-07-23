@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            @if (session('delete'))
                <div class="alert alert-success">{{session('delete')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Manage Social Icon</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <tr>
                            <th>Si</th>
                            <th>Icon</th>
                            <th>Link</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($icons as $key=>$icon)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td style="font-family: fontawesome;">
                                    <i class="{{$icon->icon}}"></i>
                                </td>
                                <td>{{$icon->link}}</td>
                                <td><a class="btn btn-sm btn-{{$icon->status == 1?'success':'secondary'}}">{{$icon->status == 1?'Active':'Deactive'}}</a></td>
                                <td class="btn-group">
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    @if($icon->status == 1)
                                        <a href="{{route('status.icon',$icon->id)}}" class="btn btn-secondary btn-sm mx-1">Deactive</a>
                                    @else
                                        <a href="{{route('status.icon',$icon->id)}}" class="btn btn-success btn-sm mx-1">Active</a>
                                    @endif
                                    <form action="{{route('delete.icon')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$icon->id}}">
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure Delete this!!')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
           <div class="card">
                @if (session('added'))
                    <div class="alert alert-success">{{session('added')}}</div>
                @endif
               <div class="card-header">
                   <h3>Add Social Icon</h3>
               </div>
               <div class="card-body">
                   <form action="{{route('store.icon')}}" method="post">
                       @csrf
                       <div class="form-group">
                           @php
                               $icons = [
                                         'fa-twitter',
		                                  'fa-facebook',
		                                  'fa-github',
		                                  'fa-github-square',
		                                  'fa-twitter-square',
		                                  'fa-facebook-square',
		                                  'fa-whatsapp',
                                          'fa-instagram',
                                     ];
                           @endphp
                           <div class="form-group">select icon</div>
                           <div style="font-family: fontawesome; font-size:20px">
                               @foreach($icons as $icon)
                                   <i class="fa {{$icon}}" data-icon="{{$icon}}"></i>
                               @endforeach
                               <input type="text" name="icon" id="icon" class="form-control mt-2" placeholder="Icon">
                           </div>
                       </div>
                       <div class="form-group">
                           <input type="text" name="link" class="form-control" placeholder="link">
                       </div>
                       <div class="form-group">
                           <input type="submit" value="Add Icon" class="btn btn-primary">
                       </div>
                   </form>
               </div>

           </div>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script>
        $('.fa').click(function () {
            var icon = $(this).attr('data-icon');
            $('#icon').attr('value',icon);
        });
    </script>
@endpush
