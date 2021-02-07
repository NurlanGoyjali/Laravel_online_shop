@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList();
    $data = \App\Http\Controllers\HomeController::CategoryList();
    $category_data = \App\Models\Category::all();
    $rec = \App\Models\Product::limit(3)->get();


@endphp
@section('title', $setting->title)
@section('description')  {{$setting->description}} @endsection
@section('keywords',$setting->keywords)


@section('content')

    @include('home._slider')
    <section>
        <div class="col-sm-3" >
            <div class="left-sidebar">
                <h2>Katagori</h2>

                <div class="panel-group category-products" id="accordian"><!--category-products-->
                    @foreach($category_data as $rs)
                        <div class="panel panel-default">
                            <div class="panel-heading">

                                <h4 class="panel-title"><a href="#">{{$rs->title}}</a></h4>


                            </div>
                        </div>
                    @endforeach
                </div><!--/category-products-->



            </div>
        </div>
        <div class="container">
            <div class="row">


                <div class="col-sm-9 padding-right">



                    <div class="features_items"><!--features_items-->

                        <h2 class="title text-center"> Ürünler </h2>
                        @foreach($cdata as $rs)

                            <div class="col-md-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center" >
                                            <img src="{{ Storage::url($rs->image) }}" style=" border-radius: 10px; height: 250px;" alt="" />
                                            <h2>{{$rs->price}} TL</h2>
                                            <p>{{$rs->title}}</p>
                                            <a href="{{route('product',$rs->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Gör</a>
                                        </div>
                                        <div class="product-overlay" style="border-radius: 10px;" >
                                            <div class="overlay-content" >
                                                <h2>{{$rs->price}} TL</h2>
                                                <p>{{$rs->title}}</p>
                                                <a href="{{route('product',$rs->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Gör</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Favorilere Ekle</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div><!--features_items-->




                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
                                <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
                                <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
                                <li><a href="#kids" data-toggle="tab">Kids</a></li>
                                <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">

                            <div class="tab-pane fade active in" id="tshirt" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('assets')}}/images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="blazers" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('assets')}}/images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="sunglass" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('assets')}}/images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="tab-pane fade" id="kids" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('assets')}}/images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="poloshirt" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('assets')}}/images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!--/category-tab-->



                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended items</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($rec as $rc)
                                <div class="item active">

                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{Storage::url($rc->image)}}" alt="" />
                                                    <h2>{{$rc->price}} TL</h2>
                                                    <p>{{$rc->title}}</p>
                                                    <a href="{{route('product',$rc->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Goster</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @endforeach

                        </div>
                    </div><!--/recommended_items-->

                </div>
            </div>
        </div>
    </div>


    </section>


@endsection
