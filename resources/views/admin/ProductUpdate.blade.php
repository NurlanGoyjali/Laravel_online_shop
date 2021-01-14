@extends('layouts.admin')

@section('title', 'Ürün Güncelleme')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">



                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Product Update</h4>
                            <p class="card-category">Modelin aldığı değerleri görebilirsiniz</p>
                        </div>

                        <div class="card-body">

                            <form method="POST" action="{{route('admin.product.update',[$rs->id]) }}">

                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="Category" class="form-control">

                                                <option class="form-control" type="number" value="{{$having->id}}" >{{$having->title}}</option>
                                                @foreach($data as $rr)
                                                    <option class="form-control" type="number" value="{{$rr->id}}" >{{$rr->title}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Title</label>
                                            <input required value="{{$rs->title}}" type="text" class="form-control" name="Title">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Quantity</label>
                                            <input   type="text" value="{{$rs->quantity}}" class="form-control" name="Quantity">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Slug</label>
                                            <input  type="text" value="{{$rs->slug}}" class="form-control" name="Slug">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Image</label>
                                            <input  type="text" class="form-control" name="Image">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Fiyat</label>
                                            <input  type="text" value="{{$rs->price}}" name="Price" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>uzun yazılar için</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                                <textarea class="form-control" value="{{$rs->detail}}" name="Detail" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Düzenle</button>


                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


@endsection
