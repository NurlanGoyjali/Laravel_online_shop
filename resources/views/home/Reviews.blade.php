@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::SettingList()
@endphp
@section('title', 'Kullanıcı Profili')
@section('description')  {{$setting->description}} @endsection
@section('keywords') {{$setting->keyword}} @endsection


@section('content')
    <style>

        .css-toggle{

            color:white;
            font:400 15px'Open Sans';
            background-color:tomato;
            width:48%;
            padding:5% 50%;
            display:inline-block;
        }

        .js-toggle{

            color:white;
            font:400 15px'Open Sans';
            background-color:CornflowerBlue;
            width:48%;
            padding:1%;
            text-align:center;
            display:inline-block;
        }

        .css-toggle:hover span{display:block;}

        .css-toggle span, .js-toggle span{
            display:none;
            font-size:13px;
            padding-top:30px;
            color:#111;
        }




        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 15%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <section>
        <div class="container">




            <div class="col-sm-3"  style="margin-top: 2.5%; margin-left: -10%;">
                <div class="left-sidebar">
                    <h2>İşlemler</h2>

                    <div class="panel-group category-products" id="accordian"><!--category-products-->

                        <div class="panel panel-default">
                            <div class="panel-heading">

                                <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('review',Auth::id())}}" >Yorumlarım</a></h4>
                                <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('user.products',)}}" >Ürünlerim</a></h4>
                                <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('user.product.create')}}" >Ürün Ekle</a></h4>
                                <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="" >Favorilerim</a></h4>



                            </div>
                        </div>

                    </div><!--/category-products-->

                </div>
            </div>

            <div class="col-sm-9" style="margin-right: -15%;" >






                </head>
                <body>

                <h2>Yorumlarım</h2>

                <table>
                    <tr>
                        <th>Sıra</th>
                        <th>Yorumcu</th>
                        <th>Ürün</th>
                        <th>Başlık</th>
                        <th>Yorum</th>


                    </tr>

                    @foreach($revdata as $rs)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$rs->responsible}}</td>
                        <td>{{$rs->product->title}}</td>
                        <td>{{$rs->subject}}</td>
                        <td>  <div class="css-toggle" style="text-align: center;">Mesaj
                                <span>{{$rs->review}}</span>
                            </div>



                        </td>
                    </tr>
                    @endforeach



                </table>






            </div>

        </div>
    </section>





@endsection
