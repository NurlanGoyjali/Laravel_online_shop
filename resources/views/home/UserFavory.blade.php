@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList();

    $favo = \App\Models\Favory::where('user_id',Illuminate\Support\Facades\Auth::user()->id)->get();
    $ct=0;
    $cdata = $favo;
@endphp
@section('title', ' Favoriler')
@section('description')  {{$setting->description}} @endsection
@section('keywords') {{$setting->keyword}} @endsection


@section('content')





    <div class="col-md-3"><!--category-products-->
        <div class="panel-group category-products" id="accordian">

            @include('home.NavbarForUser')

        </div>
    </div><!--/category-products-->


    <!--favory-products-->


    <div class="features_items"><!--features_items-->

        <h2 class="title text-center"> Ürünler </h2>
        @foreach($cdata as $rs)
            <div class="col-md-3">
                <div class="product-image-wrapper">
                    <div class="single-products">

                        <div class="productinfo text-center" >
                            <img src="{{ Storage::url($rs->product->image) }}" style=" border-radius: 10px; height: 250px;" alt="" />
                            <h2>{{$rs->product->price}} TL</h2>
                            <p>{{$rs->product->title}}</p>
                            <a href="{{route('product',$rs->product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Gör</a>
                        </div>

                        <div class="product-overlay" style="border-radius: 10px;" >
                            <div class="overlay-content" >
                                <h2>{{$rs->product->price}} TL</h2>
                                <p>{{$rs->product->title}}</p>
                                <a href="{{route('product',$rs->product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Gör</a>
                            </div>
                        </div>
                    </div>

                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            @if(\Illuminate\Support\Facades\Auth::user())
                                @foreach($favo as $fv)
                                    @if($fv->product_id == $rs->product->id)
                                        <li  {{ $ct=$rs->product->id }} ><a  style="background:#F0E68C;" href="{{route('user.delete.favory',$fv->id)}}"><i class="fa fa-plus-square"></i>Favorilerden Çıkar</a></li>
                                        @break
                                    @endif
                                @endforeach
                                @if($ct!=$rs->product->id)
                                    <li><a href="{{route('user.add.favory',$rs->product->id)}}"><i class="fa fa-plus-square"></i>Favorilere Ekle</a></li>
                                @endif
                            @endif
                        </ul>
                    </div>

                </div>
            </div>
        @endforeach
    </div><!--features_items-->




    </section>


@endsection
