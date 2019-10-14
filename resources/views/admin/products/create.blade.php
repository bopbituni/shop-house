<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homestate &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO"/>
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FREEHTML5.CO"/>


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('template/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('template/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('template/css/superfish.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('template/css/flexslider.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('template/css/magnific-popup.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap-datepicker.min.css')}}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{asset('template/css/cs-select.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/cs-skin-border.css')}}">


    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

        <header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <h1 id="fh5co-logo"><a href="{{ url('/home') }}"><i class="icon-home"></i>Home<span>state</span></a>
                    </h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li><a href="{{route('admin.products.list')}}">Product</a></li>
                            <li><a href="{{route('admin.users.list')}}">User</a></li>
                            <li><a href="{{route('admin.posts.list')}}">Post</a></li>
                            <li class="nav-item dropdown active">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </header>

        <!-- end:header-top -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    .
                    <table class="table table-striped table-hover">
                        <tbody>
                        <form class="form-group" action="{{route('admin.products.store')}}"
                              method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td>
                                        <h4><strong>Thông tin nhà đất</strong></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Loại biệt thự:</label>
                                            <select name="type_id" class="form-control selected">
                                                @foreach($typeHouses as $typeHouse)
                                                <option value="{{$typeHouse->id}}">{{$typeHouse->type_house}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Tên biệt thự:</label>
                                            <input type="text" name="name" id="inputID" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Diện tích:</label>
                                            <input type="text" name="area" id="inputID" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Trạng thái:</label>
                                            <input type="text" name="status" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Giá tiền:</label>
                                            <input type="text" name="price" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Loại nhà:</label>
                                            <input type="text" name="title" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Số phòng tắm:</label>
                                            <input type="text" name="bathroom" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Số Garage:</label>
                                            <input type="text" name="garage" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Số phòng ngủ:</label>
                                            <input type="text" name="bedroom" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Địa chỉ:</label>
                                            <input type="text" name="address" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="inputID"
                                                   class="control-label">Giới thiệu:</label>
                                            <input type="text" name="introduce" class="form-control"
                                                   required="required">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td>
                                        <label for="inputID"
                                               class="control-label">Mô tả:</label>
                                        <textarea name="content" rows="5" class="form-control"
                                                  placeholder="mô tả ngắn gọn"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="exampleFormControlFile1">Ảnh</label>
                                        <input type="file" name="image" class="form-control-file">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-success">Thêm mới</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        <div class="col-md-3">
                            <h3 class="section-title">About Homestate</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                                the Semantics.</p>
                        </div>

                        <div class="col-md-3 col-md-push-1">
                            <h3 class="section-title">Links</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Agent</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">API</a></li>
                                <li><a href="#">FAQ / Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <h3 class="section-title">Information</h3>
                            <ul>
                                <li><a href="#">Terms &amp; Condition</a></li>
                                <li><a href="#">License</a></li>
                                <li><a href="#">Privacy &amp; Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3 class="section-title">Newsletter</h3>
                            <p>Subscribe for our newsletter</p>
                            <form class="form-inline" id="fh5co-header-subscribe">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email"
                                                   placeholder="Enter your email">
                                            <button type="submit" class="btn btn-default"><i
                                                        class="icon-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                            <p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i
                                        class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a>
                                / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a> &amp; <a
                                        href="http://blog.gessato.com/" target="_blank">Gessato</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="{{asset('template/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('template/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('template/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('template/js/sticky.js')}}"></script>
<!-- Superfish -->
<script src="{{asset('template/js/hoverIntent.js')}}"></script>
<script src="{{asset('template/js/superfish.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('template/js/jquery.flexslider-min.js')}}"></script>
<!-- Date Picker -->
<script src="{{asset('template/js/bootstrap-datepicker.min.js')}}"></script>
<!-- CS Select -->
<script src="{{asset('template/js/classie.js')}}"></script>
<script src="{{asset('template/js/selectFx.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="/js/google_map.js"></script>


<!-- Main JS -->
<script src="{{asset('template/js/main.js')}}"></script>

</body>
</html>

