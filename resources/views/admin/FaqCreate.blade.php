@extends('layouts.admin')

@section('title', 'SSS Ekle')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">



                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">SSS Ekle</h4>
                        <p class="card-category">bişeyler yazabilirsin</p>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{route('admin.faq.create')}}">

                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Statü</label>

                                        <select name="Status" class="form-control">
                                            <option class="form-control" value="Invizible" name="Status" >Görünmez</option>
                                            <option value="Vizible" class="form-control" name="Status" >Görünür</option>+
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Soru</label>
                                        <input required  type="text" class="form-control" name="Question">
                                    </div>
                                </div>
                            </div>







                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Cevap</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Cevap</label>
                                            <textarea class="form-control" name="Answer" rows="5"></textarea>
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
