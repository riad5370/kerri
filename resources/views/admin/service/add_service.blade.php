@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title bg-primary p-2">Add Service</h6>
                        <form class="forms-sample" action="{{route('services.store')}}" method="post">
                            @csrf
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
                                    <input type="text" name="icon" id="icon" class="form-control mt-2" placeholder="Icon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="description" class="form-control" placeholder="Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
