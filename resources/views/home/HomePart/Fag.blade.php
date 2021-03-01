@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList()
@endphp
@section('title', 'SSS')
@section('description')  {{$setting->description}} @endsection
@section('keywords') {{$setting->keyword}} @endsection


@section('content')


<div class="container">

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.faq_question').click(function() {

                if ($(this).parent().is('.open')){
                    $(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
                    $(this).closest('.faq').removeClass('open');

                }else{
                    var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
                    $(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
                    $(this).closest('.faq').addClass('open');
                }

            });

        });
    </script>
    <style>
        /*FAQS*/
        .faq_question {
            margin: 0px;
            display: inline-block;
            cursor: pointer;
            font-weight: bold;

        }

        .faq_answer_container {
            height: 0px;
            overflow: hidden;
            padding: 0px;
        }

    </style>


    <div class="col-sm-12">


        @foreach($fag as $rs)
    <div class="faq_container">
        <div class="faq">
            <div class="faq_question"> <h2>{{$rs->question}}</h2></div>
            <div class="faq_answer_container">
                <div class="faq_answer"><p style="size: 50px;"> {{$rs->answer}} </p></div>
            </div>
        </div>
    </div>

        @endforeach

    </div>



    <script src="{{asset('assets')}}/js/jquery.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('assets')}}/js/price-range.js"></script>
    <script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('assets')}}/js/main.js"></script>


</div>



@endsection
