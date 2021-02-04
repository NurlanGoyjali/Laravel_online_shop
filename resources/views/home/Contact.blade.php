@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList()
@endphp
@section('title', 'İletişim'.$setting->title)
@section('description')  {{$setting->description}} @endsection
@section('keywords') {{$setting->keyword}} @endsection


@section('content')

    <section>
        <div class="container">
            <div class="col-sm-8">
    <div class="contact" style="margin-bottom: 3%;">
                {!! $setting->contact !!}
    </div>

            </div>

            <div class="col-sm-4">
@include('home._message')
                <div class="signup-form"><!--sign up form-->
                    <h2>İletişim Formu</h2>
                    <form action="{{route('contact')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="Ad Soyad" name="name" />
                        <input type="email" placeholder="Email" name="email" />
                        <input type="number" placeholder="Telefon" name="phone" />
                        <input type="text" placeholder="Konu" name="subject" />
                        <textarea type="num" placeholder="Mesaj" name="msg" cols="30" rows="5"></textarea>
                        <button type="submit" class="btn btn-default">Gönder</button>
                    </form>
                </div><!--/sign up form-->


            </div>
        </div>

    </section>


@endsection
