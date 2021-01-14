@extends('layouts.admin')

@section('title', 'Product Images')

@section('content')



    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="POST" action="{{route('admin.image.create',[$product->id])}}" enctype="multipart/form-data"  >
                            @csrf
                        <div class="card-header card-header-primary">
                            <h4 class="card-title "  style="float: left"  >{{$product->title }} :: Ürününün Resim Galerisi</h4>




                                <button type="submit" class="btn btn-primary" style="float: right; background:#3f51b5;">Ekle</button>
                                <br>
                                <p >Foto eklemek için verileri girin</p>


                    </div>
                        <div class="card-body">



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Title</label>
                                            <input required  type="text" class="form-control" name="Title">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">

                                            <label > Image</label>
                                            <input  type="file"  name="Image" >
                                        </div>
                                    </div>
                                </div>



                        </div>
                        </form>
                            <div class="table-responsive">

                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>Sıra</th>
                                    <th>İsmi</th>
                                    <th>Foto</th>
                                    <th>İşlemler</th>
                                    </thead>
                                    @foreach($images as $data)
                                        <tbody>
                                        <tr>
                                            <td> {{$ct++}}  </td>
                                            <td>{{ $data->title}}</td>
                                            <td><img src="{{Illuminate\Support\Facades\Storage::url($data->image) }}" height="60"  alt="geldi"></td>

                                            <td class="text-primary">

                                            </td>
                                            <td class="text-primary">

                                            </td>


                                            <td class="text-primary">
                                                <p>foto galeri gelecek</p>

                                            </td>

                                            </td>
                                            <td class="text-primary">


                                                <a href="{{route('admin.image.destroy',$data->id)}}" onclick = "return confirm('Silemmi?')" >
                                                    <i class="material-icons">restore_from_trash</i>
                                                    <div ></div></button>  </a>


                                                <a href="{{route('admin.image.update',$data->id)}}" >
                                                    <i style="background:#FF69B4;" class="material-icons">update</i>
                                                    <div class=""></div></button>

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

@endsection


