@extends('layouts.admin')

@section('title', 'Kategory ekleme')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">



                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Product Show</h4>
                            <p class="card-category">Modelin aldığı değerleri görebilirsiniz</p>
                        </div>

                        <div class="card-body">

                            <form method="POST">

                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kategory</label>
                                            <input required value="{{$catname->title}}" type="text" class="form-control" >

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
                                            <label class="bmd-label-floating">Keywords</label>
                                            <input   type="text" value="{{$rs->keywords}}" class="form-control" name="Keywords">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description</label>
                                            <input  type="text" value="{{$rs->description}}" class="form-control" name="Description">
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


                                        <label for="">Images</label>
                                        @if($rs->image)
                                            <img src="{{ Storage::url($rs->image) }}" height="80" alt="geldi">
                                        @endif



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


                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


@endsection
