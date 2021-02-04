@extends('layouts.admin')

@section('title', 'Mesaj Gösterme')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">



                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Messages Show</h4>
                            <p class="card-category">Modelin aldığı değerleri görebilirsiniz</p>
                        </div>

                        <div class="card-body">

                            <form method="POST">

                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">İsim</label>
                                            <input required value="{{$rs->name}}" type="text" class="form-control" >

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input required value="{{$rs->email}}" type="text" class="form-control" name="Title">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Telefon</label>
                                            <input   type="text" value="{{$rs->pgone}}" class="form-control" name="Keywords">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Konu</label>
                                            <input  type="text" value="{{$rs->subject}}" class="form-control" name="Description">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Mesaj</label>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5">{{$rs->msg}}</textarea>
                                            </div>
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




                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


@endsection
