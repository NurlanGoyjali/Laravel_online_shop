@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList()
@endphp
@section('title', 'Kullanıcı Profili')
@section('description')  {{$setting->description}} @endsection
@section('keywords') {{$setting->keyword}} @endsection


@section('content')

    <section>
        <div class="container">




            <div class="col-sm-3"  style="margin-top: 2.5%; margin-left: -10%;">
                <div class="left-sidebar">
                    <h2>İşlemler</h2>

                    <div class="panel-group category-products" id="accordian"><!--category-products-->

                            <div class="panel panel-default">
                                <div class="panel-heading">

                                    <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="#" >yazılabilir</a></h4>
                                    <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="#" >yazılabilir</a></h4>
                                    <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="#" >yazılabilir</a></h4>



                                </div>
                            </div>

                    </div><!--/category-products-->

                </div>
            </div>

            <div class="col-sm-9" style="margin-right: -15%;" >
            @include('profile.show')
            </div>

        </div>
    </section>


@endsection
