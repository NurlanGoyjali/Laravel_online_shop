@extends('layouts.admin')

@section('title', 'Ayarlar')

@section('content')
    <div class="content">


        <form action="{{route('admin.settings')}}" method="post">
            @csrf
        <div class="row" style="width: 200%; ">
            <div class="col-lg-6 col-md-12">
                <div class="card" >
                    <div class="card-header card-header-tabs card-header-primary" style="width: 98%;" >

                        <div class="nav-tabs-navigation" >
                            <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title">İşlemler:</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">

                                    <li class="nav-item">
                                        <a class="nav-link active" href="#profile" data-toggle="tab">
                                            <i class="material-icons">api</i> Genel
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#messages" data-toggle="tab">
                                            <i class="material-icons">attach_email</i> SMTP Mail
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#settings" data-toggle="tab">
                                            <i class="material-icons">social_distance</i> Sosyal Medya
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#about" data-toggle="tab">
                                            <i class="material-icons">all_inclusive</i> Hakkımızda
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#referances" data-toggle="tab">
                                            <i class="material-icons">campaign</i> Referanslar
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="card-body" >
                        <div class="tab-content" >
                            <div class="tab-pane active" id="profile">
                                <table class="table" >
                                    <tbody>

                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                        <label class="bmd-label-floating">Title</label>
                                                        <input  value="{{$rs->title}}"  type="text" class="form-control" name="Title">

                                    </div></div></div></tr>

                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Keywords</label>
                                                    <input  value="{{$rs->keywords}}"  type="text" class="form-control" name="Keywords">

                                                </div></div></div></tr>

                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Description</label>
                                                    <input  value="{{$rs->description}}"  type="text" class="form-control" name="Description">

                                                </div></div></div></tr>
                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Company</label>
                                                    <input  value="{{$rs->company}}"  type="text" class="form-control" name="Company">

                                                </div></div></div></tr>
                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Phone</label>
                                                    <input  value="{{$rs->phone}}"  type="text" class="form-control" name="Phone">

                                                </div></div></div></tr>
                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Fax</label>
                                                    <input  value="{{$rs->fax}}"  type="text" class="form-control" name="Fax">

                                                </div></div></div></tr>
                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Mail</label>
                                                    <input  value="{{$rs->email}}"  type="text" class="form-control" name="Mail">

                                                </div></div></div></tr>







                                    </tbody>
                                </table>
                            </div>



                            <div class="tab-pane" id="messages">
                                <table class="table">
                                    <tbody>
                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Smtp server</label>
                                                    <input  value="{{$rs->smtpserver}}"  type="text" class="form-control" name="Smtpserver">

                                    </div></div></div></tr>


                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Smtp Email</label>
                                                    <input  value="{{$rs->smtpemail}}"  type="text" class="form-control" name="Smtpemail">

                                                </div></div></div></tr>

                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Smtp Parola</label>
                                                    <input  value="{{$rs->smtppassword}}"  type="text" class="form-control" name="Smtppassword">

                                                </div></div></div></tr>

                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Smtp Port</label>
                                                    <input  value="{{$rs->smtpport}}"  type="text" class="form-control" name="Smtpport">

                                                </div></div></div></tr>

                                    </tbody>
                                </table>
                            </div>


                            <div class="tab-pane" id="settings">
                                <table class="table">
                                    <tbody>


                                    <tr>
                                        <div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Facebook</label>
                                                    <input  value="{{$rs->facebook}}"  type="text" class="form-control" name="Facebook">

                                        </div></div></div>

                                        </td>


                                    </tr>

                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Instagram</label>
                                                    <input  value="{{$rs->instagram}}"  type="text" class="form-control" name="Instagram">

                                                </div></div></div></tr>

                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Twitter</label>
                                                    <input  value="{{$rs->twitter}}"  type="text" class="form-control" name="Twitter">

                                                </div></div></div></tr>

                                    <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                    <label class="bmd-label-floating">Youtube</label>
                                                    <input  value="{{$rs->youtube}}"  type="text" class="form-control" name="Youtube">

                                                </div></div></div></tr>


                                    </tbody>
                                </table>

                            </div>

                                <div class="tab-pane" id="about">
                                    <table class="table">

                                        <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                        <label class="bmd-label-floating">hakkımızda</label>
                                                        <textarea   type="text" class="form-control" id="Aboutus" name="Aboutus">
                                                            {{$rs->aboutus}}
                                                        </textarea>
                                                        <script>
                                                            $('#Aboutus').summernote({

                                                                tabsize: 2,
                                                                height: 120,
                                                                toolbar: [
                                                                    ['style', ['style']],
                                                                    ['font', ['bold', 'underline', 'clear']],
                                                                    ['color', ['color']],
                                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                                    ['table', ['table']],
                                                                    ['insert', ['link', 'picture', 'video']],
                                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                                ]
                                                            });
                                                        </script>




                                                    </div></div></div></tr>

                                    </table>

                                </div>


                                <div class="tab-pane" id="referances">
                                    <table class="table">

                                        <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                        <label class="bmd-label-floating">İletişim</label>
                                                        <textarea   type="text" class="form-control" id="Contact" name="Contact">
                                                            {{$rs->contact}}
                                                        </textarea>
                                                        <script>
                                                            $('#Contact').summernote({

                                                                tabsize: 2,
                                                                height: 120,
                                                                toolbar: [
                                                                    ['style', ['style']],
                                                                    ['font', ['bold', 'underline', 'clear']],
                                                                    ['color', ['color']],
                                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                                    ['table', ['table']],
                                                                    ['insert', ['link', 'picture', 'video']],
                                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                                ]
                                                            });
                                                        </script>

                                        </div></div></div></tr>

                                        <tr><div class="row"><div class="col-md-12"><div class="form-group">

                                                        <label class="bmd-label-floating">Referanslar</label>
                                                        <textarea   type="text" class="form-control" id="References" name="References">
                                                            {{$rs->references}}
                                                        </textarea>
                                                        <script>
                                                            $('#References').summernote({

                                                                tabsize: 2,
                                                                height: 120,
                                                                toolbar: [
                                                                    ['style', ['style']],
                                                                    ['font', ['bold', 'underline', 'clear']],
                                                                    ['color', ['color']],
                                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                                    ['table', ['table']],
                                                                    ['insert', ['link', 'picture', 'video']],
                                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                                ]
                                                            });
                                                        </script>



                                                    </div></div></div></tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right">Güncelle</button>
        </form>
        </div>
    </div>


@endsection
