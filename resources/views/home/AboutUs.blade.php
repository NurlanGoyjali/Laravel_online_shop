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
            <div class="col-sm-9">

                {!! $setting->aboutus !!}


            </div>
        </div>

    </section>


@endsection
