@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList();
    $data = \App\Http\Controllers\HomeController::CategoryList();
    $category_data = \App\Models\Category::all();


@endphp
@section('title', $setting->title)
@section('description')  {{$setting->description}} @endsection
@section('keywords',$setting->keywords)


@section('content')
    <section>
        <style>
            .mySlides {display:none;}
        </style>
<div class="container">


  			<div class="row">

        <div class="col-sm-9 padding-right">
            <div class="product-details"><!--product-details-->
                <div class="col-sm-5">
                    <div class="view-product">
                        <a href="{{Storage::url($product  ->image)}}"> <img src="{{\Illuminate\Support\Facades\Storage::url($product  ->image)}}" alt="" style=""/></a>
                        <h3>ZOOM</h3>
                    </div>

                    <div id="similar-product" class="carousel slide" data-ride="carousel">
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <div class="w3-content w3-display-container">
                                    @foreach($img as $rs)
                                        <a href="{{Storage::url($rs->image)}}"><img class="mySlides" src="{{Storage::url($rs->image)}}" style="width:100%"></a>
                                    @endforeach

                                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                                </div>

                                <script>
                                    var slideIndex = 1;
                                    showDivs(slideIndex);

                                    function plusDivs(n) {
                                        showDivs(slideIndex += n);
                                    }

                                    function showDivs(n) {
                                        var i;
                                        var x = document.getElementsByClassName("mySlides");
                                        if (n > x.length) {slideIndex = 1}
                                        if (n < 1) {slideIndex = x.length}
                                        for (i = 0; i < x.length; i++) {
                                            x[i].style.display = "none";
                                        }
                                        x[slideIndex-1].style.display = "block";
                                    }
                                </script>
                        </div>

                    </div>


                </div>
                <div class="col-sm-7">
                    <div class="product-information"><!--/product-information-->

                        <h2>{{$product->title}}</h2>
                        <p>Web ID: {{$product->id }}</p>
                        <img src="{{asset('assets')}}images/product-details/rating.png" alt="" />
                        <span>
									<span>{{$product->price}} TL</span>
									<label>Adet:</label>
									<input type="text" value="1" />

								</span>
                        <p><b>Availability:</b> In Stock</p>
                        <p><b>Durum:</b> Alıcı bekliyor</p>
                        <p><b>Satıcı: </b>{{$product->user->name}}</p>
                        <p><b>Şehir:</b>{{$product->user->address}}</p>
                        <p><b>Telefon:</b>{{$product->user->phone}}</p>
                        <p><b>Satıcı mail: </b>{{$product->user->email}}</p>
                        <a href=""><img src="{{asset('assets')}}images/product-details/share.png" class="share img-responsive"   alt="" /></a>
                    </div><!--/product-information-->
                </div>


            <div class="col-lg-12" style="margin-bottom: 15px;">

                <h1>Product Details</h1>
                {!!  $product->detail !!}

            </div>
            </div><!--/product-details-->
            @php
                $reviewdata = \App\Models\Review::where('product_id',$product->id)->get()
            @endphp
            <div class="category-tab shop-details-tab"><!--category-tab-->
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">

                        <li class="active"><a href="#reviews" data-toggle="tab">Reviews {{floor(strlen($reviewdata)/212)}}</a></li>
                    </ul>
                </div>

                <div class="tab-content">




                    <div class="tab-pane fade active in" id="reviews" >

                        <div class="col-sm-6">
                            @foreach($reviewdata as $rs)

                            <div >
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>{{$rs->user->name}}</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>{{$rs->created_at}}</a></li>
                                </ul>
                                <h1>{{$rs->subject}}</h1>
                                <p>{{$rs->review}}</p>

                            </div>
<p>--------------------------------------------------</p>
                            @endforeach

                        </div>


                        <div class="col-sm-6">
                            <p><b>Write Your Review</b></p>
                            @include('home.HomePart._message')
                            @livewire('review',['id'=>$product->id])
                        </div>


                    </div>


                </div>
        </div><!--/category-tab-->



        </div>
    </div>
</div>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>

    </section>


@endsection
