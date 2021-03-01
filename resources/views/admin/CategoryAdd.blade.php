@extends('layouts.admin')

@section('title', 'Kategory ekleme')

@section('content')
    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">



                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Katogori Ekle</h4>
                        <p class="card-category">bişeyler yazabilirsin</p>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{route('admin.category.create')}}">

                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Parent</label>

                                        <select name="Parent_id" class="form-control">
                                            <option value="0" class="form-control" name="Parent_id" >Parent Seç (Parenti Yok) </option>
                                        @foreach($data as $rs)
                                            <option class="form-control" value="{{$rs->id}}" >{{ $rs->title}}</option>
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
                                        <label class="bmd-label-floating"> Slug </label>
                                        <input  type="text" class="form-control" name="Slug">
                                    </div>
                                </div>
                            </div>





                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"> Status </label>
                                        <select class="form-control" name="Status" id="">

                                            <option class="form-control" value="True"> True </option>
                                            <option class="form-control" value="False">False</option>
                                        </select>
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
