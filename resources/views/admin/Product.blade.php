@extends('layouts.admin')

@section('title', 'Products')

@section('content')



    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title "  style="float: left"  >Ürünler</h4>
                            <a href="{{route('admin.product.create')}}">

                                <button type="button" class="btn btn-primary" style="float: right; background:#3f51b5  ;">Ekle</button>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>Sıra</th>
                                    <th>İsmi</th>
                                    <th>Kategori</th>
                                    <th>Foto</th>
                                    <th>Adet</th>
                                    <th>Fiyat</th>
                                    <th>Foto Galeri</th>
                                    <th>İşlemler</th>
                                    </thead>
                                    @foreach($product as $data)
                                        <tbody>
                                        <tr>
                                            <td> {{$ct++}}  </td>
                                            <td>{{ $data->title}}</td>
                                            <td>{{$data->category->title}}</td>
                                            <td><img src="{{Illuminate\Support\Facades\Storage::url($data->image) }}" height="60"  alt="geldi"></td>

                                            <td class="text-primary">
                                                {{$data->quantity}}
                                            </td>
                                            <td class="text-primary">
                                                {{$data->price}}

                                            </td>


                                            <td class="text-primary">
                                                <a href="{{route('admin.image.show',$data->id)}}" >
                                                    <i style="background:#FF69B4;" class="material-icons">show</i>
                                                    <div class=""></div>

                                                </a>

                                            </td>

                                            <td class="text-primary">
                                                <a href="{{route('admin.product.show',$data->id)}}" >
                                                        <i style="background:#FF69B4;" class="material-icons">check_circle</i>
                                                        <div ></div>

                                                </a>

                                                <a href="{{route('admin.product.destroy',$data->id)}}" onclick = "return confirm('Silemmi?')" >
                                                        <i class="material-icons">restore_from_trash</i>
                                                        <div ></div>
                                                </a>


                                                <a href="{{route('admin.product.update',$data->id)}}" >
                                                        <i style="background:#FF69B4;" class="material-icons">update</i>
                                                        <div class=""></div>

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


