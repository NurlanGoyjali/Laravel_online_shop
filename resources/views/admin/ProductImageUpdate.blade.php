@extends('layouts.admin')

@section('title', 'Resim Güncelleme')

@section('content')



    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title "  style="float: left"  >{{$product->title }} : İlgili resimi güncelle</h4>
                            <form method="POST" action="{{route('admin.image.update',[$product->id])}}" enctype="multipart/form-data"  >

                                @csrf
                                <button type="submit" class="btn btn-primary" style="float: right; background:#3f51b5;">Güncelle</button>


                        </div>
                        <div class="card-body">



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input required value="{{$product->title}}"  type="text" class="form-control" name="Title">
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
                                    <div class="">

                                        <label > Güncellemek istediğin foto</label>
                                        <img style="height: 80px;" src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}" alt="">

                                    </div>
                                </div>
                            </div>


                            </form>
                        </div>

                        <div class="table-responsive">


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">




            </div>
@endsection


