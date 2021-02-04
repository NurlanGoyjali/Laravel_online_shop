@php
    $data = \App\Http\Controllers\HomeController::CategoryList()
@endphp
<div id="header"><!--header-->

    <div class="header_top"><!--header_top-->

        <div class="container">
            <div class="row">
                <header id="header"><!--header-->
                    <div class="header_top">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> {{$setting->phone}}</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> {{$setting->email}}</a></li>
                        </ul>
                    </div>
            </div>

            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$setting->youtube}}"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="{{$setting->instagram}}"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="{{$setting->email}}"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->

        <div class="container">
            <div class="row">


                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="{{route('home.page')}}"><img src="{{asset('assets')}}/images/home/logo.png" alt="" /></a>
                    </div>
                    @if(!Auth::user())
                    <div class="btn-group pull-right clearfix">
                        <div class="btn-group">
                           <a href="login"> <button type="button" class="btn btn-default dropdown-toggle usa" >
                                Giriş
                            </button></a>
                        </div>

                        <div class="btn-group">
            <a href="register">  <button type="submit" class="btn btn-default dropdown-toggle usa" >Kayıt
                            </button></a>
                        </div>

                    </div>
@endif
                </div>
                @auth()
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
                            <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="{{route('lgout')}}"><i class="fa fa-lock"></i> Çıkış</a></li>
                        </ul>
                    </div>
                </div>
                @endauth
            </div>
        </div>

    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->

        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Kategoriler<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach($data as $rs)
                                    <li><a href="{{$rs->id}}">{{$rs->title}}</a></li>
                                    @if($rs->subcategory)
                                        {{ $children = $rs->subcategory }}
                                            <li>yazdı {{$subcategory->title}}</li>

                                        <span>
                                            @foreach($children as $subcategory)
                                                @if(count($subcategory->children))
                                                    <li>{{$subcategory->title}}</li>
                                                    @include('home._header',['children' =>$subcategory->child])
                                                @else
                                                    <li><a href="#">{{$subcategory->title}}</a> </li>
                                                @endif
                                            @endforeach
                                        </span>
                                        @endif

                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Company<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                                    <li><a href="{{route('references')}}">Referanslar</a></li>
                                    <li><a href="{{route('contact')}}">İletişim</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>

    </div><!--/header-bottom-->
    </div>
</header><!--/header-->



