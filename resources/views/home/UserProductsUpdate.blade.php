@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList()
@endphp
@section('title', ' Ürün Güncelleme')
@section('description')  {{$setting->description}} @endsection
@section('keywords') {{$setting->keyword}} @endsection


@section('content')




    <div class="content">

        <div class="col-md-3"><!--category-products-->
            <div class="panel-group category-products" id="accordian">

                @include('home.NavbarForUser')

            </div>
        </div><!--/category-products-->


        <div class="container-fluid" >
            <div class="row" >
                <div class="col-md-8">



                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Product Add</h4>
                            <p class="card-category">bişeyler yazabilirsin</p>
                        </div>

                        <div class="card-body">

                            <form method="POST" action="{{route('user.product.update',$update->id)}}" enctype="multipart/form-data"  >

                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Bağlı Olduğu Katagori</label>

                                            <select name="Category" class="form-control">
                                                <option class="form-control" type="number" value="{{$update->category->id}}" name="" >{{$update->category->title}}</option>
                                                @foreach($data as $rs)
                                                    <option class="form-control" type="number" value="{{$rs->id}}" name="" >{{$rs->title}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Title</label>
                                            <input required  type="text" value="{{$update->title}}" class="form-control" name="Title">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Keyword</label>
                                            <input   type="text" value="{{$update->keywords}}" class="form-control" name="Keyword">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description</label>
                                            <input  type="text" class="form-control" value="{{$update->description}}" name="Description">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Slug </label>
                                            <input  type="text" value="{{$update->slug}}" class="form-control" name="Slug">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">

                                            <label > Image</label>
                                            <input  type="file"  name="Image" >
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Fiyat</label>
                                            <input value="{{$update->price}}" name="Price" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Stok</label>
                                            <input  type="text" value="{{$update->quantity}}" name="Quantity" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tax</label>
                                            <input  type="text" value="{{$update->tax}}" name="Tax" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Hakkında</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Buraya ürün hakkıda bilgiler girebilirsiniz. </label>
                                                <textarea class="form-control" id="summernote" name="detail" rows="5"> {{$update->detail}} </textarea>

                                                <script>
                                                    $('#summernote').summernote({
                                                        tabsize: 2,
                                                        height: 100
                                                    });
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">EKLE</button>
                                <div class="clearfix"></div>


                            </form>
                        </div>
                    </div>
                </div>

                <script src="{{asset('assets')}}/js/jquery.js"></script>
                <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
                <script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
                <script src="{{asset('assets')}}/js/price-range.js"></script>
                <script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
                <script src="{{asset('assets')}}/js/main.js"></script>




            </div>





@endsection
