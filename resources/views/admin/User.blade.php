@extends('layouts.admin')

@section('title', 'Kullanıcılar')

@section('content')




    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title "  style="float: left"  >Kullanıcılar</h4>
                            <a href="{{route('admin.category.add')}}">

                                <button type="button" class="btn btn-primary" style="float: right; background:#3f51b5  ;">Ekle</button>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>SIRA</th>
                                    <th>Foto</th>
                                    <th>Adı</th>
                                    <th>Email</th>
                                    <th>Telefon</th>
                                    <th>Adress</th>
                                    <th>Rol</th>
                                    <th>Sil</th>
                                    <th>Düzenle</th>
                                    <th>Göster</th>


                                    </thead>
                                    @foreach($user as $data)
                                        <tbody>
                                        <tr>
                                            <td style="background:#F0F8FF;">
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                <img src="{{Storage::url($data->profile_photo_path)}}" alt="">
                                            </td>
                                            <td>
                                                {{ $data->name}}
                                            </td>
                                            <td style="background:#F0F8FF;">
                                                {{ $data->email}}
                                            </td>
                                            <td>
                                                {{$data->phone}}
                                            </td>
                                            <td>
                                                {{$data->address}}
                                            </td>
                                            <td>
                                                @foreach($data->roles as $row)
                                                {{$row->name}}
                                                @endforeach
                                            </td>
                                            <td> <a href="{{route('admin.user.destroy',$data->id)}}" onclick = "return confirm('Silemmi?')" >
                                                    <button style="background:#F5F5DC;" type="button" rel="tooltip"  class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                        <i class="material-icons">restore_from_trash</i>
                                                        <div  class="ripple-container"></div></button>  </a>
                                            </td>
                                            <td class="text-primary">
                                                <a href="{{route('admin.user.update',$data->id)}}" >
                                                    <button type="button" rel="tooltip" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                        <i style="background:#FF69B4;" class="material-icons">update</i>
                                                        <div class="ripple-container"></div></button>

                                                </a>
                                            </td>


                                            </td>
                                            <td class="text-primary">
                                                <a href="{{route('admin.user.show',$data->id)}}" >
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


