<footer class="footer bg-light">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
                <div class="text-center text-white footer-alt">
                    <ul class="list-unstyled list-inline mb-0">
                        @php
                            $icons = \App\Models\Icon::where('status',1)->get();
                        @endphp
                        @foreach($icons as $icon)
                        <li class="list-inline-item"><a href="{{$icon->link}}"><i class="fa {{$icon->icon}}"></i></a></li>
                        @endforeach
                    </ul>
                    <p class="copyright_content mb-0 mt-3"> 2022 - 2023 &copy; Riad. Design by SRBThemes.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
