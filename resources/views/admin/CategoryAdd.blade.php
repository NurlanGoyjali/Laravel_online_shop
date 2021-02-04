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
                                            <option value="" class="form-control" name="Parent_id" >Parent Seç (Parenti Yok) </option>
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
                                        <label class="bmd-label-floating"> Image</label>
                                        <input  type="text" class="form-control" name="Image">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">belki lazım olur</label>
                                        <input  type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>uzun yazılar için</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                            <textarea class="form-control" rows="5"></textarea>
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
