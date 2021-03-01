@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList();
    $data = \App\Http\Controllers\HomeController::CategoryList();
    $category_data = \App\Models\Category::all();
    if (Auth::user())
    $favo = \App\Models\Favory::where('user_id',Illuminate\Support\Facades\Auth::user()->id)->get();
    $ct=0;


@endphp
@section('title', $setting->title)
@section('description')  {{$setting->description}} @endsection
@section('keywords',$setting->keywords)


@section('content')
    <section>
        <div class="col-sm-3" >
            <div class="left-sidebar">
                <h2>Katagori</h2>

                <div class="panel-group category-products" id="accordian"><!--category-products-->
                    @foreach($category_data as $rs)
                        <div class="panel panel-default">
                            <div class="panel-heading">

                                <h4 class="panel-title"><a href="{{route('categoryproducts',$rs->id)}}">{{$rs->title}}</a></h4>


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

                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ Storage::url($rs->image) }}" style=" border-radius: 10px; height: 250px;" alt="" />
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
                                            @if(\Illuminate\Support\Facades\Auth::user())
                                                @foreach($favo as $fv)
                                                    @if($fv->product_id == $rs->id)
                                                        <li  {{ $ct=$rs->id }} ><a  style="background:#F0E68C;" href="{{route('user.delete.favory',$fv->id)}}"><i class="fa fa-plus-square"></i>Favorilerden Çıkar</a></li>
                                                        @break
                                                    @endif
                                                @endforeach
                                                @if($ct!=$rs->id)
                                                    <li><a href="{{route('user.add.favory',$rs->id)}}"><i class="fa fa-plus-square"></i>Favorilere Ekle</a></li>
                                                @endif
                                            @endif
                                        </ul>
                                    </div>


                                </div>
                            </div>



                        @endforeach

                    </div><!--features_items-->





                </div>
            </div>
        </div>
    </section>


@endsection
