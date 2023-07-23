@extends('frontend.master')
@section('content')
    <section class="section bg-dark" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Our <span class="fw-bold text-white">{{$blog->title}}</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                    <div class="col-lg-12 mt-3">
                        <div class="rounded bg-dark p-2">
                            <div class="img_blog">
                                <img src="{{asset($blog->image)}}" alt="" class="img-fluid rounded mx-auto d-block">
                            </div>
                            <div class="content_blog p-3 text-center">
                                <div class="mt-2">
                                    <p class="h6 text-muted date_blog mb-0">{{date('d F Y',strtotime($blog->date))}} <a href="#" class="text-custom fw-bold">By {{$blog->author_name}}</a></p>
                                    <p class="mt-3 desc_blog text-white">{{$blog->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
