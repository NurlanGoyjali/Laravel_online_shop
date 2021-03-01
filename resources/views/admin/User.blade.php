@extends('layouts.admin')

@section('title', 'Kullanıcılar')
@php
$usern=0; $adminn=0; $moderator=0;
@endphp

@section('content')


    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title "  style="float: left"  >Kullanıcılar</h4>
@php
$user_num = \App\Models\User::all();
foreach ($user_num as $rs){
    foreach ($rs->roles as $row)
    if ($row->name == 'user') $usern = $usern+1;
    if ($row->name == 'admin') $adminn = $adminn+1;
    if ($row->name == 'moderator') $moderator = $moderator+1;

}
@endphp



                            <div class="table-responsive"  style="float: right;  ">Kulanıcı sayımız : {{$usern}}</div>
                            <div class="table-responsive"  style="float: right;  ">Moderator sayımız : {{$moderator}}</div>
                            <div class="table-responsive"  style="float: right;  ">Admin sayımız : {{$adminn}}</div>


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
                                                <img src="{{Storage::url($data->profile_photo_path)}}" style=" width: 100px; " alt="">
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


