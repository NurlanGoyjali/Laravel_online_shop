@extends('layouts.admin')

@section('title', 'Categories')

@section('content')




    <div class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header card-header-primary">
                                <h4 class="card-title "  style="float: left"  >Katagoriler    </h4>
                                <a href="{{route('admin.category.add')}}">

      <button type="button" class="btn btn-primary" style="float: right; background:#3f51b5  ;">Ekle</button>
                                </a>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                             İsmi
                                        </th>
                                        <th>
                                            Ürün sayı
                                        </th>
                                        <th>
                                            Sil
                                        </th>
                                        <th>
                                            Düzenle
                                        </th>
                                        <th>
                                            Göster
                                        </th>
                                        </thead>
       @foreach($category as $data)
                                        <tbody>
                                        <tr>
                                            <td>
                                                {{$ct++}}
                                            </td>
                                            <td>
                                                {{ $data->title}}
                                            </td>
                                            <td>
                                                {{'ürünsayı gelecek'}}
                                            </td>
                                            <td> <a href="{{route('admin.category.destroy',$data->id)}}" onclick = "return confirm('Silemmi?')" >
                                                <button style="background:#F5F5DC;" type="button" rel="tooltip"  class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                    <i class="material-icons">restore_from_trash</i>
                                                    <div  class="ripple-container"></div></button>  </a>
                                            </td>
                                            <td class="text-primary">
                                                <a href="{{route('admin.category.update',$data->id)}}" >
                                                <button type="button" rel="tooltip" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                    <i style="background:#FF69B4;" class="material-icons">update</i>
                                                    <div class="ripple-container"></div></button>

                                                </a>
                                            </td>


                                            </td>
                                            <td class="text-primary">
                                                <a href="{{route('admin.category.show',$data->id)}}" >
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


