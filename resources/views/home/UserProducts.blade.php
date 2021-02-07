@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList()
@endphp
@section('title', 'Ürünlerim')
@section('description')  {{$setting->description}} @endsection
@section('keywords') {{$setting->keyword}} @endsection


@section('content')


    <div class="container">

        <div class="col-md-3"><!--category-products-->
            <div class="panel-group category-products" id="accordian">

                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('review',Auth::id())}}" >Yorumlarım</a></h4>
                        <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('user.products',)}}" >Ürünlerim</a></h4>
                        <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('user.product.create')}}" >Ürün Ekle</a></h4>
                        <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="" >Favorilerim</a></h4>



                    </div>
                </div>

            </div>
        </div><!--/category-products-->


        <div class="col-sm-9">


            <h2 class="title text-center"> Ürünler </h2>
            @foreach($products as $rs)

                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{ Storage::url($rs->image) }}" style=" border-radius: 10px; height: 250px;" />
                                <h2>{{$rs->price}} TL</h2>
                                <p>{{$rs->title}}</p>
                                <a href="{{route('product',$rs->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Gör</a>
                            </div>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <h2>{{$rs->price}} TL</h2>
                                    <p>{{$rs->title}}</p>
                                    <a href="{{route('product',$rs->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Gör</a>
                                </div>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{route('user.sold',$rs->id)}}"><i class="fa fa-plus-square"></i>Satıldı</a></li>
                                <li><a href="{{route('user.product.update',$rs->id)}}"><i class="fa fa-plus-square"></i>Düzenle</a></li>
                                <li><a href="{{route('user.sold',$rs->id)}}"><i class="fa fa-plus-square"></i>Sil</a></li>
                                <li><a href="{{route('user.image.show',$rs->id)}}"><i class="fa fa-plus-square"></i>Galeri</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!--features_items-->


    </div>




    </div>



@endsection
