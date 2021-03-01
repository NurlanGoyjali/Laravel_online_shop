@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList();
    $data = \App\Http\Controllers\HomeController::CategoryList();
    $category_data = \App\Models\Category::all();


@endphp
@section('title', $setting->title)
@section('description')  {{$setting->description}} @endsection
@section('keywords',$setting->keywords)


@section('content')
    <section>


        <div  class="col-12">

            <form action="{{route('getproduct')}}" method="POST">
                @csrf
                @livewire('search')

            </form>


        </div>



    </section>


@endsection
