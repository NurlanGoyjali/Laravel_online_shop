@extends('layouts.admin')

@section('title', 'Kullanıcı Güncelleme')

@section('content')
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">



                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">User Update</h4>
                            <p class="card-category">Modelin aldığı değerleri görebilirsiniz</p>
                        </div>

                        <div class="card-body">

                            <form method="POST" action="{{route('admin.user.update',[$rs->id]) }}">

                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="Role" class="form-control">

                                                @foreach($rs->roles as $rr)
                                                    @if($rr->name == 'admin')
                                                        <option class="form-control"  name="Role"selected type="number" value="{{$rr->id}}" >{{$rr->name}}</option>
                                                        <option class="form-control" name="Role" type="number" value="2" >user</option>

                                                    @else($rr->name == 'user')
                                                        <option class="form-control" name="Role" selected type="number" value="{{$rr->id}}" >{{$rr->name}}</option>
                                                        <option class="form-control" name="Role" type="number" value="1" >admin</option>

                                                    @endif
                                                        @endforeach

                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">AD - Soyad</label>
                                            <input required value="{{$rs->name}}" type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input   type="text" value="{{$rs->email}}" class="form-control" name="email">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Telefon</label>
                                            <input  type="text" value="{{$rs->phone}}" class="form-control" name="phone">
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">address
                                            <label class="bmd-label-floating">Address</label>
                                            <input  type="text" value="{{$rs->address}}" name="address" class="form-control">
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
