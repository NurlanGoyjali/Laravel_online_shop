@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList();
    $data = \App\Http\Controllers\HomeController::CategoryList();
    $category_data = \App\Models\Category::all();


@endphp
@section('title','Referanslar '. $setting->title)
@section('description')  {{$setting->description}} @endsection
@section('keywords',$setting->keywords)


@section('content')
    <section>
        <div class="container">
            <div class="col-sm-9">

       {!! $setting->references !!}


        </div>
        </div>

    </section>


@endsection
