<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>Shop Laptop Robin Diem</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--shop demo 1--}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<div id="app" align="center" class="btn border-dark">
    <nav class="btn btn-dark navbar navbar-expand-lg ">
        <div class="container">
            {{--            <a href="{{route('home')}}"><span style="background: #10e7ff"><b><h1 class="btn btn-primary " style="width:400px">LAPTOP SHOP AHIHI</h1></b></span></a>--}}
            <br><a class="btn btn-outline-primary" href="{{route('home')}}"><img
                    src="{{asset('shopRobinDiem.png')}}" alt="" width="350px"></a>
        </div>
        <div>
            <form action="{{route('change')}}" method="post">
                <img src="{{asset('en.jpg')}}" alt="" width="30px">
                <img src="{{asset('vn.png')}}" alt="" width="32px">
                @csrf
                <select class="btn btn-outline-light" name="lang" id="" onchange="this.form.submit()">
                    @if(Session::has('locale'))
                        @if(Session::get('locale')==="en")
                            <option>EN</option>
                        @else
                            <option>VN</option>
                        @endif
                    @endif
                    <option value="">@lang('changeLanguage.choose-language')</option>
                    <option value="en">English</option>
                    <option value="vi">VietNamese</option>
                </select>
            </form>
        </div>
        <img src="{{asset('oki.gif')}}" alt="" width="10%">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="btn btn-outline-danger" href="{{route('home')}}">@lang('changeLanguage.home') <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <div class="container"><a class="btn btn-outline-primary" href="{{route('category.index')}}"><span
                    style="color: white">@lang('changeLanguage.category-products')</span></a></div>

        <form action="{{route('search')}}" class="form-inline my-2 my-lg-0" method="get">
            @csrf
            <div>
                <input class="form-control mr-sm-2" type="search" placeholder="@lang('changeLanguage.search') O--"
                       aria-label="Search" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0"
                        type="submit">@lang('changeLanguage.search')</button>
            </div>
        </form>


        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{--                {{ config('app.name', 'Laravel') }}--}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="container">
                            <a class="btn btn-outline-primary"
                               href="{{ route('login') }}">@lang('changeLanguage.login')</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-outline-primary"
                                   href="{{ route('register') }}">@lang('changeLanguage.register')</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="btn btn-outline-dark" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <br>
                                <a href="{{route('home')}}" class="btn btn-outline-danger">Home</a>
                                <br>
                                <a href="{{route('users.index')}}" class="btn btn-outline-primary">List Users</a>
                                <br>
                                <a href="{{route('products.index')}}" class="btn btn-outline-success">List
                                    Products</a>
                                <br>
                                <a href="{{route('customers.index')}}" class="btn btn-outline-danger">List
                                    Customers</a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
            <div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <a href="{{route('cart.index')}}" class="navbar-brand"
               onclick="@if(Session::has('cart'))
               @if(Session::get('cart')->totalAmount==0)
                   alert('Bạn chưa có sản phẩm nào trong giỏ hàng !')
               @endif
               @endif">
                <div class="navbar-nav">
                    <img src="{{asset('tao.png')}}" alt="" width="50px">
                    <span class=" fa fa-shopping-cart" style="color: red"><b>+@lang('changeLanguage.cart') :</b>
                        @if(Session::has('cart'))
                            {{Session::get('cart')->totalAmount}}
                        @else <span><b>0</b></span>
                        @endif</span>
                </div>
            </a>
        </div>
    </nav>
    {{--    <div><a href="" class="pull-left btn btn-primary"> Linh Kiện</a>--}}
    {{--        <a href="" class="pull-left btn btn-primary">Thông Tin</a></div>--}}
    <main class="py-4">
        @yield('content')
    </main>

</div>
</body>
<footer>
    <br>
    <div id="app" align="center" class="btn-lg">
        <p class="btn btn-dark pull-left">Copyright © 2019 Robin</p>
        <p class="btn btn-dark pull-right">Designed by Robin</p>

            <p class="btn-dark pull-center"><b>Kết nối với chúng tôi</b><br>
                <a href="https://www.facebook.com/Robin.Diem.88"><img src="{{asset('face2.png')}}" alt="" width="5%"></a>
                <a href="https://www.youtube.com/channel/UCdKo0tQCwBjNKbEoevpeX7g?view_as=subscriber"><img src="{{asset('youtobe.png')}}" alt="" width="5%"></a>
                <a href="https://www.instagram.com/?hl=vi"><img src="{{asset('instaram.png')}}" alt="" width="5%"></a><br>
                <a href="https://line.me/vi/"><img src="{{asset('hotline.png')}}" alt="" width="5%"></a>
                <a href="https://twitter.com/?lang=vi"><img src="{{asset('bird.png')}}" alt="" width="5%"></a>
                <a href=""><img src="{{asset('like.png')}}" alt="" width="5%"></a>
            </p>
    </div>
</footer>
</html>

