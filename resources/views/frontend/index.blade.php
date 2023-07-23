@extends('frontend.master')

@section('content')
    <!-- START HOME -->
    <section class="section header-bg-img h-100vh align-items-center d-flex" id="home" style="background-image: url({{asset($banner->first()->image)}});">
        <div class="bg-overlay"></div>
        <div class="container z-index">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center header-content mx-auto">
                        <h4 class="text-white first-title mb-4">Welcome</h4>
                        <h1 class="header-name text-white text-capitalize mb-0">I'M <span class="element fw-bold"></span></h1>
                        <p class="text-white mx-auto header-desc mt-4">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                        <div class="mt-4 pt-2" style="display: inline;margin-right:30px;">
                            <a href="#portfolio" class="btn btn-outline-custom btn-round">See Protfolio</a>
                        </div>
                        <div class="mt-4 pt-2" style="display: inline;">
                            <a href="#" class="btn btn-outline-custom btn-round">Download Cv</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="scroll_down">
            <a href="#about" class="scroll">
                <i class="text-white"></i>
            </a>
        </div> -->
    </section>
    <!-- END HOME -->

    <!-- START ABOUT -->
    <section class="section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="">
                        <img src="{{asset('uploads/about/'.$about->first()->photo)}}" alt="" class="img-fluid mx-auto d-block img-thumbnail" >
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3">
                        <h2><span class="fw-bold">About</span> Me</h2>
                        <h4 class="mt-4">{{$about->first()->title}}! <span class="text-custom fw-bold">{{$about->first()->sub_title}}.</span></h4>
                        <p class="text-muted mt-4">{{$about->first()->description}}</p>
                        <div>
                            <ul class="mb-0 about-social list-inline mt-4">
                                @foreach($icons as $icon)
                                <li class="list-inline-item"><a href="{{$icon->link}}"><i class="fa {{$icon->icon}} text-custom display-4"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <!-- START SERVICES -->
    <section class="section bg-light" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Our <span class="fw-bold">Services</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($services as $service)
                <div class="col-lg-4">
                    <div class="text-center services-boxes rounded p-4 mt-4">
                        <div class="services-boxes-icon">
                            <i class="fa {{$service->icon}} text-custom display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">{{$service->title}}</h5>
                            <div class="services-title-border"></div>
                            <p class="text-muted mt-3">{{$service->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- END SERVICES -->

    <!-- START CTA -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="fw-bold">I Am Available For Freelancer.</h2>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#contact" class="btn btn-custom">Hire Me!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    <!-- START SKILL -->
    <section class="section bg-light" id="skill">
        <div class="container">    
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>My <span class="fw-bold">Skills</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4" style="font-size: 14px;font-weight:bold;">
                <div class="col-lg-4">
                    <span class="mb-3">HTML</span><span style="margin-left:270px;">90%</span>
                    <div style="height: 5px;" class="progress mt-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <span>CSS</span><span style="margin-left:270px;">80%</span>
                    <div style="height: 5px;" class="progress mt-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <span>JS</span><span style="margin-left:270px;">10%</span>
                    <div style="height: 5px;" class="progress mt-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4" style="font-size: 14px;font-weight:bold;">
                <div class="col-lg-4">
                    <span>PHP</span><span style="margin-left:270px;">70%</span>
                    <div style="height: 5px;" class="progress mt-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <span>LARAVEL</span><span style="margin-left:250px;">70%</span>
                    <div style="height: 5px;" class="progress mt-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <span>Ajax</span><span style="margin-left:270px;">70%</span>
                    <div style="height: 5px;" class="progress mt-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SKILL -->

    <!-- START WORK -->
    <section class="section text-center" id="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Our <span class="fw-bold">Works</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
{{--            <div class="row mt-5 ">--}}
{{--                <ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="menu-filter">--}}
{{--                    <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>--}}
{{--                    <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>--}}
{{--                    <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>--}}
{{--                    <li class="list-inline-item"><a class="" data-filter=".WORK">WORK</a></li>--}}
{{--                    <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
        <div class="container">
            <div class="row mt-4 work-filter">
                @foreach($works as $work)
                <div class="col-lg-4 work_item webdesign wordpress">
                    <a href="{{asset($work->image)}}" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img src="{{asset($work->image)}}" class="img-fluid mx-auto d-block rounded" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">{{$work->category_name}}</p>
                                <h4 class="mb-0">{{$work->title}}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END WORK -->

    <!-- START BLOG -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Our <span class="fw-bold">Blog</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($blogs as $blog)
                <div class="col-lg-4 mt-3">
                    <div class="rounded bg-white p-2">
                        <div class="img_blog">
                            <img src="{{asset($blog->image)}}" alt="" class="img-fluid rounded mx-auto d-block">
                        </div>
                        <div class="content_blog p-3">
                            <div>
                                <h5 class="fw-bold mb-0"><a href="#" class="text-dark">{{$blog->title}}</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="h6 text-muted date_blog mb-0">{{date('d F Y',strtotime($blog->date))}} <a href="#" class="text-custom fw-bold">By {{$blog->author_name}}</a></p>
                                <p class="mt-3 desc_blog text-muted">{{substr($blog['description'],0,200)}}</p>
                                <p class="h6 mb-0"><a href="{{route('blogs.show',$blog->id)}}" class="text-muted fw-bold">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="fw-bold">Contact</span> Us</h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="text-center">
                        <div>
                            <i class="mbri-mobile2 text-custom h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title fw-bold">Call Us On</h5>
                            <p class="text-muted">{{$contact->first()->mobile}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <div>
                            <i class="mbri-letter text-custom h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title fw-bold">Email Us At</h5>
                            <p class="text-muted">{{$contact->first()->email}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <div>
                            <i class="mbri-pin text-custom h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title fw-bold">Address</h5>
                            <p class="text-muted">{{$contact->first()->address}}.</p>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="form-kerri contact_form">
                        <form action="{{route('store.message')}}" method="post" id="inbox">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input type="text" name="name" class="form-control" placeholder="Your name..." aria-label="First name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Your email...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mt-2">
                                    <input type="text" name="subject" class="form-control" placeholder="Your Subject.." aria-label="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your Massage..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end mt-2">
                                    <input type="submit" class="btn btn-custom text-uppercase" value="Send Massage">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->
@endsection
