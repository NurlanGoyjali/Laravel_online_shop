@extends('layouts.admin')

@section('title', 'Ürün ekleme')






@section('content')




    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">



                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Product Add</h4>
                        <p class="card-category">bişeyler yazabilirsin</p>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{route('admin.product.create')}}" enctype="multipart/form-data"  >

                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Bağlı Olduğu Katagori</label>

                                        <select name="Category" class="form-control">
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
                                        <input required  type="text" class="form-control" name="Title">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Keywords</label>
                                        <input   type="text" class="form-control" name="Keywords">
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
                                        <label class="bmd-label-floating">Status</label>
                                        <select class="form-control">Status
                                        <option class="form-control" >True</option>
                                        <option class="form-control" selected="selected" >False</option>
                                        </select>
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
                                        <input  required type="text" name="price" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Stok</label>
                                        <input  type="text" name="quantity" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tax</label>
                                        <input  type="text" name="tax" class="form-control">
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
                                                    height: 120,
                                                    toolbar: [
                                                        ['style', ['style']],
                                                        ['font', ['bold', 'underline', 'clear']],
                                                        ['color', ['color']],
                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                        ['table', ['table']],
                                                        ['insert', ['link', 'picture', 'video']],
                                                        ['view', ['fullscreen', 'codeview', 'help']]
                                                    ]
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
        </div>


@endsection
