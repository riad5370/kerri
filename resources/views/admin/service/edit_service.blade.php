@extends('layouts.dashboard')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('services.index')}}">Manage Sercice</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Banner</li>
    </ol>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Service</h6>
                        <form class="forms-sample" action="{{route('services.update',$service->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div>
                                @php
                                    $icons = array (

                                        'fa-yelp',
                                        'fa-yen',
                                        'fa-yoast',
                                        'fa-youtube',
                                        'fa-youtube-play',
                                        'fa-youtube-square',
                                        'fa-viadeo',
                                        'fa-viadeo-square',
                                        'fa-video-camera',
                                        'fa-vimeo',
                                        'fa-vimeo-square',
                                        'fa-vine',
                                        'fa-vk',
                                        'fa-volume-control-phone',
                                        'fa-volume-down',
                                        'fa-volume-off',
                                        'fa-volume-up',
                                        'fa-warning',
                                        'fa-wechat',
                                        'fa-weibo',
                                        'fa-weixin',
                                        'fa-whatsapp',
                                        'fa-wheelchair',
                                        'fa-wheelchair-alt',
                                        'fa-wifi',
                                        'fa-wikipedia-w',
                                    );
                                @endphp
                            </div>
                            <div class="form-group">select icon</div>
                            <div class="form-group" style="font-family: FontAwesome; font-size: 25px;">
                                @foreach($icons as $icon)
                                    <i class="fa {{$icon}}" data-icon="{{$icon}}"></i>
                                @endforeach
                                    <input type="text" name="icon" id="icon" class="form-control mt-2" value="{{$service->icon}}" placeholder="Icon">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" value="{{$service->title}}" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" placeholder="Description">{{$service->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
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

