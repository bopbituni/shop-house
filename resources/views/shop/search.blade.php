@extends('layouts.home.master')
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('storage/images/house/img_bg_3.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2 class="heading-title">Our Properties</h2>
                                    <p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by the fine folks at
                                        <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    @include('layouts.home.search')

    <div id="fh5co-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($products as $product)
                        {{$product->name}}
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
