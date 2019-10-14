@extends('layouts.home.master')
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('storage/images/img_bg_3.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2 class="heading-title">Our Properties</h2>
                                    <p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by the fine
                                        folks at <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
        <div id="fh5co-properties" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <h3>Information of House</h3>
                        <p>{{$product->introduce}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="property">
                            <div class="property-details">
                                <h3>Biệt thự {{$product->name}}</h3>
                                <span class="price">Giá: {{$product->price}}</span>
                            </div>
                            <div class="fh5co-property"
                                 style="height: 800px;background-image: url({{asset('storage/'. $product->image)}});">
                                <ul class="list-details">
                                    <li>Area: {{$product->area}}}
                                    <li>
                                    <li>Số phòng ngủ : {{$product->bedroom}}</li>
                                    <li>Số phòng tắm : {{$product->bathroom}}</li>
                                    <li>Số garage : {{$product->garage}}</li>
                                </ul>
                            </div>
                            <div class="property-details">
                                <p class="text-center">
                                <h2>Địa chỉ</h2></p>
                                <span class="address text-center icon-font-size"><h3>{{$product->address}}</h3></span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h3 align="center" class="card-title"><strong>Mô tả</strong></h3>
                                <h4>{{$product->content}}</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2>Đặc điểm</h2>
                                <table style="background-color: darksalmon" class="table">
                                    <tbody>
                                    <tr>
                                        <td><strong>Tình trạng sản phẩm :</strong>{{$product->status}}</td>
                                        <td><strong>Diện tích sử dụng :</strong>{{$product->area}}</td>
                                        <td><strong>Tình trạng tài sản :</strong>Nhà đất bán</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Giá :</strong>{{$product->price}}</td>
                                        <td><strong>Loại bất động sản :</strong>{{$product->title}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-10">
                                <h3 class="text-dark text-center">Đặt lịch xem nhà</h3>
                            </div>
                            <div class="col-md-10">
                                <form class="form-group" action="{{route('shop.store.detail', $product->id)}}" method="post">
                                    @csrf
                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputID"
                                                           class="control-label">Ngày xem:</label>
                                                    <input type="date" name="date" id="inputID" class="form-control"
                                                           value="" required="required"
                                                           placeholder="Chọn ngày xem đi">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputID"
                                                           class="control-label">Thời gian:</label>
                                                    <select class="form-control" name="time">
                                                        <option value="8h">8h</option>
                                                        <option value="9h">9h</option>
                                                        <option value="10h">10h</option>
                                                        <option value="11h">11h</option>
                                                        <option value="12h">12h</option>
                                                        <option value="13h">13h</option>
                                                        <option value="14h">14h</option>
                                                        <option value="15h">15h</option>
                                                        <option value="16h">16h</option>
                                                        <option value="17h">17h</option>
                                                        <option value="18h">18h</option>
                                                        <option value="19h">19h</option>
                                                        <option value="20h">20h</option>
                                                        <option value="21h">21h</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4><strong>Thông tin của bạn</strong></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputID"
                                                           class="control-label"></label>
                                                    <input type="text" name="name" class="form-control"
                                                           value="" required="required"
                                                           placeholder="Tên của bạn">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputID"
                                                           class="control-label"></label>
                                                    <input type="text" name="phone" class="form-control"
                                                           required="required"
                                                           placeholder="Điện thoại(*)">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputID"
                                                           class="control-label"></label>
                                                    <input type="text" name="email" class="form-control"
                                                           required="required"
                                                           placeholder="Email(*)">
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <textarea name="content" rows="5" class="form-control"
                                                          placeholder="Thông điệp"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button class="btn btn-success">Đăng</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection