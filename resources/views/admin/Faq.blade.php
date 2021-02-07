@extends('layouts.admin')

@section('title', 'Faq')

@section('content')




    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title "  style="float: left"  >Sıkca Sorulan Sorular</h4>
                            <a href="{{route('admin.faq.create')}}">

                                <button type="button" class="btn btn-primary" style="float: right; background:#3f51b5  ;">Ekle</button>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>SIRA</th>
                                    <th>Soru</th>
                                    <th>Cevap</th>
                                    <th>Statü</th>
                                    <th>Sil</th>
                                    <th>Düzenle</th>


                                    </thead>
                                    @foreach($faq as $data)
                                        <tbody>
                                        <tr>
                                            <td style="background:#F0F8FF;">
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{ $data->question}}
                                            </td>
                                            <td style="background:#F0F8FF;">
                                                {{ $data->answer}}
                                            </td>
                                            <td>
                                                {{$data->status}}
                                            </td>
                                            <td> <a href="{{route('admin.faq.destroy',$data->id)}}" onclick = "return confirm('Silemmi?')" >
                                                    <button style="background:#F5F5DC;" type="button" rel="tooltip"  class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                        <i class="material-icons">restore_from_trash</i>
                                                        <div  class="ripple-container"></div></button>  </a>
                                            </td>
                                            <td class="text-primary">
                                                <a href="{{route('admin.faq.update',$data->id)}}" >
                                                    <button type="button" rel="tooltip" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                        <i style="background:#FF69B4;" class="material-icons">update</i>
                                                        <div class="ripple-container"></div></button>

                                                </a>
                                            </td>


                                            </td>

                                        </tr>

                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">




                </div>
@endsection


