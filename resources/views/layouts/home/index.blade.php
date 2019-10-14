@extends('layouts.home.master')
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                @foreach($products as $product)
                    <li style="background-image: url({{asset('storage/'. $product->image )}})">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <span class="status">{{$product->status}}</span>
                                            <h1>{{$product->name}}</h1>
                                            <h2 class="price">{{$product->price}}</h2>
                                            <p>{{$product->introduce}}</p>
                                            <p class="details">
                                                <span>{{$product->area}}</span>
                                                <span>{{$product->bedroom}} phòng ngủ</span>
                                                <span>{{$product->bathroom}} phòng tắm</span>
                                                <span>{{$product->garage}} garage</span>
                                            </p>
                                            <p><a class="btn btn-primary btn-lg"
                                                  href="{{route('shop.detail' , $product->id)}}">Watch now</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>

    <div id="fh5co-search-map">
        <div class="search-property">
            <div class="s-holder">
                <h2>Search House</h2>
                <div class="row">
                    <form role="search" method="get" action="{{route('shop.checkSearch')}}">
                        @csrf
                        <div class="col-xxs-12 col-xs-12">
                            <div class="input-field">
                                <label for="from">Keyword:</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                       id="name"
                                       placeholder="Nhập tên ..."/>
                                @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Property Status:</label>
                                <select class="cs-select cs-skin-border @error('status') is-invalid @enderror"
                                        name="status" id="status">
                                    <option disabled selected>Trạng thái</option>
                                    @foreach($products as $product)
                                        <option value="{{$product->status}}">{{$product->status}}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </section>
                        </div>
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">House Type:</label>
                                <select class="cs-select cs-skin-border input-half @error('type_id') is-invalid @enderror"
                                        name="type_id" id="type_id">
                                    <option disabled selected>Kiểu biệt thự</option>
                                    <option value="1">Biệt thự mùa xuân</option>
                                    <option value="2">Biệt thự mùa hạ</option>
                                    <option value="3">Biệt thự mùa thu</option>
                                    <option value="4">Biệt thự mua đông</option>
                                </select>
                                @error('type_id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </section>
                        </div>
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Price:</label>
                                <div class="wide">
                                    <select class="cs-select cs-select-half cs-skin-border input-half @error('fromPrice') is-invalid @enderror"
                                            id="fromPrice" name="fromPrice">
                                        <option disabled selected>Từ:</option>
                                        @for($i = 1500000; $i <= 4000000; $i+=500000)
                                            <option value="{{$i}}">{{$i}} $</option>
                                        @endfor
                                    </select>
                                    @error('fromPrice')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <select class="cs-select cs-select-half cs-skin-border input-half @error('toPrice') is-invalid @enderror"
                                            id="toPrice" name="toPrice">
                                        <option disabled selected>Đến:</option>
                                        @for($i = 1500000; $i <= 4000000; $i+=500000)
                                            <option value="{{$i}}">{{$i}} $</option>
                                        @endfor
                                    </select>
                                    @error('toPrice')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </section>
                        </div>
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Bedrooms:</label>
                                <div class="wide">
                                    <select class="cs-select cs-select-half cs-skin-border input-half @error('fromBedroom') is-invalid @enderror"
                                            name="fromBedroom" id="fromBedroom">
                                        <option disabled selected>Từ:</option>
                                        @for($i = 3; $i <= 8; $i++)
                                            <option value="{{$i}}">{{$i}} Phòng ngủ</option>
                                        @endfor
                                    </select>
                                    @error('fromBedroom')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <select class="cs-select cs-select-half cs-skin-border input-half @error('toBedroom') is-invalid @enderror"
                                            name="toBedroom" id="toBedroom">
                                        <option disabled selected>Đến:</option>
                                        @for($i = 3; $i <= 8; $i++)
                                            <option value="{{$i}}">{{$i}} Phòng ngủ</option>
                                        @endfor
                                    </select>
                                    @error('toBedroom')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </section>
                        </div>
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Bathrooms:</label>
                                <div class="wide">
                                    <select class="cs-select cs-select-half cs-skin-border input-half @error('fromBathroom') is-invalid @enderror"
                                            name="fromBathroom" id="fromBathroom">
                                        <option disabled selected>Từ:</option>
                                        @for($i = 3; $i <= 9; $i++)
                                            <option value="{{$i}}">{{$i}} Phòng tắm</option>
                                        @endfor
                                    </select>
                                    @error('fromBathroom')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <select class="cs-select cs-select-half cs-skin-border input-half @error('toBathroom') is-invalid @enderror"
                                            name="toBathroom" id="toBathroom">
                                        <option disabled selected>Đến:</option>
                                        @for($i = 3; $i <= 9; $i++)
                                            <option value="{{$i}}">{{$i}} Phòng tắm</option>
                                        @endfor
                                    </select>
                                    @error('toBathroom')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </section>
                        </div>
                        <div class="col-xxs-12 col-xs-12">
                            <section>
                                <label for="class">Area:</label>
                                <div class="wide">
                                    <select class="cs-select cs-select-half cs-skin-border input-half @error('fromArea') is-invalid @enderror"
                                            name="fromArea" id="fromArea">
                                        <option disabled selected>Từ:</option>
                                        @for($i = 200; $i <= 700; $i+=100)
                                            <option value="{{$i}}">{{$i}} m2</option>
                                        @endfor
                                    </select>
                                    @error('fromArea')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <select class="cs-select cs-select-half cs-skin-border input-half @error('toArea') is-invalid @enderror"
                                            name="toArea" id="toArea">
                                        <option disabled selected>Đến:</option>
                                        @for($i = 200; $i <= 700; $i+=100)
                                            <option value="{{$i}}">{{$i}} m2</option>
                                        @endfor
                                    </select>
                                    @error('toArea')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </section>
                        </div>
                        <div class="col-xxs-12 col-xs-12 text-center">
                            <p>>
                                <button class="btn btn-primary btn-lg">Search</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="map" style="background-image: url({{asset('storage/images/backgroup.jpg')}});">
        </div>
    </div>

    <div id="fh5co-features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box">

                    <div class="feature-left">
							<span class="icon">
								<i class="icon-map"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Move House</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 animate-box">
                    <div class="feature-left">
							<span class="icon">
								<i class="icon-browser"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Mortgage</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Make Money</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">

                    <div class="feature-left">
							<span class="icon">
								<i class="icon-piechart"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Business Home</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 animate-box">
                    <div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Marketing</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 animate-box">
                    <div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Explorer</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-popular-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Snow House</h3>
                    <p>Mùa đông với sự kỳ diệu của tạo hóa đã tạo lên khung cảnh vô cùng lãng mạng và tuyệt
                        đẹp với những bông tuyết trắng càng tô tăng vẻ sang trọng cho những căn biệt thự
                        xứ lạnh này </p>
                </div>
            </div>
            <div class="row">
                @foreach($snowHouses as $snowHouse)
                    <div class="col-md-4 animate-box">
                        <a href="#" class="fh5co-property"
                           style="background-image: url({{asset('storage/'.$snowHouse->image)}});">
                            <span class="status">{{$snowHouse->status}}}</span>
                            <div class="prop-details">
                                <span class="price">{{$snowHouse->price}}</span>
                                <h3>Căn biệt thự: {{$snowHouse->name}}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="fh5co-testimonial" style="background-image:url(images/img_bg_2.jpg);">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Happy Clients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-testimony animate-box">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class="author">John Doe, CEO <a href="http://freehtml5.co/"
                                                           target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span>
                        </p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="box-testimony animate-box">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts.&rdquo;</p>
                        </blockquote>
                        <p class="author">John Doe, CEO <a href="http://freehtml5.co/"
                                                           target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span>
                        </p>
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="box-testimony animate-box">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-properties" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Newest Properties</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores,
                        perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 animate-box">
                        <div class="property">
                            <a href="#" class="fh5co-property"
                               style="background-image: url({{asset('storage/'.$product->image)}});">
                                <span class="status">Sale</span>
                                <ul class="list-details">
                                    <li>{{$product->area}}
                                    <li>
                                    <li>{{$product->bedroom}} phòng ngủ</li>
                                    <li>{{$product->bathroom}} phòng tắm</li>
                                    <li>{{$product->garage}} garage</li>
                                </ul>
                            </a>
                            <div class="property-details">
                                <h3>{{$product->name}}</h3>
                                <span class="price">{{$product->price}}</span>
                                <p>{{$product->content}}</p>
                                <span class="address"><i
                                            class="icon-map"></i>{{$product->address}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div id="fh5co-about" class="fh5co-agent">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Our Agents</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores,
                        perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-1.jpg"
                             alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Jean Smith</h3>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id
                            repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-2.jpg"
                             alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Hush Raven</h3>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id
                            repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-3.jpg"
                             alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Alex King</h3>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id
                            repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img class="img-responsive" src="images/user-4.jpg"
                             alt="Free HTML5 Templates by freeHTML5.co">
                        <h3>Hush Raven</h3>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id
                            repellat</p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter2"></i></a>
                            <a href="#"><i class="icon-facebook2"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-dribbble2"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Recent From Blog</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores,
                        perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/property-4.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">Properties for sale</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/property-2.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">Modern Home</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/property-3.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">15% Deal Discount For House</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-md-block"></div>
            </div>
        </div>
    </div>
    <!-- fh5co-blog-section -->
    <div id="fh5co-contact" class="fh5co-contact">
        <div class="half-contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center heading-section animate-box">
                        <h3>Hãy gửi câu hỏi bạn mong muốn giải đáp cho chúng tôi ^^!</h3>
                        <p>Đội ngũ kỹ thuật viên tận tình chu đáo luôn online 24/7 , luôn sẵn sàng phục vụ mọi yêu cầu
                            của quý khách</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                        <textarea name="" class="form-control" id="" cols="30" rows="7"
                                                  placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="half-bg" style="background-image: url(images/cover_bg_2.jpg);"></div>
    </div>

@endsection
<!-- jQuery -->

