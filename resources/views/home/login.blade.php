@extends('layouts.home')

@include('home.HomePart._header')

<body>

<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>

                    <form action="{{route('loginchk')}}" method="POST">
                        @csrf
                        <input  type="email" placeholder="Name"  name="email"/>
                        <input  type="password" placeholder="Password" name="password" />

                        <button type="submit" class="btn btn-default">Login</button>
                    </form>


                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>

            <div class="col-sm-4"></div>
    </div>
    </div>

</section><!--/form-->


    @include('home.HomePart._footer')
