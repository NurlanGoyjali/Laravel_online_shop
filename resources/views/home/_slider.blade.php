<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">

@foreach($sliderdata as $data)
                        <div class="item {{$loop->iteration == 1 ? 'active' : '  ' }}">
                            <div class="col-sm-6">
                                <h1><span>{{$data->title}}</span></h1>
                                <h2>{{$data->price}}</h2>
                            <p>{{$data->description}}</p>
                                <button type="button" class="btn btn-default get">Git</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ Storage::url($data->image) }}" class="girl img-responsive" style=" border-radius: 10px; height: 300px;" />

                            </div>
                        </div>
@endforeach


                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <script src="{{asset('assets')}}/js/jquery.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('assets')}}/js/price-range.js"></script>
    <script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('assets')}}/js/main.js"></script>


</section><!--/slider-->

