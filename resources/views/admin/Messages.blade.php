@extends('layouts.admin')

@section('title', 'Mesajlar')

@section('content')




    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title "  style="float: left"  > Mesajlar    </h4>


                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>SIRA</th>
                                    <th>Gönderen</th>
                                    <th>Email</th>
                                    <th>Telefon</th>
                                    <th>Durum</th>
                                    <th>Sil</th>
                                    <th>Göster</th>


                                    </thead>
                                    @foreach($message as $data)
                                        <tbody>
                                        <tr>
                                            <td style="background:#F0F8FF;">
                                                {{$ct++}}
                                            </td>
                                            <td>
                                                {{ $data-> name}}
                                            </td>
                                            <td style="background:#F0F8FF;">
                                                {{ $data-> email}}
                                            </td>
                                            <td>
                                                {{ $data-> phone}}
                                            </td>
                                            <td>
                                                @if($data->status==0)   <p>Okunmadı</p>
                                                @else <p>Okundu</p>
                                                @endif
                                            </td>
                                            <td> <a href="{{route('admin.contact.destroy',$data->id)}}" onclick = "return confirm('Silinsinmi?')" >
                                                    <button style="background:#F5F5DC;" type="button" rel="tooltip"  class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                        <i class="material-icons">restore_from_trash</i>
                                                        <div  class="ripple-container"></div></button>  </a>
                                            </td>



                                            </td>
                                            <td class="text-primary">
                                                <a target="_blank" href="{{route('admin.contact.show',$data->id)}}" >
                                                    <button type="button" rel="tooltip" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                        <i style="background:#FF69B4;" class="material-icons">check_circle</i>
                                                        <div class="ripple-container"></div></button>

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


