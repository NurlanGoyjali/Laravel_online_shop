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

                        @include('home.NavbarForUser')

                    </div><!--/category-products-->

                </div>
            </div>

            <div class="col-sm-9" style="margin-right: -15%;" >
            @include('profile.show')
            </div>

        </div>
    </section>


@endsection
