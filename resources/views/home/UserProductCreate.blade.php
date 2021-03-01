@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList()
@endphp
@section('title', ' Ürün Ekle')
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

                <form method="POST" action="{{route('user.product.create')}}" enctype="multipart/form-data"  >

                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Bağlı Olduğu Katagori</label>

                                <select name="Category" class="form-control">
                                    @foreach($data as $rs)
                                        <option class="form-control" type="number" value="{{$rs->id}}" name="Category" >{{$rs->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Title</label>
                                <input required  type="text" class="form-control" name="Title">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Keyword</label>
                                <input   type="text" class="form-control" name="Keyword">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Description</label>
                                <input  type="text" class="form-control" name="Description">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating"> Slug </label>
                                <input  type="text" class="form-control" name="Slug">
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
                                <label class="bmd-label-floating">Fiyatı</label>
                                <input  required type="text" name="Price" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Stok</label>
                                <input  type="text" name="Quantity" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Tax</label>
                                <input  type="text" name="Tax" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Hakkında</label>
                                <div class="form-group">
                                    <label class="bmd-label-floating">Buraya ürün hakkıda bilgiler girebilirsiniz. </label>
                                    <textarea class="form-control" id="summernote" name="detail" rows="5"></textarea>

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
