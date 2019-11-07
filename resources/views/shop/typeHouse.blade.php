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
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Newest Properties</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis
                        accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
            <div class="row">
                @foreach($typeHouses as $typeHouse)
                    <div class="col-md-4 animate-box">
                        <div class="property">
                            <a href="{{route('shop.detail', $typeHouse->id)}}" class="fh5co-property"
                               style="background-image: url({{asset('storage/' . $typeHouse->image)}});">
                                <span class="status">{{$typeHouse->status}}</span>
                                <ul class="list-details">
                                    <li>Diện tích: {{$typeHouse->area}}<li>
                                    <li>Số phòng ngủ: {{$typeHouse->bedroom}}</li>
                                    <li>Số phòng tắm: {{$typeHouse->bathroom}}</li>
                                    <li>Số garage: {{$typeHouse->garage}}</li>
                                </ul>
                            </a>
                            <div class="property-details">
                                <h3>{{$typeHouse->name}}</h3>
                                <span class="price">{{$typeHouse->price}}</span>
                                <p>{{$typeHouse->introduce}}</p>
                                <span class="address"><i
                                            class="icon-map"></i>{{$typeHouse->address}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row">{{$typeHouses->links()}}</div>
            </div>
        </div>
    </div>
@endsection