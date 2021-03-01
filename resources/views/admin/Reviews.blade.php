@extends('layouts.admin')

@section('title', 'Yorumlar')

@section('content')



    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title "  style="float: left"  >Yorumlar</h4>





                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>Sıra</th>
                                    <th>Alıcı</th>
                                    <th>Gonderen</th>
                                    <th>kosu</th>
                                    <th>Yorumu</th>
                                    <th>Tarih</th>
                                    <th>İşlemler</th>
                                    </thead>
                                    @foreach($review as $data)
                                        <tbody>
                                        <tr>
                                            <td class="text-primary"> {{$loop->iteration}}  </td>
                                            <td class="text-primary">{{$data->product->user->name}}</td>
                                            <td class="text-primary">{{ $data->user->name}}</td>
                                            <td class="text-primary">{{$data->subject}}</td>
                                            <td class="text-primary">{{$data->review}}</td>
                                            <td class="text-primary">{{$data->created_at}}</td>

                                            <td class="text-primary">

                                                <a href="{{route('admin.review.destroy',$data->id)}}" style="padding: 3px 15px;" onclick = "return confirm('Silemmi?')" >
                                                    <i class="material-icons">restore_from_trash</i>
                                                </a>

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


